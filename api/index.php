<!doctype html>
<html dir="rtl" lang="ar">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>عنواني الجديد</title> 
        <meta name='robots' content='noindex, nofollow' /> 
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta name="description" content="صفحة عرض المباريات بتصميم يستجيب بشكل مثالي للشاشات الصغيرة والكبيرة." />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
    /* ===== Fonts & Global Styles (بدون تغيير) ===== */
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700;900&display=swap');
    
    /* 🌟 متغيرات النيومورفيزم الهادئ 🌟 */
    :root {
        --main-bg: #E0E5EC; /* خلفية محايدة وناعمة */
        --card-bg: var(--main-bg); /* البطاقة بنفس لون الخلفية */
        --card-hover: #F0F5FC; /* لون أفتح قليلاً عند التمرير */
        --text-color: #333333; /* نص داكن */
        --text-secondary: #777777; 
        --accent-blue: #6a5acd; /* لون مميز هادئ (Slate Blue) */
        --live-red: #dc3545; /* الأحمر للمباشر */
        --neumo-shadow-light: #ffffff; /* الظل الفاتح (لإعطاء إحساس الإضاءة) */
        --neumo-shadow-dark: #a3b1c6; /* الظل الداكن (لإعطاء إحساس العمق) */
        --border-color: rgba(0, 0, 0, 0.05); 
    }

    body {
        font-family: 'Cairo', sans-serif !important;
        background-color: var(--main-bg) !important;
        color: var(--text-color) !important;
        min-height: 100vh;
    }

  /* --- تنسيقات النيومورفيزم لشريط التنقل --- */
.neumorphic-navbar {
    background-color: var(--main-bg) !important;
    border-radius: 0 0 20px 20px; /* حافة ناعمة في الأسفل */
    padding: 0.5rem 0; /* تقليل الحشو قليلاً */
    /* ظل خفيف للنيومورفيزم (لتظهر كأنها مرتفعة قليلاً) */
    box-shadow: 
        5px 5px 10px var(--neumo-shadow-dark), 
        -5px -5px 10px var(--neumo-shadow-light);
}

.neumorphic-navbar .navbar-brand {
    color: var(--text-color) !important;
}

/* تنسيق روابط التنقل العامة */
.neumorphic-navbar .nav-link {
    color: var(--text-color) !important;
    font-weight: 600;
    border-radius: 8px;
    padding: 0.5rem 1rem;
    transition: all 0.3s;
}

/* تأثير التمرير (Hover) لروابط التنقل - ضغط خفيف */
.neumorphic-navbar .nav-link:hover {
    background-color: var(--card-hover);
    box-shadow: 
        inset 2px 2px 5px var(--neumo-shadow-dark), 
        inset -2px -2px 5px var(--neumo-shadow-light);
}

/* العنصر النشط (Active Link) */
.neumorphic-navbar .nav-link.active {
    background-color: var(--accent-blue) !important;
    color: white !important;
    box-shadow: 
        inset 3px 3px 7px rgba(0, 0, 0, 0.2), 
        inset -3px -3px 7px rgba(255, 255, 255, 0.5);
}

/* لضمان أن أيقونة التبديل (Toggler) تستخدم اللون الداكن */
.navbar-toggler i {
    color: var(--text-color) !important; 
    font-size: 1.5rem;
}
  
  
  
  
  /* --- Filters Bar Styling (أفقية في المنتصف) --- */
 /* --- Filters Bar Styling (أفقية في المنتصف) --- */
    .filter-bar-wrapper {
        text-align: center; 
        margin-bottom: 2rem;
        margin-top: 2.5rem;
    }
    .filter-bar {
        display: inline-flex; 
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap; 
    }

    /* تطبيق تأثير النيومورفيزم على الأزرار */
    .filter-btn {
        background-color: var(--card-bg);
        border: none;
        color: var(--text-color);
        padding: 0.7rem 0.5rem;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        /* الظلال الرئيسية للنيومورفيزم (إحساس بالبروز) */
        box-shadow: 
            8px 8px 16px var(--neumo-shadow-dark), 
            -8px -8px 16px var(--neumo-shadow-light);
    }

  
  
  
  
  
    .filter-btn:hover {
        background-color: var(--card-hover);
        /* ظل خفيف عند التمرير */
        box-shadow: 
            4px 4px 8px var(--neumo-shadow-dark), 
            -4px -4px 8px var(--neumo-shadow-light);
    }
    
    /* عند التفعيل (زر مضغوط/منخفض) */
    .filter-btn.active {
        
        border-color: var(--accent-blue) !important;
        color: var(--accent-blue) !important;
        /* ظل داخلي (Inset Shadow) لتبدو كأنها مضغوطة داخل الواجهة */
        box-shadow: 
            inset 1px 1px 3px var(--neumo-shadow-dark), 
            inset -1px -1px 1px  var(--neumo-shadow-light); /* ظل فاتح معدل للون النشط */
    }
    
    /* Live Button specific styling */
    #liveFilterBtn {
        
       color: var(--text-color);
        /* إبقاء الظل الخارجي لـ Live حتى لو كان نشطاً للتمييز */
       box-shadow: 
            8px 8px 16px var(--neumo-shadow-dark), 
            -8px -8px 16px var(--neumo-shadow-light);
    }
    
    #liveFilterBtn.active {
        /* عند التفعيل، يصبح الظل داخلياً مع تأثير النبض */
       box-shadow: 
            inset 4px 4px 8px var(--neumo-shadow-dark), 
            inset -1px -1px 1px  var(--neumo-shadow-light);
       
    }
    
    @keyframes livePulseActive {
        0% { color:#f33; }
        50% { color:#f44; }
        100% { color:#007bff; }
    }


    /* --- Base Match Card Style --- */
    .match-strip-card {
        background-color: var(--card-bg);
        border-radius: 15px; /* حواف أكثر نعومة */
        border: none;
        margin-bottom: 1.5rem; /* تباعد أكبر بين البطاقات */
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        /* تطبيق الظلال النيومورفية على البطاقة */
        box-shadow: 
            10px 10px 20px var(--neumo-shadow-dark), 
            -10px -10px 20px var(--neumo-shadow-light);
    }

    /* ظل خارجي أكبر عند التمرير (الرفع) - التعديل الأخير */
    .match-strip-card:hover {
        background-color: var(--card-hover);
        box-shadow: 
            15px 15px 30px var(--neumo-shadow-dark), 
            -15px -15px 30px var(--neumo-shadow-light);
    }
    
    .card-league-header {
        /* إبقاء العنوان واضحاً بلمسة من اللون المميز */
        background-color: rgba(106, 90, 205, 0.1); 
        color: var(--accent-blue);
        padding: 0.6rem 1.5rem;
        font-weight: 700;
        font-size: 0.9rem;
        border-bottom: 1px solid var(--border-color);
    }

    .live-indicator-strip {
        /* اللون الأحمر لـ "مباشر" */
        display: inline-block;
        padding: 0.1rem 0.4rem;
        background-color: var(--live-red);
        color: white;
        border-radius: 5px;
        font-size: 0.65rem;
        font-weight: 700;
        animation: livePulse 1.5s infinite;
        /* ظل خفيف للتمييز */
        box-shadow: 0 0 5px rgba(220, 53, 69, 0.8); 
    }

    @keyframes livePulse {
        0% { opacity: 1; }
        50% { opacity: 0.8; }
        100% { opacity: 1; }
    }
    
    .match-link-overlay {
        position: absolute;
        inset: 0;
        z-index: 10;
        cursor: pointer;
    }
  
  
  /* تنسيق عنوان الدوري في شريط المباراة */
.card-league-header {
    /* يمكنك استخدام لون ثابت، مثل #FFD700 (ذهبي)، أو استخدام متغير */
    color: var(--primary-color); /* استخدم لونك الأساسي */
    
    /* إذا أردت جعل النص أثقل (أغمق) */
    font-weight: 600; 
    
    /* إذا أردت حجم خط مختلف */
    font-size: 0.95rem; 

    padding: 0.5rem 1rem; /* لترتيب المسافة الداخلية */
}

/* تنسيق أيقونة الكأس (bi-trophy-fill) داخل العنوان */
.card-league-header i {
    /* اجعل لون الأيقونة مطابقاً للون النص أو لون مميز آخر */
    color: #888; 
}
  
    
    /* --- Common Element Styling --- */
    .team-logo-horizontal {
        width: 80px; 
        height: 80px; 
        object-fit: contain;
        border-radius: 2%;
        background: transparent; 
        padding: 3px;
        flex-shrink: 0;
    }
    
    .team-name-horizontal {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--text-color);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        margin: 0 10px;
    }

    /* ================================================= */
    /* --- 1. DESKTOP LAYOUT STYLES (Default / > 768px) --- */
    /* ================================================= */
    .desktop-layout {
        display: flex; 
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
    }
    
    .desktop-layout .teams-vs-score-column {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px;
    }

    .desktop-layout .team-side-horizontal {
        display: flex;
        align-items: center;
        min-width: 0;
        flex-basis: 40%; 
    }

    .desktop-layout .team-home-strip { justify-content: flex-end; }
    .desktop-layout .team-home-strip .team-name-horizontal { order: 2; margin-right: 0; }
    .desktop-layout .team-home-strip .team-logo-horizontal { order: 1; margin-left: 10px; }

    .desktop-layout .team-away-strip { justify-content: flex-start; }
    .desktop-layout .team-away-strip .team-name-horizontal { order: 1; margin-left: 0; }
    .desktop-layout .team-away-strip .team-logo-horizontal { order: 2; margin-right: 10px; }


    .desktop-layout .score-separator {
        flex-shrink: 0;
        text-align: center;
        width: 100px;
        display: flex;
        flex-direction: column; 
        align-items: center;
    }

    .desktop-layout .score-strip {
        font-size: 1.25rem;
        font-weight: 900;
        color: var(--accent-blue);
        order: 2;
    }

    .desktop-layout .time-status-center {
        font-size: 0.8rem;
        font-weight: 700;
        color: var(--text-secondary);
        order: 1; 
        margin-bottom: 3px;
    }
    
    /* ================================================= */
    /* --- 2. MOBILE LAYOUT STYLES (Default Hidden) --- */
    /* ================================================= */
    .mobile-layout {
        display: none; 
        flex-direction: row; 
        align-items: center; 
        padding: 0.75rem;
    }
    
    .mobile-layout .team-side-horizontal {
        flex-direction: column; 
        align-items: center;
        text-align: center;
        min-width: 0;
        flex-basis: 40%;
    }
    
    .mobile-layout .team-home-strip .team-name-horizontal { order: 1; margin: 0 0 5px 0; }
    .mobile-layout .team-home-strip .team-logo-horizontal { order: 2; margin: 5px 0 0 0; }

    .mobile-layout .team-away-strip .team-logo-horizontal { order: 2; margin: 5px 0 0 0; } 
    .mobile-layout .team-away-strip .team-name-horizontal { order: 1; margin: 0 0 5px 0; } 

    .mobile-layout .teams-vs-score-column {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 10px;
    }

    .mobile-layout .score-separator {
        flex-shrink: 0;
        text-align: center;
        width: 70px;
    }

    .mobile-layout .score-strip {
        font-size: 1rem;
        font-weight: 900;color: var(--primary-color, #007bff); 
    }

    .mobile-layout .time-status-column {
        flex-shrink: 0;
        width: 70px;
        text-align: center;
        border-left: 1px solid var(--border-color);
        padding-left: 10px;
    }

    .mobile-layout .time-strip {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--text-color);
        margin-bottom: 3px;
    }
    
    .mobile-layout .status-strip {
        font-size: 0.75rem;
        font-weight: 500;
        color: var(--text-secondary);
        line-height: 1;
    }


    /* --- MEDIA QUERIES --- */
    @media (max-width: 768px) {
        .desktop-layout { display: none; }
        .mobile-layout { display: flex; }
        
        .mobile-layout .team-logo-horizontal { width: 40px; height: 40px; }
        .mobile-layout .team-name-horizontal { font-size: 0.9rem; margin: 0; }
        
        .filter-bar {
            flex-direction: row; 
            flex-wrap: wrap; 
            gap: 5px;
            justify-content: center; 
        }
        .filter-btn{
            width: 120px; 
            padding: 0.2rem 0.5rem;
            font-size: 0.75rem;
        }
    }
    
    /* --- Toggler Icon Fix: التحكم في الأيقونات باستخدام CSS --- */
    /* إلغاء الإطار حول زر التبديل (Toggler) */
/* 1. التنسيق الأساسي لزر القائمة (Navbar Toggler) */
.navbar-toggler {
    /* الحفاظ على الإزالة القوية للحدود الافتراضية */
    border: none !important;
    outline: none !important;
    
    /* زيادة المسافة الداخلية قليلاً لإظهار الظل النيومورفي بشكل أفضل */
    padding: 0.5rem; 
    border-radius: 8px; 
    transition: all 0.2s ease;

    /* 💡 تطبيق الظل النيومورفي الخارجي (زر بارز) */
    box-shadow: 4px 4px 8px var(--shadow-dark), 
                -4px -4px 8px var(--shadow-light) !important;
}

/* 2. تنسيق حالة الضغط والتركيز (Focus/Active) */
.navbar-toggler:focus,
.navbar-toggler:active {
    /* 💡 تطبيق الظل النيومورفي الداخلي (تأثير الضغط) */
    box-shadow: inset 2px 2px 5px var(--shadow-dark), 
                inset -2px -2px 5px var(--shadow-light) !important;
}

/* 3. تنسيق الأيقونة لضمان اللون والحجم */
.navbar-toggler i {
    color: var(--text-color); 
    font-size: 1.5rem; 
}
 
/* 4. إخفاء وإظهار الأيقونات بناءً على حالة القائمة */
.navbar-toggler .icon-open,
.navbar-toggler .icon-close {
    display: none;
}

/* 4.1. عندما تكون القائمة مغلقة (collapsed) - أظهر أيقونة القائمة */
.navbar-toggler.collapsed .icon-open {
    display: inline-block;
}

/* 4.2. عندما تكون القائمة مفتوحة (not collapsed) - أظهر أيقونة الإغلاق */
.navbar-toggler:not(.collapsed) .icon-close {
    display: inline-block;
}
/* --- نهاية التعديل --- */


  
  
  
  
  
  
  /* 🎨 يجب إضافة هذا الكود إلى ملف الـ CSS الخاص بك أو في وسم <style> */
/* تلوين حالة "مباشر" باللون الأحمر مع تأثير النبض الخفيف */
.live-status-red {
    color: #fff !important; /* لون أحمر صريح */
    animation: pulse-red 0.5s infinite alternate; /* تأثير النبض الخفيف */
    font-weight: bold;
}

@keyframes pulse-red {
    from {
        opacity: 1;
    }
    to {
        opacity: 0.8;
    }
}
  
  


/* 2. تنسيق الفقرة (p) التي تحمل الرسالة */
#matchTable > .col-12 p {
    /* جعل الخلفية شفافة للمحتوى الرئيسي */
    background: none; 
    margin-top:-150px;
    /* Neumorphism: ظل داخلي بسيط لتمييز المنطقة */
    box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.1), 
                inset -5px -5px 10px rgba(255, 255, 255, 0.05);
    
    /* تنسيقات النص التي تم تحديدها في JS */
    color: var(--text-color, #000); /* استخدام متغير النص الافتراضي */
    font-size: 1.25rem; /* fs-5 */
    padding: 1rem !important; /* p-5 */
    border-radius: 12px;
    margin: 0rem auto; /* للتأكد من توسيط الفقرة إذا كان الـ col-12 أوسع */
    max-width: 800px; /* تحديد عرض أقصى لتبدو أفضل على الشاشات الكبيرة */
    font-weight: 500;
}

/* 3. تنسيق خاص لحالة التحميل (Spinner) لضمان التناسق */
#matchTable .spinner-border {
     color: var(--text-color, #c0c0c0);
}

/* 4. تعريف متغيرات الألوان (إذا لم تكن معرفة بالفعل في ملف CSS الرئيسي) */
/*
:root {
    --bg-color: #2c2f33; 
    --text-color: #f6f6f6;
    --primary-color: #007bff; 
}
*/
  
  
  
  
  
  
  

  
 
  
  
  
  
  
  
  

  
  
  /* --- تنسيقات النيومورفيزم للتذييل (Footer) --- */
.neumorphic-footer {
    background-color: var(--main-bg) !important;
    border-top: 1px solid var(--border-color); /* فصل خفيف */
    /* ظل خفيف للنيومورفيزم (يمكن إعطاؤه ظل داخلي لتبدو كأنها منخفضة قليلاً) */
    box-shadow: 
        inset 5px 5px 10px rgba(0, 0, 0, 0.1), 
        inset -5px -5px 10px var(--neumo-shadow-light); 
}

/* تنسيق الروابط العادية داخل التذييل */
.footer-link {
    color: var(--text-color);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.2s;
}
.footer-link:hover {
    color: var(--accent-blue); /* استخدام اللون المميز عند التمرير */
}

/* تنسيق أيقونات التواصل الاجتماعي (لتكون نيو-مورفية) */
.social-icon-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    margin: 0 5px;
    font-size: 1.25rem;
    color: var(--text-color);
    text-decoration: none;
    border-radius: 50%;
    transition: all 0.3s ease;
    
    /* الظل الافتراضي للأيقونة (بارزة) */
    box-shadow: 
        3px 3px 6px var(--neumo-shadow-dark), 
        -3px -3px 6px var(--neumo-shadow-light);
    background-color: var(--card-bg);
}

/* تأثير الضغط (inset) عند التمرير على الأيقونات */
.social-icon-btn:hover {
    color: var(--accent-blue);
    box-shadow: 
        inset 3px 3px 6px var(--neumo-shadow-dark), 
        inset -3px -3px 6px var(--neumo-shadow-light);
}
  
  
  
  
  
  
  /* --- Scroll To Top Button (زر الرجوع للأعلى) --- */
#scrollToTopBtn {
    /* التموضع والتثبيت */
    position: fixed;
    bottom: 25px; /* مسافة من الأسفل */
    right: 25px; /* مسافة من اليمين */
    z-index: 1000; /* ليبقى فوق جميع العناصر */
    
    /* الشكل والحجم */
    padding: 1rem 1.2rem;
    border-radius: 50%; /* شكل دائري */
    line-height: 1; 
    
    /* الإخفاء والتأثيرات الانتقالية */
    opacity: 0; /* مخفي افتراضياً */
    visibility: hidden; /* مخفي أيضاً لمنع التفاعل قبل الظهور */
    transform: scale(0.9); /* تصغير بسيط عند الاختفاء */
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out, transform 0.3s ease-in-out;
}

/* حالة الظهور (يتم إضافتها/إزالتها بواسطة جافاسكريبت) */
#scrollToTopBtn.show {
    opacity: 1;
    visibility: visible;
    transform: scale(1); /* الحجم الطبيعي عند الظهور */
}

/* تأثير التفاعل (Hover) */
#scrollToTopBtn:hover {
    /* تغيير الظل قليلاً عند التفاعل ليعطي إحساس الضغط */
    box-shadow: 
        4px 4px 8px var(--neumo-shadow-dark), 
        -4px -4px 8px var(--neumo-shadow-light); 
    background-color: var(--card-hover);
}
  
  
</style>
    </head>

    <body>
        
      <nav class="navbar navbar-expand-lg navbar-light neumorphic-navbar">
    <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand fw-bold fs-4" href="#" style="color: var(--text-color);">ديلي ماتش</a>
        
        <button class="navbar-toggler collapsed" type="button" id="customNavbarToggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-3 icon-open"></i>
            <i class="bi bi-x fs-3 icon-close"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link active neumorphic-nav-link" aria-current="page" href="#"><i class="bi bi-house me-1"></i> الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-calendar-event me-1"></i> جدول المباريات</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
        
        
        <div class="container py-5">
            <h1 class="text-center fw-bold mb-3" style="color: var(--accent-blue);"> مباريات اليوم
            </h1>
            
            <div class="filter-bar-wrapper">
                <div class="filter-bar">
                    <button id="yesterdayFilterBtn" class="filter-btn">
                       الأمس
                    </button>
                    <button id="todayFilterBtn" class="filter-btn active">
                      مباريات  اليوم 
                    </button>
                    <button id="liveFilterBtn" class="filter-btn">
                        <i class="bi bi-broadcast-pin me-1" style="background:transparent; animation: livePulseActive 1.5s infinite;"></i> مباشر
                    </button>
                </div>
            </div>

            <div class="row g-2" id="matchTable">
                <div class="col-12 text-center text-white-50 p-5">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading Matches...</span>
                    </div>
                    <p class="mt-3">يتم جلب المباريات...</p>
                </div>
            </div>

        </div>
        
        
        
  
  
  
  
      
      
    <section class="bg-dark py-4 border-top border-secondary">
    <div class="container-fluid px-2 px-sm-3 px-lg-4">
        <div class="row g-2 g-sm-3">
                                    <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/yalla-shoot/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                Yalla Shoot - بث مباشر لأقوى المباريات والدوريات العالمية                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/yalla-shoot-tv/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                Yalla Shoot TV - بث مباشر لمباريات اليوم                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/yalla-shoot-ar/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                يلا شوت - مباريات اليوم مباشر                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/yallashoot-ar/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                يلا شوت مباشر - مباريات اليوم                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/yallashoot/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                Yallashoot - مشاهدة مباريات كرة القدم مباشرة                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/liverpool/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                مباشرة مباراة ليفربول اليوم                            </a>
                        </div>
                                                <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/ahly/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                مشاهدة مباراة الرجاء اليوم بث مباشر                            </a>
                        </div>
              <div class="col-6 col-md-4 col-lg-3">
                            <a href="https://yalahshot.com/liverpool/" 
                               class="btn btn-outline-light btn-sm w-100 text-truncate">
                                مباشرة مباراة برشلونة اليوم                            </a>
            </div>
          
          
          
      </div>
    </div>
</section>  
      

      <style>
        /* ------------------------------------------- */
/* --- section 0. متغيرات الألوان والظلال (Light Neumorphism) --- */
/* ------------------------------------------- */

/* ------------------------------------------- */
/* --- 1. تجاوز خلفية القسم (bg-dark) --- */
/* ------------------------------------------- */
.bg-dark {
    /* تجبر الخلفية على استخدام لون النيومورفيزم الفاتح */
    background-color: var(--main-bg) !important;
    
    /* تطبيق ظل داخلي خفيف على القسم الرئيسي */
    box-shadow: inset 5px 5px 10px var(--neumo-shadow-dark), 
                inset -5px -5px 10px var(--neumo-shadow-light);
   margin-bottom:-30px;
}

/* ------------------------------------------- */
/* --- 2. تنسيق الأزرار (btn-outline-light) كنيومورفيزم بارز --- */
/* ------------------------------------------- */

/* استهداف الأزرار في الهيكل المحدد لزيادة قوة التطبيق */
.row > .col-6 > .btn-outline-light {
    /* إعدادات الأساس */
    border: 1px solid var(--border-color) !important;
    color: var(--text-color) !important;
    background-color: var(--main-bg) !important;
    border-radius: 12px !important;
    font-weight: 500;
    transition: all 0.3s ease;

    /* 🌟 الظل الخارجي النيومورفي (للإبراز) 🌟 */
    box-shadow: 6px 6px 12px var(--neumo-shadow-dark), 
                -6px -6px 12px var(--neumo-shadow-light) !important;
}

/* ------------------------------------------- */
/* --- 3. تنسيق حالة التفاعل (Hover/Active) كنيومورفيزم مضغوط --- */
/* ------------------------------------------- */
.row > .col-6 > .btn-outline-light:hover,
.row > .col-6 > .btn-outline-light:focus,
.row > .col-6 > .btn-outline-light:active {
    /* إزالة الظل الخارجي */
    box-shadow: none !important;
    
    /* 🌟 تطبيق الظل الداخلي (Inset) لتقليد تأثير الضغط 🌟 */
    box-shadow: inset 3px 3px 6px var(--neumo-shadow-dark), 
                inset -3px -3px 6px var(--neumo-shadow-light) !important;
                
    /* تغيير اللون للتمييز */
    color: var(--accent-blue) !important; 
    border-color: var(--accent-blue) !important;
}

/* ------------------------------------------- */
/* --- 4. تعديل حدود Bootstrap (border-secondary) --- */
/* ------------------------------------------- */
.border-secondary {
    /* تجاوز اللون ليتناسب مع الخلفية الفاتحة */
    border-color: var(--border-color) !important; 
}

/* ------------------------------------------- */
/* --- 5. اختصار النص (Ellipsis) --- */
/* ------------------------------------------- */
.text-truncate {
    /* التأكد من عمل اقتطاع النص بشكل صحيح */
    overflow: hidden !important;
    white-space: nowrap !important;
    text-overflow: ellipsis !important;
}
      </style>
 
      
      
  
  <footer class="neumorphic-footer mt-5 py-4">
    <div class="container text-center">
        <p class="mb-2" style="color: var(--text-secondary); font-size: 0.9rem;">
            &copy;  ديلي ماتش جميع الحقوق محفوظة.
        </p>

        <div class="quick-links mb-3">
            <a href="Privacy.html" class="footer-link">سياسة الخصوصية</a>
            <span class="mx-2" style="color: var(--text-secondary);">|</span>
            <a href="#" class="footer-link">شروط الاستخدام</a>
            <span class="mx-2" style="color: var(--text-secondary);">|</span>
          <a href="mailto:dailymatchapk@gmail.com" class="footer-link">اتصل بنا</a>
        </div>
        
        <div class="social-icons">
            <a href="#" class="social-icon-btn"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon-btn"><i class="bi bi-twitter"></i></a>
            <a href="#" class="social-icon-btn"><i class="bi bi-instagram"></i></a>
        </div>
    </div>
</footer>
  
  
<button id="scrollToTopBtn" class="filter-btn" title="الرجوع للأعلى">
    <i class="bi bi-arrow-up"></i>
</button>
<script>
// ... (الكود الموجود لديك)

// 🌟 متغير جديد لتخزين موضع التمرير السابق 🌟
var lastScrollTop = 0; 

document.addEventListener('DOMContentLoaded', () => {
    // ... (وظيفة التحميل الأولي للمباريات ومنطق القائمة)

    // --- Scroll To Top Logic (منطق زر الرجوع للأعلى المُصحح والمُحسن) ---
    const scrollButton = document.getElementById('scrollToTopBtn');
    // القيمة التي يظهر عندها الزر (عند التمرير للأسفل)
    const showThreshold = 1400;  

    if (scrollButton) { 
        
        window.addEventListener('scroll', () => {
            var currentScroll = window.scrollY || document.documentElement.scrollTop;

            // 1. منطق الإظهار/الإخفاء بناءً على الاتجاه والموضع
            
            if (currentScroll > lastScrollTop && currentScroll > showThreshold) {
                // التمرير للأسفل (Downscroll) وتم تجاوز عتبة الظهور (300 بكسل)
                // ➡️ يظهر الزر
                scrollButton.classList.add('show'); 
            } 
            else if (currentScroll < lastScrollTop) {
                // التمرير للأعلى (Upscroll) 
                // ➡️ يختفي الزر فوراً بمجرد بدء التمرير للأعلى
                scrollButton.classList.remove('show'); 
            }
            
            // 2. تحديث موضع التمرير السابق للمقارنة في التكرار التالي
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // منع القيم السالبة
        });

        // 3. عمل الزر عند النقر (كما هو)
        scrollButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' 
            });
        });
    }
    // --- نهاية Scroll To Top Logic المُحسن ---
    
    // ... (بقية كود DOMContentLoaded)
});
 </script>
      
      
      
      
      
      
      
      
      
      
      
     
<script>
// --- Global State & Constants (الحالة العامة والثوابت) ---
var API_TEAM_URL = 'https://ws.kora-api.top/uploads/team/';
const MAIN_URL = window.location.origin + '/';
const STREAMING_URL = 'https://yalahshot-com.smartagro.zip/';
const TEXT_COLOR = '#333333';
const LIVE_RED = '#dc3545';

var allMatchesData = []; // لتخزين جميع بيانات المباريات المجلوبة
var currentDay = 'today'; // اليوم الحالي المعروض ('yesterday' أو 'today')
var isLiveFilterActive = false; // هل فلتر المباشر مفعل

var updateIntervalId = null; // معرف المؤقت للتحديث التلقائي
const UPDATE_INTERVAL_MS = 30000; // 30 ثانية لسرعة التحديث

var matchTable = document.querySelector("#matchTable");
var todayBtn = document.querySelector("#todayFilterBtn");
var yesterdayBtn = document.querySelector("#yesterdayFilterBtn");
var liveBtn = document.querySelector("#liveFilterBtn");
// تم إزالة: tomorrowBtn


// --- Utility Functions (الدوال المساعدة) ---

/**
 * تحدد تاريخ اليوم أو الأمس بناءً على التوقيت المحلي للمغرب (GMT+1).
 */
function getDateString(type) {
    const nowInMorocco = new Date(new Date().toLocaleString("en-US", { timeZone: "Africa/Casablanca" }));
    const date = new Date(nowInMorocco);

    if (type === 'yesterday') {
        date.setDate(date.getDate() - 1);
    }

    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');

    return `${year}-${month}-${day}`;
}

/**
 * تحويل توقيت الـ API (المفترض أنه GMT) إلى توقيت المغرب (GMT+1) للعرض.
 */
function convertTimeToMorocco(apiTime, apiDate) {
    if (!apiTime || apiTime.trim() === '00:00' || apiTime.trim() === 'Start Soon') {
        return apiTime || 'N/A';
    }

    const fullDateTimeString = `${apiDate}T${apiTime}:00Z`;
    const apiDateObject = new Date(fullDateTimeString);

    if (isNaN(apiDateObject.getTime())) {
        return apiTime;
    }

    const moroccoTime = apiDateObject.toLocaleTimeString('ar-MA', {
        hour: '2-digit',
        minute: '2-digit',
        hour12: false,
        timeZone: 'Africa/Casablanca'
    });

    return moroccoTime;
}

/**
 * تتحقق مما إذا كانت المباراة حية رسمياً بناءً على حالة الـ API فقط (status 1 أو 4).
 */
function isMatchTrulyLive(data) {
    if (data.status === 1 || data.status === 4) return true;
    return false;
}

/**
 * يحدد نص الحالة الصحيح للمباراة للعرض بناءً على data.status.
 */
function getMatchStatusText(data) {

    switch (data.status) {
        case 2:
            return 'انتهت';
        case 1:
            const parts = data.score.split('-').map(s => s.trim());
            // تحقق بسيط لتجنب عرض "استراحة" إذا كان الوقت جاري
            const totalScore = parseInt(parts[0]) + parseInt(parts[1]);

            if (data.score.trim() === '-' || totalScore === 0) {
                 return 'استراحة';
            }
            return 'مباشر';
        case 4:
            return 'وقت إضافي';
        case 0:
        case 3:
        default:
            return 'لم تبدأ';
    }
}

/**
 * يحدد ما إذا كان يجب عرض النتيجة أو التوقيت.
 */
function getMatchScoreOrTime(data) {
    const trulyLive = isMatchTrulyLive(data);
    const isEnded = (data.status === 2);
    const isInProgressStatus = (data.status === 1 || data.status === 4);

    if (isEnded || trulyLive || isInProgressStatus) {
        return data.score.trim() != '-' ? data.score : '0 - 0';
    }
    else {
        return convertTimeToMorocco(data.time, data.date);
    }
}

// 🌟 الدالة الجديدة لاستخراج الكلمة الأولى للفريق على الهواتف 🌟
/**
 * يستخرج الكلمة الأولى من اسم الفريق.
 * @param {string} teamName الاسم الكامل للفريق.
 * @returns {string} الكلمة الأولى من الاسم.
 */
function getFirstWord(teamName) {
    if (!teamName) return '';
    // يقسم السلسلة عند أول مسافة ويأخذ الجزء الأول
    return teamName.trim().split(/\s+/)[0];
}
// 🌟 نهاية الدالة الجديدة 🌟


// --- Match Tile Builder (توليد بطاقة المباراة) ---
function addMatchTile(data) {

    var link = MAIN_URL;
    var title = data.home + " ضد " + data.away;

    if (data.has_channels == 1 && data.active == 1) {
        link = STREAMING_URL +'?m='+data.id+'&lang=ar';
    }

    var scoreDisplay = getMatchScoreOrTime(data);
    var statusText = getMatchStatusText(data);

    const isTrulyLiveNow = isMatchTrulyLive(data);

    const moroccoTimeDisplay = convertTimeToMorocco(data.time, data.date);


    // 1. Create Wrapper
    var colWrapper = document.createElement('div');
    colWrapper.classList.add("col-12");
    var matchCard = document.createElement('div');
    matchCard.classList.add("match-strip-card");

    // 2. League Header & Link
    var cardLeague = document.createElement('div');
    cardLeague.classList.add("card-league-header");
    cardLeague.innerHTML = `<i class="bi bi-trophy-fill me-2"></i> ${data.league}`;

    var matchLink = document.createElement('a');
    matchLink.classList.add('match-link-overlay');
    matchLink.setAttribute('href', link);
    matchLink.setAttribute('title', title);
    if (data.has_channels == 1 && data.active == 1) {
        matchLink.setAttribute('rel', "noopener noreferrer");
        matchLink.setAttribute('target', "_blank");
    }

    // --- A. DESKTOP LAYOUT STRUCTURE (Horizontal Wide) ---
    // هذا الجزء لم يتم تعديله، ويعرض الاسم الكامل (data.home / data.away)
    var desktopLayout = document.createElement('div');
    desktopLayout.classList.add("desktop-layout");

    var deskTeamsVsScoreColumn = document.createElement('div');
    deskTeamsVsScoreColumn.classList.add("teams-vs-score-column");

    var deskHomeTeam = document.createElement('div');
    deskHomeTeam.classList.add("team-side-horizontal", "team-home-strip");
    deskHomeTeam.innerHTML = `
        <div class="team-name-horizontal">${data.home}</div>
        <img src="${API_TEAM_URL + data.home_logo}" class="team-logo-horizontal" alt="${data.home_en}">
    `;

    // Center Score/Time
    var deskScoreSeparator = document.createElement('div');
    deskScoreSeparator.classList.add("score-separator");
    var deskTimeStatus = document.createElement('div');
    deskTimeStatus.classList.add('time-status-center');

    const deskStatusClass = isTrulyLiveNow ? 'live-indicator-strip live-status-red' : '';
    deskTimeStatus.innerHTML = isTrulyLiveNow ? `<span class="${deskStatusClass}">${statusText}</span>` : statusText;

    var deskScoreElement = document.createElement('div');
    deskScoreElement.classList.add('score-strip');
    deskScoreElement.innerHTML = scoreDisplay;
    deskScoreSeparator.appendChild(deskTimeStatus);
    deskScoreSeparator.appendChild(deskScoreElement);

    var deskAwayTeam = document.createElement('div');
    deskAwayTeam.classList.add("team-side-horizontal", "team-away-strip");
    deskAwayTeam.innerHTML = `
        <img src="${API_TEAM_URL + data.away_logo}" class="team-logo-horizontal" alt="${data.away_en}">
        <div class="team-name-horizontal">${data.away}</div>
    `;

    deskTeamsVsScoreColumn.appendChild(deskHomeTeam);
    deskTeamsVsScoreColumn.appendChild(deskScoreSeparator);
    deskTeamsVsScoreColumn.appendChild(deskAwayTeam);

    desktopLayout.appendChild(deskTeamsVsScoreColumn);


    // --- B. MOBILE LAYOUT STRUCTURE (Standard Strip) ---
    // هذا الجزء تم تعديله ليستخدم الكلمة الأولى (getFirstWord)
    var mobileLayout = document.createElement('div');
    mobileLayout.classList.add("mobile-layout");

    // Time/Status Column (Right Side)
    var mobTimeStatusColumn = document.createElement('div');
    mobTimeStatusColumn.classList.add("time-status-column");
    var mobTimeElement = document.createElement('div');
    mobTimeElement.classList.add('time-strip');

    mobTimeElement.innerHTML = moroccoTimeDisplay;

    var mobStatusElement = document.createElement('div');
    mobStatusElement.classList.add('status-strip');

    const mobStatusClass = isTrulyLiveNow ? 'live-indicator-strip live-status-red' : '';
    mobStatusElement.innerHTML = isTrulyLiveNow ? `<span class="${mobStatusClass}">${statusText}</span>` : statusText;

    mobTimeStatusColumn.appendChild(mobTimeElement);
    mobTimeStatusColumn.appendChild(mobStatusElement);

    // Teams vs Score Column (Left Side)
    var mobTeamsVsScoreColumn = document.createElement('div');
    mobTeamsVsScoreColumn.classList.add("teams-vs-score-column");

    // Home Team
    var mobHomeTeam = document.createElement('div');
    mobHomeTeam.classList.add("team-side-horizontal", "team-home-strip");
    // 💡 الآن نستخدم الكلمة الأولى فقط هنا:
    const homeNameDisplay = getFirstWord(data.home); 
    mobHomeTeam.innerHTML = `
        <img src="${API_TEAM_URL + data.home_logo}" class="team-logo-horizontal" alt="${data.home_en}">
        <div class="team-name-horizontal">${homeNameDisplay}</div>
    `;

    // Score Separator
    var mobScoreSeparator = document.createElement('div');
    mobScoreSeparator.classList.add("score-separator");
    var mobScoreElement = document.createElement('div');
    mobScoreElement.classList.add('score-strip');
    mobScoreElement.innerHTML = scoreDisplay;
    mobScoreSeparator.appendChild(mobScoreElement);

    // Away Team
    var mobAwayTeam = document.createElement('div');
    mobAwayTeam.classList.add("team-side-horizontal", "team-away-strip");
    // 💡 الآن نستخدم الكلمة الأولى فقط هنا:
    const awayNameDisplay = getFirstWord(data.away);
    mobAwayTeam.innerHTML = `
        <img src="${API_TEAM_URL + data.away_logo}" class="team-logo-horizontal" alt="${data.away_en}">
        <div class="team-name-horizontal">${awayNameDisplay}</div>
    `;

    mobTeamsVsScoreColumn.appendChild(mobHomeTeam);
    mobTeamsVsScoreColumn.appendChild(mobScoreSeparator);
    mobTeamsVsScoreColumn.appendChild(mobAwayTeam);

    // Assemble Mobile Layout
    mobileLayout.appendChild(mobTimeStatusColumn); // Time/Status on Right
    mobileLayout.appendChild(mobTeamsVsScoreColumn); // Teams on Left


    // 3. Assemble Card
    matchCard.appendChild(cardLeague);
    matchCard.appendChild(desktopLayout);
    matchCard.appendChild(mobileLayout);
    matchCard.appendChild(matchLink);

    colWrapper.appendChild(matchCard);
    matchTable.appendChild(colWrapper);
}


// --- Core Functions (الدوال الأساسية) ---

function renderMatches(matches) {
    matchTable.innerHTML = "";

    if (!matches || matches.length === 0) {
        const messageText = isLiveFilterActive
            ? 'لا توجد مباريات مباشرة حاليًا.'
            : (currentDay === 'yesterday' ? 'لا توجد نتائج مباريات لهذا اليوم.' : 'لا توجد مباريات متاحة لليوم.');

        // تحديد اللون مباشرة بناءً على نوع الرسالة
        const messageColor = isLiveFilterActive
            ? LIVE_RED // لون أحمر للنص المباشر
            : TEXT_COLOR; // لون داكن للنص العام

        // استخدام التنسيق الداخلي (style="...") لتطبيق اللون وحجم الخط
        matchTable.innerHTML = `
            <div class="col-12">
                <p class="text-center p-5 fs-5"
                    style="color: ${messageColor}; font-weight: 600;">
                    ${messageText}
                </p>
            </div>
        `;
        return;
    }

    matches.forEach(addMatchTile);
}

function filterAndRender() {
    let filteredMatches = allMatchesData;

    if (isLiveFilterActive) {
        // إذا كان فلتر المباشر مفعلاً، يتم عرض المباريات الحية من بيانات اليوم التي تم جلبها
        filteredMatches = allMatchesData.filter(match => isMatchTrulyLive(match));
    } else {
        if (currentDay === 'yesterday') {
            // فلترة مباريات الأمس المنتهية فقط
            filteredMatches = allMatchesData.filter(match => match.status === 2);
        }
        // لـ 'today'، يتم عرض كل مباريات allMatchesData المجلوبة
    }

    renderMatches(filteredMatches);
}

/**
 * تبدأ أو توقف حلقة تحديث جلب البيانات كل 30 ثانية.
 */
function toggleAutoUpdate(shouldStart) {
    if (updateIntervalId) {
        clearInterval(updateIntervalId);
        updateIntervalId = null;
    }

    // يتم التحديث التلقائي فقط إذا كنا في عرض "اليوم" أو في عرض "مباشر"
    if (shouldStart && (currentDay === 'today' || isLiveFilterActive)) {
        updateIntervalId = setInterval(() => {
            console.log('Auto-updating matches...');
            // نستخدم 'today' كـ day في التحديث التلقائي حتى لو كنا في فلتر المباشر
            fetchMatches('today', true);
        }, UPDATE_INTERVAL_MS);
    }
}


function fetchMatches(day, isUpdate = false) {
    // هذه الدالة الآن تعيد Promise (مطلوب للإصلاح)
    
    if (!isUpdate) {
        toggleAutoUpdate(false);

        currentDay = day;

        // عند تغيير اليوم، يتم إلغاء تفعيل فلتر المباشر
        isLiveFilterActive = false;
        if(liveBtn) liveBtn.classList.remove('active');

        // إزالة فئة 'active' من كل الأزرار
        if (todayBtn) todayBtn.classList.remove('active');
        if (yesterdayBtn) yesterdayBtn.classList.remove('active');

        // تفعيل الزر الحالي
        if (day === 'today' && todayBtn) {
            todayBtn.classList.add('active');
        } else if (day === 'yesterday' && yesterdayBtn) {
            yesterdayBtn.classList.add('active');
        }


        matchTable.innerHTML = `<div class="col-12 text-center text-white-50 p-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading Matches...</span>
            </div>
            <p class="mt-3">يتم تحميل مباريات ${day === 'today' ? 'اليوم' : 'الأمس'}...</p>
        </div>`;
    }

    // إذا كان التحديث صامتًا ونحن لا نعرض مباريات اليوم أو المباشر، لا تفعل شيئاً
    if (isUpdate && day !== 'today' && !isLiveFilterActive) {
        toggleAutoUpdate(false);
        return Promise.resolve();
    }


    const selectedDate = getDateString(day);

    const API_URL_MATCHES = `https://ws.kora-api.top/api/matches/${selectedDate}/1?t=${new Date().getMinutes()}`;

    return fetch(API_URL_MATCHES) // إرجاع الـ Promise
        .then(res => {
            if (!res.ok) {
                // إذا فشل الاتصال بالشبكة
                throw new Error('فشل الاتصال بالشبكة');
            }
            return res.json();
        })
        .then(data => {
            if (data && data.matches) {

                // 🛑 الكلمات الممنوع ظهورها
                const excludedKeywords = [
                    'جائزة قطر الكبرى', 'فورمولا 1', 'Formula 1', 'إسرائيلي', 'اسرائيلي', 'Israel', 'Israeli', 'الدوري الألماني الدرجة الثانية', 'دوري استراليا الممتاز','nba','الدوري الإسكتلندي للمحترفين' 
                ];

              // قم بإنشاء قائمة بالكلمات الممنوعة بأحرف صغيرة لتجنب التحويل المتكرر
const lowerCaseExcluded = excludedKeywords.map(k => k.toLowerCase());
              
                // 🌟🌟🌟 فلترة المباريات غير المرغوب فيها 🌟🌟🌟
                const filteredAPI_Matches = data.matches.filter(match => {

                    const combinedText = [
                        match.league,
                        match.home,
                        match.away,
                        match.league_en,
                        match.home_en,
                        match.away_en
                    ].filter(Boolean)
                      .join(' ')
                      .toLowerCase();

                    const isExcluded = excludedKeywords.some(keyword =>
                        combinedText.includes(keyword) 
                    );

                    return !isExcluded;
                });
                // 🌟🌟🌟 نهاية فلترة المباريات 🌟🌟🌟

                allMatchesData = filteredAPI_Matches.map(match => ({
                    ...match,
                    date: selectedDate
                }));

                // تفعيل التحديث التلقائي إذا كنا على 'today' أو 'live'
                toggleAutoUpdate(true);

            } else {
                allMatchesData = [];
                toggleAutoUpdate(false);
            }

            // عرض المباريات ما لم يكن تحديثًا صامتًا لفلتر المباشر (لأن filterAndRender سيتم استدعاؤها في liveBtn)
          if (!isUpdate || !isLiveFilterActive) {
    filterAndRender();
}
 
            return data; // نمرر البيانات لأي استخدام مستقبلي
        })
        .catch(err => {
            console.error("Failed to fetch matches:", err);
            if (!isUpdate) { // عرض رسالة الخطأ فقط عند الجلب الأساسي (وليس التحديث الصامت)
                    matchTable.innerHTML = `<div class="col-12"><p class="text-center text-danger p-5 fs-5" style="color: ${LIVE_RED}; font-weight: 600;"><i class="bi bi-x-octagon-fill me-2"></i> حدث خطأ أثناء تحميل المباريات.</p></div>`;
            }
            toggleAutoUpdate(false);
            allMatchesData = [];
            // نرفع الخطأ مرة أخرى لكي يلتقطه الـ .catch أو .finally في liveBtn
            throw err;
        });
}


// --- Event Listeners and Initial Load (المستمعون للأحداث والتحميل الأولي) ---

if (todayBtn) todayBtn.addEventListener('click', () => fetchMatches('today'));
if (yesterdayBtn) yesterdayBtn.addEventListener('click', () => {
    fetchMatches('yesterday');
    toggleAutoUpdate(false);
});


if (liveBtn) liveBtn.addEventListener('click', () => {
    // 1. تبديل حالة الفلتر
    isLiveFilterActive = !isLiveFilterActive;
    liveBtn.classList.toggle('active', isLiveFilterActive);

    if (isLiveFilterActive) {
        // إذا تم تفعيل فلتر المباشر:
        // أ. إلغاء تفعيل أزرار اليوم والأمس
        if (todayBtn) todayBtn.classList.remove('active');
        if (yesterdayBtn) yesterdayBtn.classList.remove('active');

        currentDay = 'today'; // يجب أن نجلب بيانات اليوم لنجد المباريات المباشرة

        // ب. جلب بيانات اليوم وتطبيق فلتر المباشر عليها
        // نستخدم isUpdate=true لإخبار fetchMatches بعدم تحديث حالة الأزرار مرة أخرى
        fetchMatches('today', true).finally(() => {
            // ج. بعد الجلب، نقوم بالفلترة والعرض (سيتم عرض المباريات الحية فقط من البيانات الجديدة)
            filterAndRender();
            // د. تفعيل التحديث التلقائي
            toggleAutoUpdate(true);
        });

    } else {
        // إذا تم إلغاء تفعيل فلتر المباشر:
        currentDay = 'today';
        if (todayBtn) todayBtn.classList.add('active');
        if (yesterdayBtn) yesterdayBtn.classList.remove('active');

        // إعادة جلب بيانات اليوم وعرضها بالكامل
        fetchMatches('today');
    }
});


// --- وظيفة التحكم اليدوي بفتح وإغلاق القائمة (Navigation) ---

document.addEventListener('DOMContentLoaded', () => {
    // التحميل الأولي للمباريات
    fetchMatches('today');

    // جلب عناصر القائمة
    const togglerButton = document.getElementById('customNavbarToggler');
    const navbarCollapseDiv = document.getElementById('navbarNav');
    const navLinks = document.querySelectorAll('#navbarNav .nav-link');

    // 1. دالة التحكم في الفتح والإغلاق عند النقر على الزر
    if (togglerButton && navbarCollapseDiv) {
        togglerButton.addEventListener('click', () => {
            // تبديل فئة 'show' على القائمة (لفتحها/إغلاقها)
            navbarCollapseDiv.classList.toggle('show');

            // تبديل فئة 'collapsed' على الزر (لتبديل الأيقونات)
            togglerButton.classList.toggle('collapsed');

            // تحديث حالة aria-expanded لأغراض الوصول (Accessibility)
            const isExpanded = togglerButton.getAttribute('aria-expanded') === 'true' || false;
            togglerButton.setAttribute('aria-expanded', !isExpanded);
        });
    }

    // 2. دالة الإغلاق التلقائي عند النقر على أي رابط
    if (navbarCollapseDiv) {
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                // إغلاق القائمة (إزالة فئة 'show')
                navbarCollapseDiv.classList.remove('show');

                // إعادة الزر إلى حالة 'collapsed' لإظهار أيقونة القائمة
                if (togglerButton) {
                    togglerButton.classList.add('collapsed');
                    togglerButton.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }
});
</script>
</body>
  
</html>

