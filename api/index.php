<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TAGADIRT TV - بوابة البث المباشر</title>
    <link rel="icon" type="image/png" href="https://i.ibb.co/nNcyhyhC/Picsart-26-07-05-22-41-36-734.png">
    
    <!-- خطوط عربية وأيقونات احترافية -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Tajawal:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
    <!-- مشغلات الفيديو الخارجية -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/artplayer/dist/artplayer.js"></script>

    <style>
        :root {
            --bg: #070709;
            --surface: #0f0f12;
            --surface-hover: #17171c;
            --accent: #6a8dff;
            --accent-glow: rgba(106, 141, 255, 0.15);
            --border: #1d1d24;
            --text-main: #f3f4f6;
            --text-secondary: #9ca3af;
            --live-color: #ef4444;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background-color: var(--bg);
            color: var(--text-main);
            font-family: 'Tajawal', sans-serif;
            -webkit-tap-highlight-color: transparent;
            overflow-x: hidden;
            overflow-y: auto; /* تفعيل التمرير الطبيعي للموقع بالكامل كصفحة ويب حقيقية */
        }

        /* حاوية الموقع الرئيسية */
        .site-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* الهيدر العلوي للموقع (NavBar) */
        .site-header {
            background-color: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1001;
            padding: 12px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .header-logo img {
            width: 38px;
            height: 38px;
            object-fit: cover;
            border-radius: 8px;
        }

        .header-logo h1 {
            font-size: 19px;
            font-weight: 800;
            color: var(--accent);
            margin: 0;
            letter-spacing: 0.5px;
        }

        .nav-links {
            display: flex;
            gap: 22px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--accent);
        }

        .live-pulse-badge {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid var(--live-color);
            color: var(--live-color);
            padding: 4px 10px;
            border-radius: 50px;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .pulse-dot {
            width: 7px;
            height: 7px;
            background-color: var(--live-color);
            border-radius: 50%;
            animation: pulse-animation 1.5s infinite;
        }

        @keyframes pulse-animation {
            0% { transform: scale(0.9); opacity: 1; }
            50% { transform: scale(1.4); opacity: 0.5; }
            100% { transform: scale(0.9); opacity: 1; }
        }

        /* شبكة المحتوى الأساسية (تصميم ويب حقيقي عريض) */
        .main-container {
            max-width: 1450px;
            width: 90%;
            margin: 30px auto;
            display: grid;
            grid-template-columns: 1fr 380px; /* المشغل عريض، وقائمة القنوات بجانبه */
            gap: 30px;
            flex-grow: 1;
        }

        /* منطقة تشغيل الفيديو والتفاصيل */
        .stream-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .player-wrapper {
            background-color: #000;
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 16 / 9;
            border: 1px solid var(--border);
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
            position: relative;
        }

        #artplayer-container {
            width: 100%;
            height: 100%;
        }

        /* تخصيص المشغل داخلياً */
        #artplayer-container video {
            object-fit: fill !important;
        }

        /* تفاصيل القناة النشطة أسفل المشغل */
        .stream-details-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 20px;
        }

        .stream-title-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 12px;
        }

        .stream-title-area h2 {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
            color: var(--text-main);
        }

        .stream-category-badge {
            background: var(--accent-glow);
            color: var(--accent);
            border: 1px solid rgba(106, 141, 255, 0.3);
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .stream-desc {
            font-size: 13px;
            line-height: 1.7;
            color: var(--text-secondary);
            margin: 0;
        }

        /* العمود الجانبي (قائمة القنوات والتصنيفات) */
        .sidebar-column {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            max-height: calc(100vh - 120px);
            position: sticky;
            top: 90px; /* تلتصق بالقمة عند التمرير مثل يوتيوب */
        }

        .sidebar-header {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-header h3 {
            margin: 0;
            font-size: 15px;
            font-weight: 700;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* فلترة التصنيفات */
        .categories-filter {
            display: flex;
            gap: 6px;
            padding: 10px 15px;
            border-bottom: 1px solid var(--border);
            overflow-x: auto;
            scrollbar-width: none;
        }
        .categories-filter::-webkit-scrollbar {
            display: none;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid var(--border);
            color: var(--text-secondary);
            padding: 6px 12px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            transition: all 0.2s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--accent);
            color: #000;
            border-color: var(--accent);
        }

        /* حاوية القنوات بداخل العمود الجانبي */
        .channel-list-scroll {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
        }

        .channel-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .channel-item {
            position: relative;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 12px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--border);
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.2s ease;
            overflow: hidden;
        }

        .channel-item:hover, .channel-item.active {
            background: var(--surface-hover);
            border-color: var(--accent);
        }

        .channel-item img {
            width: 40px;
            height: 26px;
            object-fit: contain;
            border-radius: 4px;
            background: rgba(255,255,255,0.02);
        }

        .channel-item span {
            font-size: 12px;
            font-weight: 700;
            color: var(--text-main);
        }

        /* لوحة التحكم والإضافة السريعة */
        .panel-controls {
            padding: 12px 15px;
            border-top: 1px solid var(--border);
            background: rgba(0,0,0,0.15);
            border-radius: 0 0 16px 16px;
        }

        /* نموذج الإضافة */
        .add-channel-modal {
            background: #181821;
            border: 1px solid var(--border);
            padding: 15px;
            border-radius: 12px;
            margin-top: 8px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .add-channel-modal input {
            background: #0f0f12;
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 8px 12px;
            color: #fff;
            font-size: 12px;
            outline: none;
            width: 100%;
            box-sizing: border-box;
        }

        /* جدول المباريات المدمج (تنسيق موقع احترافي) */
        .matches-section {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 25px;
            margin-top: 10px;
        }

        .matches-section h3 {
            margin: 0 0 20px 0;
            font-size: 17px;
            font-weight: 800;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .matches-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 15px;
        }

        .match-card {
            background: rgba(255,255,255,0.01);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            text-align: center;
        }

        .match-teams {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            font-weight: 700;
            font-size: 13px;
        }

        .match-time {
            background: var(--accent-glow);
            color: var(--accent);
            font-size: 11px;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 5px;
        }

        /* فوتر الموقع */
        .site-footer {
            background-color: var(--surface);
            border-top: 1px solid var(--border);
            padding: 30px 5%;
            margin-top: 50px;
            font-size: 12px;
            color: var(--text-secondary);
        }

        .footer-grid {
            max-width: 1450px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-grid strong {
            color: var(--accent);
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: var(--text-secondary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        /* تجاوب الشاشات ودوران الأجهزة */
        @media (max-width: 1024px) {
            .main-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .sidebar-column {
                position: static;
                max-height: none;
            }
        }

        @media (max-width: 768px) {
            .site-header {
                padding: 12px 15px;
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            .nav-links {
                gap: 15px;
            }
            .main-container {
                width: 95%;
                margin: 15px auto;
            }
            .player-wrapper {
                position: sticky;
                top: 70px;
                z-index: 1000;
                border-radius: 8px;
            }
            .footer-grid {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="site-wrapper">
        
        <!-- الهيدر العلوي للموقع (قائمة التنقل) -->
        <header class="site-header">
            <a href="#" class="header-logo">
                <img src="https://i.ibb.co/nNcyhyhC/Picsart-26-07-05-22-41-36-734.png" alt="SAMBADÈ TV Logo">
                <h1>SAMBADÈ TV</h1>
            </a>
            <ul class="nav-links">
                <li><a href="#" class="active">الرئيسية</a></li>
                <li><a href="#matches">جدول المباريات</a></li>
                <li><a href="#contact">اتصل بنا</a></li>
            </ul>
            <div class="live-pulse-badge">
                <span class="pulse-dot"></span>
                <span>البث المباشر الآن</span>
            </div>
        </header>

        <!-- شبكة تخطيط ويب العريضة -->
        <main class="main-container">
            
            <!-- العمود الأيمن العريض (المشغل + البيانات) -->
            <div class="stream-column">
                <div class="player-wrapper">
                    <div id="artplayer-container"></div>
                </div>

                <div class="stream-details-card">
                    <div class="stream-title-area">
                        <h2 id="activeStreamTitle">أبوظبي الرياضية 1</h2>
                        <span class="stream-category-badge" id="activeStreamCategory">رياضية</span>
                    </div>
                    <p class="stream-desc">أنت تتابع الآن البث المباشر بأفضل جودة وسرعة ملائمة لجميع الأجهزة دون تقطيع. يمكنك تعديل الجودة من أيقونة الإعدادات بداخل المشغل، وفي حال مواجهة أي بطء أو توقف يرجى تحديث المشغل فوراً بالضغط على زر التحديث في لوحة التحكم.</p>
                </div>

                <!-- جدول المباريات (حصرى لتصميم المواقع الاحترافية) -->
                <section class="matches-section" id="matches">
                    <h3><i class='bx bx-calendar-star'></i> جدول مباريات اليوم</h3>
                    <div class="matches-grid">
                        <div class="match-card">
                            <span class="match-time">22:00 بتوقيت مكة</span>
                            <div class="match-teams">
                                <span>ريال مدريد</span>
                                <span>VS</span>
                                <span>برشلونة</span>
                            </div>
                        </div>
                        <div class="match-card">
                            <span class="match-time">19:30 بتوقيت مكة</span>
                            <div class="match-teams">
                                <span>مانشستر سيتي</span>
                                <span>VS</span>
                                <span>ليفربول</span>
                            </div>
                        </div>
                        <div class="match-card">
                            <span class="match-time">18:00 بتوقيت مكة</span>
                            <div class="match-teams">
                                <span>الوداد الرياضي</span>
                                <span>VS</span>
                                <span>الرجاء الرياضي</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- العمود الأيسر (قائمة القنوات الفاخرة) -->
            <div class="sidebar-column">
                <div class="sidebar-header">
                    <h3><i class='bx bx-play-circle'></i> قائمة قنوات البث</h3>
                    <button class="btn-reload" id="reloadBtn" onclick="reloadStream()" title="تحديث وتنشيط البث الحسابي">
                        <i class='bx bx-refresh'></i>
                    </button>
                </div>

                <!-- فلتر باقات القنوات -->
                <div class="categories-filter">
                    <button class="filter-btn active" onclick="filterCategory('all')">الكل</button>
                    <button class="filter-btn" onclick="filterCategory('sports')">رياضية</button>
                    <button class="filter-btn" onclick="filterCategory('news')">إخبارية</button>
                    <button class="filter-btn" onclick="filterCategory('entertainment')">ترفيه</button>
                    <button class="filter-btn" onclick="filterCategory('custom')">قنواتك</button>
                </div>

                <!-- قائمة القنوات المستقلة بالتمرير -->
                <div class="channel-list-scroll">
                    <div class="channel-list" id="channelListContainer">
                        <!-- يتم التوليد عبر الجافاسكريبت -->
                    </div>
                </div>

                <!-- التحكم السريع لتسجيل القنوات يدوياً -->
                <div class="panel-controls">
                    <button class="btn-toggle-form" id="toggleFormBtn" onclick="toggleAddForm()">
                        <i class='bx bx-plus-circle'></i> إضافة قناة يدوياً للموقع
                    </button>
                    
                    <div class="add-channel-modal" id="addChannelForm" style="display: none;">
                        <input type="text" id="newChName" placeholder="اسم القناة">
                        <input type="text" id="newChUrl" placeholder="رابط البث (m3u8)">
                        <input type="text" id="newChLogo" placeholder="رابط الشعار (اختياري)">
                        <div class="form-actions" style="display:flex; gap:5px; margin-top:5px;">
                            <button class="btn-add-submit" id="btnSubmitForm" style="flex:1; padding:7px; background:var(--accent); border:none; border-radius:5px; font-weight:bold; cursor:pointer;" onclick="saveChannel()">إضافة</button>
                            <button class="btn-cancel" style="padding:7px 15px; background:#2c2c35; border:none; border-radius:5px; color:#fff; cursor:pointer;" onclick="toggleAddForm()">إغلاق</button>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <!-- فوتر الموقع المدمج والمثالي للمتصفحات -->
        <footer class="site-footer">
            <div class="footer-grid">
                <span>جميع الحقوق محفوظة © 2026 | بوابة <strong>SAMBADÈ TV</strong></span>
                <div class="footer-links">
                    <a href="#">الرئيسية</a>
                    <a href="#matches">جدول المباريات</a>
                    <a href="#">سياسة الخصوصية</a>
                </div>
            </div>
        </footer>

    </div>

    <script>
        // مصفوفة القنوات الثابتة مع تصنيفها لفلترة المواقع
        const defaultChannels = [
            { 
                name: "أبوظبي الرياضية 1", 
                logo: "https://i.imgur.com/lKl2wZH.png",
                category: "sports",
                sources: [
                    { label: "HD (1080p)", url: "https://admdn1.cdn.mangomolo.com/adsports1/smil:adsports1.stream.smil/playlist.m3u8" }
                ]
            },
            { 
                name: "أبوظبي الرياضية 2", 
                logo: "https://i.imgur.com/9q8gFsq.png",
                category: "sports",
                sources: [
                    { label: "HD (1080p)", url: "https://admdn5.cdn.mangomolo.com/adsports2/smil:adsports2.stream.smil/playlist.m3u8" }
                ]
            },
            { 
                name: "الجزيرة الإخبارية", 
                logo: "https://i.imgur.com/x9TQYI3.jpg",
                category: "news",
                sources: [
                    { label: "HD (1080p)", url: "https://live-hls-web-aja.getaj.net/AJA/index.m3u8" }
                ]
            },
            { 
                name: "beIN SPORTS MAX 1", 
                logo: "https://assets.bein.com/mena/sites/3/2015/06/beIN_SPORTS_MAX1_DIGITAL_Mono.png",
                category: "sports",
                sources: [
                    { label: "244p (LQ)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/105644.m3u8" },
                    { label: "360p (SD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85865.m3u8" },
                    { label: "720p (HD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85866.m3u8" },                
                    { label: "1080p (FHD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85867.m3u8" }
                ]
            },
            { 
                name: "beIN SPORTS MAX 2", 
                logo: "https://assets.bein.com/mena/sites/3/2015/06/beIN_SPORTS_MAX2_DIGITAL_Mono.png",
                category: "sports",
                sources: [
                    { label: "244p (LQ)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/105645.m3u8" },
                    { label: "360p (SD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85868.m3u8" },
                    { label: "720p (HD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85869.m3u8" },
                    { label: "1080p (FHD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85870.m3u8" }
                ]
            },
            { 
                name: "beIN SPORTS MAX 3", 
                logo: "https://assets.bein.com/mena/sites/3/2015/06/beIN_SPORTS_MAX3_DIGITAL_Mono.png",
                category: "sports",
                sources: [
                    { label: "360p (SD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85871.m3u8" },     
                    { label: "720p (HD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85872.m3u8" },
                    { label: "1080p (FHD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85873.m3u8" }                                        
                ]
            },
            { 
                name: "beIN SPORTS MAX 4", 
                logo: "https://assets.bein.com/mena/sites/4/2015/06/beIN_SPORTS_MAX4_DIGITAL_Mono.png",
                category: "sports",
                sources: [                
                    { label: "360p (SD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85874.m3u8" },     
                    { label: "720p (HD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85875.m3u8" },             
                    { label: "1080p (FHD)", url: "http://auziatv.com:8080/live/fawzi2026/fawzi2026/85876.m3u8" }                    
                ]
            },
            { 
                name: "FOX LIVE HD", 
                logo: "https://i.ibb.co/CpbVq2rS/334102.png",
                category: "entertainment",
                sources: [
                    { label: "720p (HD)", url: "http://84.17.50.102/fox/index.m3u8" }
                ]
            },
            { 
                name: "SPORTS-DIGITAL", 
                logo: "https://imgs.search.brave.com/cVskO1jhA9uE81ItThYCJluaUFs3knAtgS2rPB480u4/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy85/LzkzL1Nwb3J0ZGln/aXRhbF9GdSVDMyU5/RmJhbGxfTG9nb18y/MDE5LnN2Zw",
                category: "sports",
                sources: [
                    { label: "720p (HD)", url: "https://edge22.776740.ir.cdn.ir/hls2/sport.m3u8" }
                ]
            },
            { 
                name: "BEIN FRANCE 1", 
                logo: "https://assets.bein.com/mena/sites/3/2015/06/beIN_SPORTS1_DIGITAL_Mono.png",
                category: "sports",
                sources: [
                    { label: "720p (HD)", url: "https://1nyaler.streamhostingcdn.top/stream/23/index.m3u8" }
                ]
            },
            { 
                name: "FAST SPORT", 
                logo: "https://i.ibb.co/nNcyhyhC/Picsart-26-07-05-22-41-36-734.png",
                category: "sports",
                sources: [
                    { label: "720p (HD)", url: "http://sewv654wfcsdwfi87fwvgbngh.siauliairsavlt.pw/iptv/MMMNMXMBCGWMZQ/15507/index.m3u8" }
                ]
            },
            { 
                name: "M6 HD", 
                logo: "https://i.ibb.co/B5x2b2wT/m62.png",
                category: "entertainment",
                sources: [
                    { label: "720p (HD)", url: "http://84.17.50.102/m6/index.m3u8" }
                ]
            }
        ];

        let myChannels = [];
        let art = null;
        let currentChIndex = 0;
        let currentSrcIndex = 0;
        let currentCategory = 'all';
        let editingCustomIndex = null;
        const container = document.getElementById('playerContainer');

        // دالة هامة لتبديل وتعديل البث غير الآمن وتوجيهه تلقائياً للسيرفر البروكسي
        function getSecureStreamUrl(originalUrl) {
            if (originalUrl.startsWith('http://')) {
                // نمرر البث مشفراً بـ Base64 لبروكسي PHP الداخلي الخاص بنا لتجنب حظر المتصفحات
                return window.location.origin + '/api/proxy.php?url=' + btoa(originalUrl);
            }
            return originalUrl;
        }

        function loadChannelsAndInit() {
            let customChannels = JSON.parse(localStorage.getItem('customChannels')) || [];
            myChannels = [
                ...defaultChannels,
                ...customChannels.map(c => ({ ...c, isCustom: true, category: 'custom' }))
            ];
            initChannelsUI();
        }

        function initChannelsUI() {
            const listContainer = document.getElementById('channelListContainer');
            listContainer.innerHTML = "";

            myChannels.forEach((c, index) => {
                // فلترة القنوات حسب الفئة المحددة
                if (currentCategory !== 'all' && c.category !== currentCategory) return;

                const activeClass = index === currentChIndex ? 'active' : '';
                
                listContainer.innerHTML += `
                    <div class="channel-item ${activeClass}" id="ch-${index}" onclick="selectChannel(${index})">
                        <img src="${c.logo}" alt="${c.name}">
                        <span>${c.name}</span>
                        ${c.isCustom ? `
                            <div class="channel-actions">
                                <button class="action-btn edit-btn" onclick="editChannel(event, ${index})" title="تعديل القناة"><i class='bx bx-edit-alt'></i></button>
                                <button class="action-btn delete-btn" onclick="deleteChannel(event, ${index})" title="حذف القناة"><i class='bx bx-trash'></i></button>
                            </div>
                        ` : ''}
                    </div>
                `;
            });
        }

        function filterCategory(category) {
            currentCategory = category;
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            initChannelsUI();
        }

        function selectChannel(index, srcIndex = 0) {
            if (index < 0 || index >= myChannels.length) return;

            const prevActive = document.querySelector('.channel-item.active');
            if (prevActive) prevActive.classList.remove('active');

            currentChIndex = index;
            currentSrcIndex = srcIndex;

            const currentItem = document.getElementById(`ch-${index}`);
            if (currentItem) currentItem.classList.add('active');

            const channel = myChannels[index];
            const source = channel.sources[srcIndex];

            // تحديث بطاقة تفاصيل البث أسفل المشغل
            document.getElementById('activeStreamTitle').innerText = channel.name;
            const catMap = { 'sports': 'رياضية', 'news': 'إخبارية', 'entertainment': 'ترفيهية', 'custom': 'قناتك الخاصة' };
            document.getElementById('activeStreamCategory').innerText = catMap[channel.category] || 'بث مباشر';

            if (art) {
                art.destroy(true);
                art = null;
            }

            // تطبيق دالة الأمان والبروكسي العكسي للرابط
            const finalStreamUrl = getSecureStreamUrl(source.url);
            const isM3u8 = finalStreamUrl.includes('.m3u8') || finalStreamUrl.includes('m3u8');

            art = new Artplayer({
                container: '#artplayer-container',
                url: finalStreamUrl,
                type: isM3u8 ? 'm3u8' : '',
                customType: isM3u8 ? {
                    m3u8: function (video, url) {
                        if (Hls.isSupported()) {
                            const hls = new Hls({
                                autoStartLoad: true,
                                capLevelToPlayerSize: false
                            });
                            hls.loadSource(url);
                            hls.attachMedia(video);
                            
                            hls.on(Hls.Events.MANIFEST_PARSED, function () {
                                const levels = hls.levels;
                                if (levels && levels.length > 1) {
                                    const qualityControl = levels.map((level, index) => ({
                                        html: level.height ? `${level.height}p` : `جودة ${index + 1}`,
                                        value: index,
                                    }));
                                    
                                    qualityControl.unshift({ html: 'تلقائي (Auto)', value: -1 });
                                    
                                    art.controls.update({
                                        name: 'quality',
                                        index: 10,
                                        position: 'right',
                                        html: 'الجودة',
                                        selector: qualityControl,
                                        onSelect: function (item) {
                                            hls.currentLevel = item.value;
                                            return item.html;
                                        },
                                    });
                                }
                            });
                        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                            video.src = url;
                        }
                    },
                } : {},
                poster: 'https://i.ibb.co/HL22r5h7/Picsart-26-07-02-05-17-29-809.jpg',
                volume: 0.8,
                isLive: isM3u8,
                autoplay: true,
                pip: false,
                autoMini: false, // تم الإلغاء لضمان استقرار المشغل في جميع الشاشات
                setting: true,
                playbackRate: true,
                aspectRatio: true,
                fullscreen: true,
                theme: '#6a8dff', 
                lang: 'ar', 
                i18n: {
                    'ar': {
                        Play: 'تشغيل',
                        Pause: 'إيقاف مؤقت',
                        Volume: 'مستوى الصوت',
                        Mute: 'كتم الصوت',
                        Unmute: 'إلغاء الكتم',
                        Fullscreen: 'ملء الشاشة',
                        'Exit Fullscreen': 'خروج من ملء الشاشة',
                        Settings: 'الإعدادات',
                        'Play Speed': 'سرعة التشغيل',
                        Aspect: 'أبعاد العرض',
                        Flip: 'تدوير الشاشة',
                        Pip: 'صورة داخل صورة',
                    }
                },
                controls: [
                    {
                        name: 'channel-title',
                        position: 'top', 
                        html: `<span>${channel.name}</span>`,
                    }
                ],
            });

            if (channel.sources.length > 1) {
                const staticQualities = channel.sources.map((src, idx) => ({
                    html: src.label,
                    value: idx,
                }));

                art.controls.add({
                    name: 'static-quality',
                    index: 10,
                    position: 'right',
                    html: source.label,
                    selector: staticQualities,
                    onSelect: function (item) {
                        selectChannel(index, item.value);
                        return item.html;
                    },
                });
            }
        }

        function resetFormState() {
            document.getElementById('newChName').value = '';
            document.getElementById('newChUrl').value = '';
            document.getElementById('newChLogo').value = '';
            document.getElementById('btnSubmitForm').innerText = "إضافة";
            editingCustomIndex = null;
        }

        function toggleAddForm() {
            const form = document.getElementById('addChannelForm');
            const toggleBtn = document.getElementById('toggleFormBtn');
            if (form.style.display === 'none') {
                form.style.display = 'flex';
                toggleBtn.innerHTML = "<i class='bx bx-x-circle'></i> إلغاء الإضافة";
            } else {
                form.style.display = 'none';
                resetFormState();
                toggleBtn.innerHTML = "<i class='bx bx-plus-circle'></i> إضافة قناة يدوياً للموقع";
            }
        }

        function saveChannel() {
            const name = document.getElementById('newChName').value.trim();
            const url = document.getElementById('newChUrl').value.trim();
            let logo = document.getElementById('newChLogo').value.trim();

            if (!name || !url) {
                alert("يرجى تعبئة اسم ورابط القناة.");
                return;
            }

            if (!logo) logo = "https://i.ibb.co/HL22r5h7/Picsart-26-07-02-05-17-29-809.jpg";

            let customChannels = JSON.parse(localStorage.getItem('customChannels')) || [];

            if (editingCustomIndex !== null) {
                customChannels[editingCustomIndex] = {
                    name: name,
                    logo: logo,
                    sources: [{ label: "تلقائي (Auto)", url: url }]
                };
                localStorage.setItem('customChannels', JSON.stringify(customChannels));
                loadChannelsAndInit();
                const actualIndex = defaultChannels.length + editingCustomIndex;
                selectChannel(actualIndex);
                alert("تم تحديث بيانات القناة بنجاح.");
            } else {
                const newChannel = {
                    name: name,
                    logo: logo,
                    sources: [{ label: "تلقائي (Auto)", url: url }]
                };
                customChannels.push(newChannel);
                localStorage.setItem('customChannels', JSON.stringify(customChannels));
                loadChannelsAndInit();
                selectChannel(myChannels.length - 1);
            }

            toggleAddForm();
        }

        function editChannel(event, index) {
            event.stopPropagation();
            const customIndex = index - defaultChannels.length;
            if (customIndex < 0) return;

            let customChannels = JSON.parse(localStorage.getItem('customChannels')) || [];
            const channel = customChannels[customIndex];

            document.getElementById('newChName').value = channel.name;
            document.getElementById('newChUrl').value = channel.sources[0].url;
            document.getElementById('newChLogo').value = channel.logo === "https://i.ibb.co/HL22r5h7/Picsart-26-07-02-05-17-29-809.jpg" ? "" : channel.logo;

            document.getElementById('btnSubmitForm').innerText = "حفظ التعديلات";
            document.getElementById('toggleFormBtn').innerHTML = "<i class='bx bx-x-circle'></i> إلغاء التعديل";
            document.getElementById('addChannelForm').style.display = 'flex';
            editingCustomIndex = customIndex;
        }

        function deleteChannel(event, index) {
            event.stopPropagation();
            if (!confirm("هل تريد حذف هذه القناة نهائياً؟")) return;

            const customIndex = index - defaultChannels.length;
            if (customIndex < 0) return;

            let customChannels = JSON.parse(localStorage.getItem('customChannels')) || [];
            customChannels.splice(customIndex, 1);
            localStorage.setItem('customChannels', JSON.stringify(customChannels));

            const wasActive = (currentChIndex === index);
            loadChannelsAndInit();

            if (wasActive) {
                selectChannel(0, 0);
            } else if (currentChIndex > index) {
                selectChannel(currentChIndex - 1, currentSrcIndex);
            } else {
                selectChannel(currentChIndex, currentSrcIndex);
            }
        }

        function reloadStream() {
            const reloadIcon = document.querySelector('#reloadBtn i');
            if (reloadIcon) reloadIcon.classList.add('bx-spin');
            selectChannel(currentChIndex, currentSrcIndex);
            setTimeout(() => {
                if (reloadIcon) reloadIcon.classList.remove('bx-spin');
            }, 800);
        }

        window.onload = function() {
            loadChannelsAndInit();
            selectChannel(0, 0); 
        };
    </script>
</body>
</html>
