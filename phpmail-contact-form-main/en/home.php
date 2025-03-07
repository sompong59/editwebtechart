<?php $pageTitle = "ຟອມສົ່ງຂໍ້ມູນ"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="social-buttons.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="from.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
    <h2>Get a Free Quote</h2>
    <form action="contact.php" method="POST" enctype="multipart/form-data" id="contactForm">
        <div class="language-group">
            <div class="form-group">
                <label>Select Original Language<span class="required">*</span></label>
                <select type="text" name="originalLanguage">
                    <option value="Lao">Lao</option>
                    <option value="English">English</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="French">French</option>
                    <option value="Thai">Thai</option>
                    <option value="Russian">Russian</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Select Target Language<span class="required">*</span></label>
                <select type="text" name="targetLanguage">
                    <option value="Lao">Lao</option>
                    <option value="English">English</option>
                    <option value="Chinese">Chinese</option>
                    <option value="Vietnamese">Vietnamese</option>
                    <option value="French">French</option>
                    <option value="Thai">Thai</option>
                    <option value="Russian">Russian</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Service Type <span class="required">*</span> </label>
            <select type="text" name="serviceType">
                <option value="Urgent Translation">Urgent Translation</option>
                <option value="Regular Translation">Regular Translation</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label> Attach Your Files (Maximum 5 Files) </label>
            <div class="file-upload">
                <input type="file" name="form_fields[]" multiple="multiple" data-maxsize="10" data-maxsize-message="This file exceeds the maximum allowed size.">
            </div>
        </div>
        <div class="form-group">
            <label>Enter Your Name<span class="required">*</span> </label>
            <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="language-group">
            <div class="form-group">
                <label> Email Address <span class="required">*</span> </label>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <label> Phone Number <span class="required">*</span></label>
                <input size="1" type="tel" name="phoneNamber" placeholder="Your Phone Number" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
            </div>
        </div>
        <div class="form-group">
            <label> Subject </label>
            <input type="text" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="text" rows="5" placeholder="Please specify your requirements, such as the purpose of the translation, etc."></textarea>
        </div>
        <button class="button1" type="submit" id="submitButton">Submit</button>
        <div id="loadingIndicator" style="display: none;">Submitting...</div>
    </form>
    <div id="successModal" class="modal" style="display: none;">
        <div class="modal-content">
            <p id="modalMessage"></p>
            <button id="successModalButton">Done</button>
        </div>
    </div>
    <div id="errorModal" class="modal" style="display: none;">
        <div class="modal-content">
            <p id="errorMessage"></p>
            <button id="errorModalButton">Done</button>
        </div>
    </div>
</div>
    <?php include 'footer.php'; ?>

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