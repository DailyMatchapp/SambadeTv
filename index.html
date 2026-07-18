<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بث مباريات Auzia TV</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- مكتبة تشغيل قنوات الـ m3u8 (HLS.js) -->
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body {
            background-color: #080c14;
            color: #f1f5f9;
            font-family: system-ui, -apple-system, sans-serif;
        }
        .pulse-live {
            box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7);
            animation: pulse 1.6s infinite;
        }
        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(239, 68, 68, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(239, 68, 68, 0); }
        }
    </style>
</head>
<body class="min-h-screen pb-16">

    <!-- الهيدر الرئيسي -->
    <header class="bg-slate-900/90 border-b border-slate-800/80 backdrop-blur sticky top-0 z-40">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <div class="bg-emerald-600 p-2.5 rounded-xl shadow-lg shadow-emerald-950/40">
                    <i class="fa-solid fa-satellite-dish text-white text-lg"></i>
                </div>
                <div>
                    <h1 class="text-lg font-bold tracking-tight">SAMBADE TV</h1>
                    <p class="text-xs text-slate-400">تحديث تلقائي للمباريات </p>
                </div>
            </div>
            
            <!-- شريط البحث -->
            <div class="relative w-full sm:w-72">
                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-slate-500">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </span>
                <input type="text" id="matchFilterInput" placeholder="ابحث عن فريق أو بطولة..." 
                       class="w-full pr-9 pl-4 py-2 bg-slate-950 border border-slate-800 rounded-lg text-sm text-slate-300 placeholder-slate-500 focus:outline-none focus:border-emerald-500 transition-colors text-right">
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 mt-8">

        <!-- تنبيه في حال فشل جلب البيانات بسبب CORS أو انقطاع الاتصال -->
        <div id="corsBanner" class="hidden mb-6 p-4 bg-red-950/20 border border-red-800/50 rounded-xl flex gap-3 text-sm text-red-200">
            <i class="fa-solid fa-circle-exclamation text-xl text-red-500 shrink-0 mt-0.5"></i>
            <div>
                <span class="font-bold">خطأ في جلب البيانات:</span> 
              لم نتمكن من الاتصال باللمصدر حالياً ! يرجى التحقق من اتصال الإنترنت.
            </div>
        </div>

       
      
        <!-- فلاتر التحكم والتاريخ -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8 pb-4 border-b border-slate-800/60">
            <!-- تاريخ المباريات -->
            <div class="flex gap-2 overflow-x-auto pb-1" id="dynamicTabs">
                <!-- يتم توليد التواريخ تلقائياً هنا -->
            </div>   
      
      
      
      

            <!-- أزرار تصفية حالة المباريات -->
            <div class="flex items-center gap-2">
           
                <button onclick="setStatusFilter('all')" id="status-all" class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-800 text-slate-200 border border-slate-700">الكل</button>
                <button onclick="setStatusFilter('live')" id="status-live" class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-900/50 text-slate-400 border border-transparent hover:text-slate-200">مباشر الآن</button>
                <button onclick="setStatusFilter('upcoming')" id="status-upcoming" class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-900/50 text-slate-400 border border-transparent hover:text-slate-200">القادمة</button>
            </div>
        </div>

        <!-- مؤشر تحميل البيانات -->
        <div id="loadingIndicator" class="flex flex-col items-center justify-center py-20 text-slate-500">
            <i class="fa-solid fa-circle-notch fa-spin text-3xl text-emerald-500 mb-3"></i>
            <p class="text-sm">جاري جلب جدول مباريات اليوم...</p>
        </div>

        <!-- حاوية عرض المباريات -->
        <div id="matchesContainer" class="space-y-8 hidden">
            <!-- يتم تعبئة المباريات هنا برمجياً مصنفة حسب البطولة -->
        </div>

        <!-- واجهة عدم وجود مباريات -->
        <div id="noMatchesView" class="hidden flex-col items-center justify-center py-20 text-slate-500">
            <i class="fa-solid fa-calendar-xmark text-4xl text-slate-700 mb-3"></i>
            <p class="text-sm" id="emptyStateText">لا توجد مباريات متاحة حالياً.</p>
        </div>

    </main>

    <!-- مودال مشغل البث المباشر -->
    <div id="streamPlayerModal" class="fixed inset-0 bg-slate-950/90 backdrop-blur-sm z-50 flex items-center justify-center hidden p-4" dir="ltr">
        <div class="bg-slate-900 border border-slate-800 rounded-2xl w-full max-w-4xl overflow-hidden shadow-2xl relative">
            <div class="p-4 border-b border-slate-800 flex justify-between items-center bg-slate-900/50">
                <button onclick="closeStreamModal()" class="text-slate-400 hover:text-white p-1">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
                <div class="flex items-center gap-2">
                    <h3 id="modalTitle" class="font-bold text-slate-200 text-sm sm:text-base truncate max-w-lg">Live Broadcast</h3>
                    <span id="playerLiveDot" class="w-2.5 h-2.5 rounded-full bg-red-500 pulse-live"></span>
                </div>
            </div>
            
            <!-- نافذة تشغيل البث -->
            <div class="relative pb-[56.25%] bg-black">
                <!-- مشغل iframe للروابط الخارجية المباشرة وصفحات الويب -->
                <iframe id="modalIframe" class="absolute top-0 left-0 w-full h-full border-none hidden" allowfullscreen scrolling="no" allow="autoplay; encrypted-media"></iframe>
                <!-- مشغل فيديو لنظام M3U8 والقنوات المباشرة -->
                <video id="modalVideo" class="absolute top-0 left-0 w-full h-full hidden" controls autoplay muted></video>
            </div>

            <div class="p-4 bg-slate-950/60 border-t border-slate-800 flex justify-between items-center text-xs text-slate-400">
                <a id="externalStreamBtn" href="#" target="_blank" class="px-3 py-1.5 bg-slate-850 hover:bg-slate-800 text-slate-200 rounded font-semibold flex items-center gap-1.5 transition-colors">
                    <i class="fa-solid fa-up-right-from-square"></i> Open Link
                </a>
                <span>بث مباشر خارجي </span>
            </div>
        </div>
    </div>

    <script>
        // الرابط الأساسي للـ API
        const API_BASE_ENDPOINT = "https://auziatv.com/matches_api.php";

        // ------------------------------------------------------------
        // 1. روابط القنوات اليدوية المخصصة
        // ------------------------------------------------------------
        const MANUAL_TV_LINKS = {
            "ESPN": "https://21.1kooralive.fun/albaplayer/live1/?serv=1", 
            "Apple TV": "https://21.1kooralive.fun/albaplayer/live2/?serv=2",
            "Sky Sports": "https://21.1kooralive.fun/albaplayer/live3/?serv=3", 
            "beIN Sports 1": "https://21.1kooralive.fun/albaplayer/live4/?serv=4",
        };

        let activeMatchesData = [];
        let activeDateSelection = "";
        let activeStatusFilter = "all";
        let hlsPlayerInstance = null;

        // ----------------- جلب البيانات الفعلي -----------------

        async function fetchMatches() {
            setLoading(true);
            document.getElementById('corsBanner').classList.add('hidden');
            let success = false;

            // نقوم بتعريف مصفوفة محاولات جلب البيانات: اتصال مباشر أولاً، ثم عبر البروكسيات البديلة
            const fetchAttempts = [
                { name: "Direct Connection (No Proxy)", url: API_BASE_ENDPOINT },
                { name: "CORS Proxy 1", url: `https://corsproxy.io/?url=${encodeURIComponent(API_BASE_ENDPOINT)}` },
                { name: "CORS Proxy 2 (AllOrigins Raw)", url: `https://api.allorigins.win/raw?url=${encodeURIComponent(API_BASE_ENDPOINT)}` },
                { name: "CORS Proxy 3 (AllOrigins Wrapped)", url: `https://api.allorigins.win/get?url=${encodeURIComponent(API_BASE_ENDPOINT)}` }
            ];

             for (const attempt of fetchAttempts) {
                try {
                    console.log(`جاري جلب البيانات باستخدام: ${attempt.name}`);
                    const response = await fetch(attempt.url);
                    if (!response.ok) throw new Error(`HTTP status: ${response.status}`);
                    
                    const text = await response.text();
                    let payload = null;

                    try {
                        payload = JSON.parse(text);
                    } catch (e) {
                        throw new Error("Response is not a valid JSON string");
                    }

                    // معالجة خاصة ببروكسي AllOrigins Wrapped في حال تم إرجاع البيانات مغلفة
                    if (attempt.name.includes("Wrapped") && payload && payload.contents) {
                        try {
                            payload = JSON.parse(payload.contents);
                        } catch (e) {
                            throw new Error("Wrapped contents are not a valid JSON");
                        }
                    }
                    
                    if (payload && Array.isArray(payload.matches)) {
                        activeMatchesData = payload.matches;
                        success = true;
                        console.log(`تم الجلب بنجاح عبر: ${attempt.name}`);
                        break;
                    }
                } catch (err) {
                    console.warn(`${attempt.name} فشل:`, err.message);
                }
            }

            if (!success) {
                console.error("فشلت جميع محاولات الاتصال.");
                document.getElementById('corsBanner').classList.remove('hidden');
                activeMatchesData = []; // إبقاء المصفوفة فارغة تماشياً مع طلبك لمنع المباريات اليدوية
            }

            generateDateTabs();
            renderDashboard();
        }

        // ----------------- معالجة عناصر الواجهة -----------------

        // توليد تبويبات التواريخ ديناميكياً من المباريات القادمة فعلياً من الـ API
        function generateDateTabs() {
            const dateMap = {};
            activeMatchesData.forEach(match => {
                if (match.date) {
                    dateMap[match.date] = true;
                }
            });

            const sortedDates = Object.keys(dateMap).sort((a, b) => new Date(a) - new Date(b));
            const todayStr = new Date().toISOString().split('T')[0]; // "2026-07-18"

            if (sortedDates.length > 0) {
                if (!activeDateSelection) {
                    // نختار تاريخ اليوم كخيار افتراضي إن وجد، وإلا نختار أول تاريخ متاح
                    if (dateMap[todayStr]) {
                        activeDateSelection = todayStr;
                    } else {
                        activeDateSelection = sortedDates[0];
                    }
                }
            } else {
                activeDateSelection = "";
            }

            const tabsContainer = document.getElementById('dynamicTabs');
            tabsContainer.innerHTML = "";

            sortedDates.forEach(dateVal => {
                const isSelected = dateVal === activeDateSelection;
                const dateObj = new Date(dateVal + 'T00:00:00');
                const label = dateObj.toLocaleDateString('en-MA', { weekday: 'short', month: 'short', day: 'numeric' });

                const btn = document.createElement('button');
                btn.className = isSelected 
                    ? "px-4 py-2 shrink-0 bg-emerald-600 text-white text-xs sm:text-sm font-semibold rounded-lg shadow-md transition-colors"
                    : "px-4 py-2 shrink-0 bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-slate-200 text-xs sm:text-sm font-medium rounded-lg transition-colors border border-slate-800";
                
                btn.innerText = label;
                btn.onclick = () => {
                    activeDateSelection = dateVal;
                    generateDateTabs();
                    renderDashboard();
                };
                tabsContainer.appendChild(btn);
            });
        }

        // تحديد حالة المباراة برمجياً بناءً على الوقت الحالي ووقت المباراة
        function calculateMatchStatus(match) {
            const startMs = match.ts * 1000;
            const liveDurationLimit = 120 * 60 * 1000; // ساعتان
            const now = Date.now();

            if (now < startMs) {
                return "upcoming";
            } else if (now >= startMs && now <= (startMs + liveDurationLimit)) {
                return "live";
            } else {
                return "finished";
            }
        }

        // جلب وتطبيق الرابط اليدوي للقناة المحددة من جدول التكوين MANUAL_TV_LINKS
        function parseStreamUrl(match) {
            const src = match.src ? match.src.trim() : "";
            
            // البحث عن رابط يدوي قمت بتعيينه مسبقاً في MANUAL_TV_LINKS
            if (MANUAL_TV_LINKS[src]) {
                return MANUAL_TV_LINKS[src];
            }

            // في حال عدم تعيين رابط يدوي وكان اسم المصدر يحتوي على بروتوكول http فإنه يعرضه مباشرة
            if (src.startsWith('http://') || src.startsWith('https://') || src.startsWith('//')) {
                return src;
            }

            // رابط احتياطي افتراضي في حال عدم وجود الرابط اليدوي
            return `https://auziatv.com/player.php?id=${match.id}&channel=${encodeURIComponent(src)}`;
        }

        function setStatusFilter(status) {
            activeStatusFilter = status;
            const options = ['all', 'live', 'upcoming'];
            options.forEach(opt => {
                const el = document.getElementById(`status-${opt}`);
                if (opt === status) {
                    el.className = "px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-800 text-slate-200 border border-slate-700";
                } else {
                    el.className = "px-3 py-1.5 rounded-lg text-xs font-semibold bg-slate-900/50 text-slate-400 border border-transparent hover:text-slate-200";
                }
            });
            renderDashboard();
        }

        // ----------------- محرك رندر الواجهات والمباريات -----------------

        function renderDashboard() {
            setLoading(false);
            const container = document.getElementById('matchesContainer');
            const noMatches = document.getElementById('noMatchesView');
            const searchVal = document.getElementById('matchFilterInput').value.toLowerCase();

            container.innerHTML = "";

            const filtered = activeMatchesData.filter(match => {
                if (match.date !== activeDateSelection) return false;

                const status = calculateMatchStatus(match);
                if (activeStatusFilter === 'live' && status !== 'live') return false;
                if (activeStatusFilter === 'upcoming' && status !== 'upcoming') return false;

                const queryMatches = match.home.toLowerCase().includes(searchVal) || 
                                     match.away.toLowerCase().includes(searchVal) || 
                                     match.league.toLowerCase().includes(searchVal);
                return queryMatches;
            });

            if (filtered.length === 0) {
                container.classList.add('hidden');
                noMatches.classList.remove('hidden');
                document.getElementById('emptyStateText').innerText = "لا توجد مباريات متاحة.";
                return;
            }

            noMatches.classList.add('hidden');
            container.classList.remove('hidden');

            const leagueGroup = {};
            filtered.forEach(match => {
                if (!leagueGroup[match.league]) {
                    leagueGroup[match.league] = [];
                }
                leagueGroup[match.league].push(match);
            });

            for (const [leagueName, events] of Object.entries(leagueGroup)) {
                let sectionMarkup = `
                    <div class="bg-slate-900/40 border border-slate-800/80 rounded-2xl overflow-hidden shadow-lg">
                        <!-- هيدر البطولة -->
                        <div class="px-5 py-3.5 bg-slate-900/90 border-b border-slate-800/80 flex items-center gap-2.5">
                            <i class="fa-solid fa-trophy text-amber-500 text-sm"></i>
                            <h2 class="font-bold text-slate-200 text-xs sm:text-sm uppercase tracking-wider">${leagueName}</h2>
                        </div>
                        <div class="divide-y divide-slate-800/50">
                `;

                events.forEach(match => {
                    const status = calculateMatchStatus(match);
                    const formattedStartTime = new Date(match.ts * 1000).toLocaleTimeString('en-MA', { hour: '2-digit', minute: '2-digit', hour12: true });
                    const targetStreamUrl = parseStreamUrl(match);

                    let badgeMarkup = "";
                    if (status === 'live') {
                        badgeMarkup = `<span class="flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-red-500/10 text-red-500 text-xs font-bold uppercase"><span class="w-1.5 h-1.5 rounded-full bg-red-500 pulse-live"></span> مباشر</span>`;
                    } else if (status === 'finished') {
                        badgeMarkup = `<span class="px-2 py-0.5 rounded bg-slate-950 text-slate-500 text-xs font-semibold uppercase">انتهت</span>`;
                    } else {
                        badgeMarkup = `<span class="px-2 py-0.5 rounded bg-slate-950 text-slate-400 text-xs font-bold">${formattedStartTime}</span>`;
                    }

                    sectionMarkup += `
                        <div class="p-4 sm:p-6 flex flex-col lg:flex-row justify-between items-center gap-6 hover:bg-slate-800/10 transition-all">
                            <div class="flex-1 w-full">
                                <div class="grid grid-cols-3 items-center gap-4 text-center">
                                    
                                    <!-- الفريق صاحب الأرض -->
                                    <div class="flex flex-col sm:flex-row-reverse items-center justify-end gap-3 text-right">
                                        <span class="font-bold text-sm sm:text-base text-slate-200 truncate max-w-[120px] sm:max-w-xs">${match.home}</span>
                                        <img src="${match.homeLogo}" alt="" onerror="this.src='https://a.espncdn.com/i/teamlogos/countries/500/fra.png'" class="w-10 h-10 object-contain p-1.5 bg-slate-950 rounded-full border border-slate-800">
                                    </div>
                                    
                                    <!-- لوحة النتيجة والتوقيت -->
                                    <div class="flex flex-col items-center justify-center">
                                        <div class="flex items-center gap-2 bg-slate-950/80 px-3.5 py-1.5 rounded-xl border border-slate-800/80 font-bold text-sm sm:text-base" dir="ltr">
                                            <span class="${status === 'finished' ? 'text-slate-400' : 'text-slate-200'}">${match.homeScore}</span>
                                            <span class="text-slate-600 text-xs">-</span>
                                            <span class="${status === 'finished' ? 'text-slate-400' : 'text-slate-200'}">${match.awayScore}</span>
                                        </div>
                                        <div class="mt-2.5">${badgeMarkup}</div>
                                    </div>
                                    
                                    <!-- الفريق الضيف -->
                                    <div class="flex flex-col-reverse sm:flex-row-reverse items-center justify-start gap-3 text-left">
                                        <img src="${match.awayLogo}" alt="" onerror="this.src='https://a.espncdn.com/i/teamlogos/countries/500/eng.png'" class="w-10 h-10 object-contain p-1.5 bg-slate-950 rounded-full border border-slate-800">
                                        <span class="font-bold text-sm sm:text-base text-slate-200 truncate max-w-[120px] sm:max-w-xs">${match.away}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- القناة والبث المباشر -->
                            <div class="w-full lg:w-60 shrink-0 flex flex-row lg:flex-col items-center lg:items-start justify-between lg:justify-center gap-3.5 border-t lg:border-t-0 border-slate-800/50 pt-4 lg:pt-0">
                                <div class="flex items-center gap-1.5 text-xs text-slate-400">
                                    <i class="fa-solid fa-tv text-slate-500"></i>
                                    <span class="truncate max-w-[180px] font-semibold">${match.src || "Live Feed"}</span>
                                </div>
                                ${status === 'finished' ? `
                                    <span class="text-xs text-slate-500 uppercase font-semibold tracking-wider">انتهت المباراة</span>
                                ` : `
                                    <button onclick="launchStreamModal('${targetStreamUrl}', '${match.home} vs ${match.away}')" 
                                            class="px-4 py-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold rounded-lg shadow-md transition-colors flex items-center gap-1.5">
                                        <i class="fa-solid fa-play text-[10px]"></i> تشغيل البث المباشر
                                    </button>
                                `}
                            </div>
                        </div>
                    `;
                });

                sectionMarkup += `</div></div>`;
                container.innerHTML += sectionMarkup;
            }
        }

        function setLoading(isLoading) {
            document.getElementById('loadingIndicator').style.display = isLoading ? 'flex' : 'none';
            if (isLoading) {
                document.getElementById('matchesContainer').classList.add('hidden');
                document.getElementById('noMatchesView').classList.add('hidden');
            }
        }

        // ----------------- معالجة وإطلاق البث داخل الـ Modal -----------------

        function launchStreamModal(url, title) {
            const modal = document.getElementById('streamPlayerModal');
            const iframe = document.getElementById('modalIframe');
            const video = document.getElementById('modalVideo');
            const modalTitle = document.getElementById('modalTitle');
            const externalBtn = document.getElementById('externalStreamBtn');

            modalTitle.innerText = `Broadcasting: ${title}`;
            externalBtn.href = url;

            const isDirectVideoStream = url.includes('.m3u8') || url.includes('.mp4');

            if (isDirectVideoStream) {
                iframe.classList.add('hidden');
                iframe.src = "";
                video.classList.remove('hidden');

                if (Hls.isSupported()) {
                    if (hlsPlayerInstance) hlsPlayerInstance.destroy();
                    
                    hlsPlayerInstance = new Hls();
                    hlsPlayerInstance.loadSource(url);
                    hlsPlayerInstance.attachMedia(video);
                    hlsPlayerInstance.on(Hls.Events.MANIFEST_PARSED, () => video.play());
                } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                    video.src = url;
                    video.play();
                } else {
                    video.src = url;
                    video.play();
                }
            } else {
                video.classList.add('hidden');
                video.pause();
                video.src = "";
                if (hlsPlayerInstance) {
                    hlsPlayerInstance.destroy();
                    hlsPlayerInstance = null;
                }
                iframe.classList.remove('hidden');
                iframe.src = url;
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeStreamModal() {
            const modal = document.getElementById('streamPlayerModal');
            const iframe = document.getElementById('modalIframe');
            const video = document.getElementById('modalVideo');

            iframe.src = "";
            video.pause();
            video.src = "";
            if (hlsPlayerInstance) {
                hlsPlayerInstance.destroy();
                hlsPlayerInstance = null;
            }

            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        // مستمعات الأحداث
        document.getElementById('matchFilterInput').addEventListener('input', renderDashboard);
        document.addEventListener('keydown', (e) => {
            if (e.key === "Escape") closeStreamModal();
        });

        // تشغيل وجلب البيانات الفعلي
        window.addEventListener('DOMContentLoaded', fetchMatches);
    </script>
</body>
</html>
