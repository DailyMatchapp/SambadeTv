<?php
// تفعيل إعدادات CORS للسماح بالوصول الكامل للبث
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Access-Control-Allow-Headers: *");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

$url = isset($_GET['url']) ? $_GET['url'] : '';
if (empty($url)) {
    http_response_code(400);
    echo "Missing url parameter";
    exit;
}

// فك تشفير الرابط في حال تم إرساله بترميز Base64 لتجنب مشاكل صياغة الرموز في المتصفح
if (strpos($url, 'http') !== 0) {
    $url = base64_decode($url);
}

// التحقق من صحة الرابط المرسل
if (filter_var($url, FILTER_VALIDATE_URL) === false) {
    http_response_code(400);
    echo "Invalid URL";
    exit;
}

// جلب البث عبر cURL مع محاكاة متصفح حقيقي لتجاوز الحظر
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');

$response = curl_exec($ch);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code($httpCode);
    exit;
}

if ($contentType) {
    header("Content-Type: " . $contentType);
}

$isM3u8 = (strpos($url, '.m3u8') !== false || strpos($contentType, 'mpegurl') !== false || strpos($contentType, 'x-mpegURL') !== false);

if ($isM3u8) {
    // تحديد المسار الأساسي ومسار المضيف لإعادة بناء الروابط النسبية داخلياً
    $baseUrl = dirname($url) . '/';
    $parsedUrl = parse_url($url);
    $hostUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
    if (isset($parsedUrl['port'])) {
        $hostUrl .= ':' . $parsedUrl['port'];
    }

    $lines = explode("\n", $response);
    $output = [];
    
    foreach ($lines as $line) {
        $line = trim($line);
        if (empty($line)) continue;
        
        // تعديل الروابط الداخلية لملفات الترخيص والـ Keys والتشفير لتمر أيضاً من خلال البروكسي
        if (strpos($line, '#') === 0) {
            if (preg_match('/URI=["\'](.*?)["\']/', $line, $matches)) {
                $uri = $matches[1];
                $absoluteUri = makeAbsolute($uri, $baseUrl, $hostUrl);
                $proxiedUri = getProxyUrl($absoluteUri);
                $line = str_replace($uri, $proxiedUri, $line);
            }
            $output[] = $line;
        } else {
            // توجيه جميع ملفات بث الـ (.ts) ومقاطع الفيديو عبر هذا البروكسي
            $absoluteUri = makeAbsolute($line, $baseUrl, $hostUrl);
            $proxiedUri = getProxyUrl($absoluteUri);
            $output[] = $proxiedUri;
        }
    }
    echo implode("\n", $output);
} else {
    // حفظ الكاش مؤقتاً لملفات الفيديوهات المقسمة لزيادة السرعة وثبات التمرير
    header("Cache-Control: public, max-age=10");
    echo $response;
}

// تحويل الروابط النسبية إلى روابط كاملة ومباشرة
function makeAbsolute($url, $baseUrl, $hostUrl) {
    if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
        return $url;
    }
    if (strpos($url, '//') === 0) {
        return 'https:' . $url;
    }
    if (strpos($url, '/') === 0) {
        return $hostUrl . $url;
    }
    return $baseUrl . $url;
}

// توليد رابط ممرر عبر البروكسي محلياً بشكل ديناميكي
function getProxyUrl($targetUrl) {
    $encoded = base64_encode($targetUrl);
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $proxyHost = $protocol . '://' . $_SERVER['HTTP_HOST'];
    return $proxyHost . '/api/proxy.php?url=' . urlencode($encoded);
}
?>
