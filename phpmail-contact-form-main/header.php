<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
</head>
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
                <img src="th/images/" alt="TechArt Logo">
            </div>
            <div class="right-section">
                
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="#">ໜ້າຫຼັກ</a></li>
                        <li><a href="#">ກ່ຽວກັບພວກເຮົາ</a></li>
                        <li><a href="#">ບໍລິການ</a></li>
                        <li><a href="#">ລາຄາ</a></li>
                        <li><a href="#">ຕິດຕໍ່ພວກເຮົາ</a></li>
                        <button class="language-button" data-lang="la">
                            <img src="th/images/lao.png" alt="ພາສາລາວ" class="flag-icon">
                            <span class="language-text">ລາວ</span>
                        </button>
                        <div class="button">
                            <a href="#" class="request-quote">ຂໍລາຄາ</a>
                            
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
    menuToggle.classList.toggle('active'); // ເພີ່ມ class active ໃຫ້กับ menu-toggle
});

const languageButton = document.querySelector('.language-button');
let currentLang = localStorage.getItem('lang') || 'la'; // ໂຫຼດພາສາຈາກ localStorage ຫຼືຕັ້ງເປັນລາວ

// ຕັ້ງເນື້ອຫາຂອງປຸ່ມຕາມພາສາທີ່ເລືອກ
if (currentLang === 'en') {
    languageButton.innerHTML = '<img src="th/images/english.png" alt="ພາສາອັງກິດ" class="flag-icon"><span class="language-text">English</span>';
    languageButton.dataset.lang = 'en';
} else {
    languageButton.innerHTML = '<img src="th/images/lao.png" alt="ພາສາລາວ" class="flag-icon"><span class="language-text">ລາວ</span>';
    languageButton.dataset.lang = 'la';
}

languageButton.addEventListener('click', function() {
    if (currentLang === 'la') {
        window.location.href = 'lao.html'; // ລິ້ງໄປຫາໜ້າພາສາອັງກິດ
        localStorage.setItem('lang', 'en'); // ເກັບພາສາໃນ localStorage
    } else {
        window.location.href = 'index.html'; // ລິ້ງໄປຫາໜ້າພາສາລາວ
        localStorage.setItem('lang', 'la'); // ເກັບພາສາໃນ localStorage
    }
});
</script>
</body>
</html>
