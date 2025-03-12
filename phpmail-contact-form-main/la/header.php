<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 
</head>
<style>
    body {
    margin: 0;
    padding-top: 80px;
}

.logo {
    font-family: sans-serif;
    font-size: 3em;
    font-weight: bold;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.tech {
    color: #ffffff;
}

.art {
    color: #ff9800;
}

.header {
    background-color: #283593;
    padding: 10px 0;
    position: fixed;
    width: 100%;
    z-index: 100;
    top: 0;
    margin: 0;
}

.containerheader {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left: 40px;
    padding-right: 40px;
}

.logo img {
    height: 80px;
}

.right-section {
    display: flex;
    align-items: center;
}

.nav ul {
    list-style: none;
    display: flex;
    margin-right: 20px;
}

.nav ul li {
    margin-right: 20px;
}

.nav ul li a {
    text-decoration: none;
    color: #ffffff;
    font-weight: 500;
}

.nav ul li a:hover {
    color: #007bff;
}

/* ປ່ຽນ .button .request-quote ເປັນ .site-action-button .site-action-request-quote */
.site-action-button .site-action-request-quote {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
}

/* ປ່ຽນ .button .request-quote:hover ເປັນ .site-action-button .site-action-request-quote:hover */
.site-action-button .site-action-request-quote:hover {
    background-color: #0056b3;
}

.menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
    margin-right: 20px;
}

/* ປ່ຽນ .language-button ເປັນ .site-action-language-button */
.site-action-language-button {
    border: none;
    background: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    font-family: "Noto Sans Lao Looped", sans-serif;
    color: #ffffff;
    font-weight: 500;
    padding: 0;
}

/* ປ່ຽນ .flag-icon ເປັນ .site-action-flag-icon */
.site-action-flag-icon {
    width: 25px;
    height: 18px;
    margin-right: 5px;
    vertical-align: middle;
}

/* ປ່ຽນ .language-text ເປັນ .site-action-language-text */
.site-action-language-text {
    font-size: 16px;
    line-height: 1;
    vertical-align: middle;
    margin-right: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .language-switcher {
        margin-right: 0;
        margin-bottom: 10px;
    }

    /* ປ່ຽນ .language-button ເປັນ .site-action-language-button */
    .site-action-language-button {
        margin-bottom: 20px;
    }

    /* ປ່ຽນ .language-text ເປັນ .site-action-language-text */
    .site-action-language-text {
        font-size: 14px;
    }

    .right-section {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 10px;
        width: 100%;
    }

    .menu-toggle {
        display: block;
        color: #ffffff;
        margin-right: -10px;
    }

    /* ປ່ຽນ .button ເປັນ .site-action-button */
    .site-action-button {
        margin: 0;
        text-align: left;
        width: auto;
    }

    /* ປ່ຽນ .button .request-quote ເປັນ .site-action-button .site-action-request-quote */
    .site-action-button .site-action-request-quote {
        font-size: 14px;
        padding: 8px 16px;
    }

    .nav {
        display: none;
        flex-direction: column;
        width: 100%;
        position: static;
        padding: 20px;
        z-index: 10;
        align-items: flex-end;
    }

    .nav ul {
        flex-direction: column;
        margin-right: 0;
    }

    .nav ul li {
        margin-right: 0;
        margin-bottom: 10px;
        text-align: left;
    }

    .nav ul li a {
        font-size: 14px;
        white-space: nowrap;
    }

    .nav.active {
        display: flex;
    }

    .menu-toggle.active .fa-bars:before {
        content: "\f00d";
        color: #ffffff;
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 30px;
        z-index: 1000;
    }
}
</style>
<body>

    <div class="wrapper">
       
        <a href="#" class="button">
           <div class="icon">
               <i class="fab fa-whatsapp"></i>
           </div>
           <span>Whatsapp</span>
        </a>
   
     </div>
     <header class="header">
        <div class="containerheader">
            <div class="logo">
            <span class="tech">Tech</span><span class="art">Art</span>
                <!-- <img src="../images/" alt="TechArt Logo"> -->
            </div>
            <div class="right-section">
                
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="index.php">ໜ້າຫຼັກ</a></li>
                        <li><a href="about.php">ກ່ຽວກັບພວກເຮົາ</a></li>
                        <li><a href="service.php">ປະເພດບໍລິການ</a></li>
                        <li><a href="process.php">ຂັ້ນຕອນການແປ</a></li>
                        <li><a href="#">ທີມງານບໍລິສັດ</a></li>
                        <li><a href="maps.php">ຕິດຕໍ່ພວກເຮົາ</a></li>
                        <button class="site-action-language-button" data-lang="la">
    <img src="../th/images/lao.png" alt="ພາສາລາວ" class="site-action-flag-icon">
    <span class="site-action-language-text">ລາວ</span>
</button>
                        <div class="site-action-button">
                                            <a href="#" class="site-action-request-quote">ຂໍໃບສະເໜີລາຄາ</a>
                                        </div>
                                                </ul>
                                            </nav>
                                                </div>
                                            </div>
                </header>

              
                <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    menuToggle.addEventListener('click', () => {
        nav.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });

    const languageButton = document.querySelector('.site-action-language-button');
    let currentLang = localStorage.getItem('lang') || 'la';

    // ອັບເດດພາສາໃນປຸ່ມ
    function updateLanguageButton() {
        if (currentLang === 'en') {
            languageButton.innerHTML = '<img src="../th/images/english.png" alt="ພາສາອັງກິດ" class="site-action-flag-icon"><span class="site-action-language-text">English</span>';
            languageButton.dataset.lang = 'en';
        } else {
            languageButton.innerHTML = '<img src="../th/images/lao.png" alt="ພາສາລາວ" class="site-action-flag-icon"><span class="site-action-language-text">ລາວ</span>';
            languageButton.dataset.lang = 'la';
        }
    }

    // ເອີ້ນໃຊ້ຄັ້ງທຳອິດເພື່ອຕັ້ງຄ່າເບື້ອງຕົ້ນ
    updateLanguageButton(); 

    languageButton.addEventListener('click', function() {
        // ປ່ຽນພາສາ ແລະ ອັບເດດ Local Storage
        currentLang = currentLang === 'la' ? 'en' : 'la'; 
        localStorage.setItem('lang', currentLang); 

        // ອັບເດດພາສາໃນປຸ່ມ ແລະ ໄປຫາໜ້າທີ່ກ່ຽວຂ້ອງ
        updateLanguageButton();
        window.location.href = currentLang === 'la' ? 'index.html' : 'lao.html';
    });
</script>

</body>
</html>
