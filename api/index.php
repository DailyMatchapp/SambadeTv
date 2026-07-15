<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- وسوم تهيئة الموقع لمحركات البحث والهواتف -->
    <meta name="description" content="Pro M3U8 Player - Ultra منصة بث القنوات والروابط التفاعلية" />
    <meta name="theme-color" content="#08080c" />
    <title>Pro M3U8 Player - Ultra</title>
    
    <!-- Boxicons الأيقونات -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- خط Rubik الاحترافي للغة العربية -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* إعداد المتغيرات الافتراضية للشاشات العادية (أجهزة الحاسوب واللابتوب) */
        :root {
            --bg-color: #07080b;
            --sidebar-bg: #0e0f14;
            --accent-color: #00d2ff;
            --accent-glow: rgba(0, 210, 255, 0.35);
            --secondary-glow: #3a7bd5;
            --text-color: #f1f3f5;
            --card-bg: #14161f;
            --card-hover: #1b1e2a;
            --danger-color: #ff3b30;

            /* قياسات تخطيطية تتغير بتغير الشاشة */
            --sidebar-width: 340px;
            --base-font-size: 16px;
            --item-padding: 14px 16px;
            --icon-size: 1.3rem;
            --header-padding: 25px 20px;
        }

        /* 1. تخصيصات الشاشات اللوحية (Tablets) */
        @media (min-width: 768px) and (max-width: 1024px) {
            :root {
                --sidebar-width: 280px;
                --base-font-size: 14.5px;
                --item-padding: 12px 14px;
                --icon-size: 1.2rem;
                --header-padding: 20px 15px;
            }
        }

        /* 2. تخصيصات شاشات التلفاز والشاشات الضخمة (TV & Large Displays) */
        @media (min-width: 1440px) {
            :root {
                --sidebar-width: 420px;
                --base-font-size: 18px;
                --item-padding: 18px 24px;
                --icon-size: 1.6rem;
                --header-padding: 30px 25px;
            }
        }

        /* 3. تخصيصات الهواتف الذكية (Mobile) */
        @media (max-width: 767px) {
            :root {
                --sidebar-width: 100%;
                --base-font-size: 14px;
                --item-padding: 12px 14px;
                --icon-size: 1.2rem;
                --header-padding: 15px;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rubik', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-size: var(--base-font-size);
            height: 100vh;
            overflow: hidden;
        }

        #app {
            display: flex;
            flex-direction: row; /* يضمن أن المشغل في اليمين والقنوات على اليسار في الشاشات الكبيرة */
            height: 100vh;
            width: 100%;
        }

        /* ==================== 1. المشغل الرئيسي (اليمين) ==================== */
        #content {
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            background: #000;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.95);
        }

        #player-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #jwplayer-container {
            width: 100%;
            height: 100%;
            background: #000;
            position: relative;
        }

        /* زر إضافة قناة العائم */
        .toggle-add-btn {
            position: absolute;
            top: 25px;
            right: 25px;
            z-index: 100;
            background: rgba(0, 210, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--accent-color);
            color: var(--accent-color);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 26px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(0, 210, 255, 0.25);
        }

        .toggle-add-btn:hover {
            background: var(--accent-color);
            color: #000;
            transform: rotate(90deg) scale(1.08);
            box-shadow: 0 0 25px var(--accent-glow);
        }

        /* نافذة إضافة القناة العلوية المنسدلة */
        #add-slider {
            position: absolute;
            top: -100%; 
            left: 0;
            right: 0;
            background: rgba(14, 15, 20, 0.96);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);
            z-index: 101;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 25px 20px;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            border-bottom: 2px solid var(--accent-color);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.6);
        }

        #add-slider.show {
            top: 0;
        }

        .slider-title {
            font-size: 1.15rem;
            font-weight: 500;
            color: var(--accent-color);
            margin-bottom: 5px;
            letter-spacing: 0.5px;
        }

        .slider-inputs {
            display: flex;
            gap: 15px;
            width: 100%;
            max-width: 700px;
            justify-content: center;
            align-items: center;
        }

        .add-input {
            background: #1a1c26;
            border: 1px solid #2d3042;
            padding: 14px 22px;
            border-radius: 30px;
            color: white;
            outline: none;
            flex: 1;
            font-size: 0.95rem;
            transition: 0.3s;
        }

        .add-input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 12px rgba(0, 210, 255, 0.2);
        }

        .btn-save {
            background: var(--accent-color);
            color: #000;
            border: none;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
            white-space: nowrap;
        }

        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--accent-glow);
        }

        .btn-close-slider {
            background: rgba(255, 255, 255, 0.08);
            color: white;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            transition: 0.3s;
        }

        .btn-close-slider:hover {
            background: var(--danger-color);
            transform: scale(1.05);
        }

        /* ==================== 2. شريط القنوات الجانبي (اليسار) ==================== */
        #sidebar {
            width: var(--sidebar-width);
            background: var(--sidebar-bg);
            display: flex;
            flex-direction: column;
            border-right: 1px solid rgba(255, 255, 255, 0.04);
            z-index: 10;
            transition: width 0.3s ease;
        }

        .sidebar-header {
            padding: var(--header-padding);
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.35rem;
            font-weight: 700;
            background: linear-gradient(to left, var(--accent-color), var(--secondary-glow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .brand i {
            font-size: 1.5rem;
        }

        /* صندوق البحث الجانبي */
        .search-container {
            position: relative;
            width: 100%;
        }

        .search-container input {
            width: 100%;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.07);
            padding: 12px 42px 12px 15px;
            border-radius: 12px;
            color: #fff;
            outline: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .search-container input:focus {
            border-color: var(--accent-color);
            background: rgba(255, 255, 255, 0.06);
            box-shadow: inset 0 0 8px rgba(0, 0, 0, 0.5);
        }

        .search-container i {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #ffffff50;
            font-size: 1.2rem;
        }

        /* القائمة التمريرية */
        #channels-list {
            flex: 1;
            overflow-y: auto;
            padding: 15px;
            list-style: none;
        }

        .channel-item {
            background: var(--card-bg);
            margin-bottom: 12px;
            padding: var(--item-padding);
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid transparent;
        }

        .channel-info {
            display: flex;
            align-items: center;
            gap: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .channel-info i {
            font-size: var(--icon-size);
            color: var(--accent-color);
            transition: 0.3s;
        }

        .channel-info span {
            font-size: 0.95rem;
            font-weight: 400;
        }

        .channel-item:hover {
            background: var(--card-hover);
            border-color: rgba(0, 210, 255, 0.3);
            transform: translateX(-4px);
        }

        .channel-item.active {
            background: linear-gradient(145deg, rgba(0, 210, 255, 0.12), rgba(58, 123, 213, 0.05));
            border-color: var(--accent-color);
            box-shadow: 0 4px 18px rgba(0, 210, 255, 0.2);
        }

        .channel-item.active .channel-info i {
            text-shadow: 0 0 10px var(--accent-color);
        }

        /* زر الحذف الجانبي */
        .btn-delete {
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.25);
            cursor: pointer;
            padding: 5px;
            border-radius: 8px;
            transition: 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-delete:hover {
            color: var(--danger-color);
            background: rgba(255, 59, 48, 0.12);
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            display: none;
        }

        /* تهيئة شريط التمرير الجانبي */
        #channels-list::-webkit-scrollbar {
            width: 6px;
        }

        #channels-list::-webkit-scrollbar-track {
            background: transparent;
        }

        #channels-list::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 10px;
        }

        #channels-list::-webkit-scrollbar-thumb:hover {
            background: var(--accent-color);
        }

        /* ==================== 3. التجاوب مع الهواتف الذكية (Mobile CSS) ==================== */
        @media (max-width: 767px) {
            #app {
                flex-direction: column; /* المشغل أعلى الشاشة والقنوات بالأسفل */
            }

            #content {
                height: 45vh; /* تحديد نصف حجم الشاشة تقريباً للمشغل */
                box-shadow: 0 4px 20px rgba(0,0,0,0.5);
            }

            #sidebar {
                width: 100%;
                height: 55vh; /* النصف الآخر للقائمة */
                border-right: none;
                border-top: 1px solid rgba(255, 255, 255, 0.05);
            }

            .slider-inputs {
                flex-direction: column;
                width: 100%;
            }

            .add-input {
                width: 100%;
            }

            .btn-save {
                width: 100%;
            }

            #add-slider {
                padding: 15px;
            }

            .toggle-add-btn {
                top: 15px;
                right: 15px;
                width: 42px;
                height: 42px;
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div id="app">
        <!-- المشغل الرئيسي (يمين) -->
        <main id="content">
            <!-- زر الإضافة العائم -->
            <div class="toggle-add-btn" onclick="toggleSlider()" title="إضافة قناة جديدة">
                <i class='bx bx-plus'></i>
            </div>

            <!-- لوحة إضافة القناة المنسدلة -->
            <div id="add-slider">
                <div class="slider-title">إضافة قناة جديدة مخصصة</div>
                <div class="slider-inputs">
                    <input type="text" id="new-name" class="add-input" placeholder="اكتب اسم القناة هنا...">
                    <input type="text" id="new-url" class="add-input" placeholder="رابط البث (m3u8 أو Iframe)...">
                    <button class="btn-save" onclick="addNewChannel()">حفظ القناة</button>
                    <button class="btn-close-slider" onclick="toggleSlider()"><i class='bx bx-x'></i></button>
                </div>
            </div>

            <!-- حاوية البث -->
            <div id="player-wrapper">
                <div id="jwplayer-container">
                    <div id="jw-element"></div>
                    <iframe id="live-iframe" allowfullscreen></iframe>
                </div>
            </div>
        </main>

        <!-- شريط القنوات الجانبي (يسار) -->
        <aside id="sidebar">
            <div class="sidebar-header">
                <div class="brand">
                    <i class='bx bx-tv'></i>
                    <span>قائمة القنوات</span>
                </div>
                <!-- البحث السريع -->
                <div class="search-container">
                    <i class='bx bx-search'></i>
                    <input type="text" id="search-input" placeholder="ابحث عن اسم القناة..." oninput="renderChannels()">
                </div>
            </div>
            
            <!-- القنوات المفعلة والمضافة -->
            <ul id="channels-list">
                <!-- يتم التوليد التلقائي هنا -->
            </ul>
        </aside>
    </div>

    <!-- مكتبة مشغل JW Player الموثوقة -->
    <script src="https://cdn.jwplayer.com/libraries/IDzF9Zmk.js"></script>

    <script>
        // قنوات البث الافتراضية
        const defaultChannels = [
            { name: "الجزيرة الإخبارية", url: "https://live-hls-web-aja.getaj.net/AJA/index.m3u8", isDefault: true },
            { name: "سكاي نيوز عربية", url: "https://stream.skynewsarabia.com/hls/sna_720.m3u8", isDefault: true },
            { name: "MBC 1", url: "https://shls-mbc1na-prod-dub.shahid.net/out/v1/84ab37e99d6e4b16b33c6600f94f6ccb/index_1.m3u8", isDefault: true },
            { name: "Bein News", url: "http://aumaletv.com:8080/live/Lfabor2024/Lfabor2024/47816.m3u8", isDefault: true }
        ];

        // مزامنة البيانات مع التخزين المحلي لضمان عدم ضياع القنوات عند تحديث الموقع
        let channels = JSON.parse(localStorage.getItem('my_channels_v3')) || defaultChannels;
        
        let activeUrl = null;
        const jwElement = document.getElementById('jw-element');
        const iframeElement = document.getElementById('live-iframe');
        const slider = document.getElementById('add-slider');

        function toggleSlider() {
            slider.classList.toggle('show');
        }

        // معالجة تشغيل القناة
        function playChannel(url, element) {
            slider.classList.remove('show');
            activeUrl = url;
            
            // إزالة وتعيين الحالة النشطة بصرياً
            document.querySelectorAll('.channel-item').forEach(item => item.classList.remove('active'));
            if (element) {
                element.classList.add('active');
            }

            // تحديد المشغل المناسب للرابط تلقائياً
            if (url.includes('m3u8')) {
                iframeElement.style.display = 'none';
                jwElement.style.display = 'block';
                jwplayer("jw-element").setup({
                    file: url,
                    width: "100%",
                    height: "100%",
                    autostart: true,
                    stretching: "uniform"
                });
            } else {
                jwplayer("jw-element").stop();
                jwElement.style.display = 'none';
                iframeElement.style.display = 'block';
                iframeElement.src = url;
            }
        }

        // توليد قائمة القنوات ودعم فلترة البحث والحذف
        function renderChannels() {
            const list = document.getElementById('channels-list');
            const searchQuery = document.getElementById('search-input').value.trim().toLowerCase();
            list.innerHTML = '';

            channels.forEach((ch, index) => {
                // تصفية نتائج البحث
                if (searchQuery && !ch.name.toLowerCase().includes(searchQuery)) {
                    return;
                }

                const li = document.createElement('li');
                li.className = 'channel-item';
                if (ch.url === activeUrl) {
                    li.classList.add('active');
                }

                const infoDiv = document.createElement('div');
                infoDiv.className = 'channel-info';
                infoDiv.innerHTML = `<i class='bx bx-play-circle'></i> <span>${ch.name}</span>`;
                li.appendChild(infoDiv);

                // إظهار زر حذف فقط للقنوات التي أضافها المستخدم بنفسه
                if (!ch.isDefault) {
                    const deleteBtn = document.createElement('button');
                    deleteBtn.className = 'btn-delete';
                    deleteBtn.innerHTML = `<i class='bx bx-trash'></i>`;
                    deleteBtn.title = "حذف القناة";
                    deleteBtn.onclick = (e) => {
                        e.stopPropagation(); // منع تشغيل القناة عند محاولة الضغط على زر الحذف
                        deleteChannel(index);
                    };
                    li.appendChild(deleteBtn);
                }

                li.onclick = () => playChannel(ch.url, li);
                list.appendChild(li);
            });

            if (list.children.length === 0) {
                const noResult = document.createElement('li');
                noResult.style.cssText = 'text-align: center; color: #ffffff50; padding: 25px; font-size: 0.9rem;';
                noResult.innerText = "لم يتم العثور على نتائج";
                list.appendChild(noResult);
            }
        }

        // إضافة وحفظ قناة جديدة في المتصفح
        function addNewChannel() {
            const nameInput = document.getElementById('new-name');
            const urlInput = document.getElementById('new-url');

            const name = nameInput.value.trim();
            const url = urlInput.value.trim();

            if (name && url) {
                channels.unshift({ name: name, url: url, isDefault: false });
                localStorage.setItem('my_channels_v3', JSON.stringify(channels));
                
                nameInput.value = '';
                urlInput.value = '';
                
                renderChannels();
                toggleSlider();
                
                const firstElement = document.querySelector('.channel-item');
                if (firstElement) playChannel(url, firstElement);
            } else {
                alert('الرجاء التأكد من تعبئة اسم القناة ورابط البث بشكل صحيح.');
            }
        }

        // حذف قناة مخصصة مضافة سابقاً
        function deleteChannel(index) {
            if (confirm(`هل أنت متأكد من رغبتك في حذف القناة "${channels[index].name}"؟`)) {
                const wasActive = (channels[index].url === activeUrl);
                channels.splice(index, 1);
                localStorage.setItem('my_channels_v3', JSON.stringify(channels));
                renderChannels();
                
                if (wasActive && channels.length > 0) {
                    const firstElement = document.querySelector('.channel-item');
                    playChannel(channels[0].url, firstElement);
                }
            }
        }

        window.onload = () => {
            renderChannels();
            if (channels.length > 0) {
                const firstElement = document.querySelector('.channel-item');
                playChannel(channels[0].url, firstElement);
            }
        };
    </script>
</body>
</html>
