export default async function handler(req, res) {
  // تفعيل الـ CORS لتتمكن صفحتك من قراءة البيانات
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader('Access-Control-Allow-Methods', 'GET');

  try {
    // جلب البيانات من السيرفر الأصلي مع ترويسة User-Agent لتجنب الحظر 403
    const response = await fetch('https://auziatv.com/matches_api.php', {
      headers: {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36'
      }
    });

    if (!response.ok) {
      return res.status(response.status).json({ error: `Error from source: ${response.status}` });
    }

    // التحقق من نوع البيانات وإعادتها بصيغتها الصحيحة
    const contentType = response.headers.get('content-type');
    if (contentType && contentType.includes('application/json')) {
      const data = await response.json();
      return res.status(200).json(data);
    } else {
      const text = await response.text();
      return res.status(200).send(text);
    }
  } catch (error) {
    return res.status(500).json({ error: error.message });
  }
}
