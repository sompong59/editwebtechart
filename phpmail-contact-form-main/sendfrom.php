<?php $pageTitle = "ຟອມສົ່ງຂໍ້ມູນ"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <!-- <link rel="stylesheet" href="styletext.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@100..900&display=swap');
* {
    box-sizing: border-box;
}
.popup-modal { /* ປ່ຽນ .modal ເປັນ .popup-modal */
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}
.popup-content { /* ປ່ຽນ .modal-content ເປັນ .popup-content */
    background-color: #fefefe;
    margin: 15% auto;
    padding: 15px;
    border: 1px solid #888;
    border-radius: 8px;
    width: 80%;
    max-width: 400px;
    text-align: center;
    max-height: 200px;
    overflow: auto;
    font-size: 14px;
}
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
#loadingIndicator {
    text-align: center;
    margin-top: 10px;
    font-style: italic;
    color: rgb(0, 212, 46);
}

body {
    font-family: "Noto Sans Lao", sans-serif;
    background-color:rgb(198, 198, 198);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

select, input, textarea, button{
    font-family: "Noto Sans Lao", sans-serif;
}

.upload-area { /* ປ່ຽນ .file-upload ເປັນ .upload-area */
    background-color: #f0f0f0;
    padding: 10px;
}

.input-group .form-field:first-child { /* ປ່ຽນ .language-group ແລະ .form-group ເປັນ .input-group ແລະ .form-field */
    margin-right: 5px;
}

.input-group .form-field:last-child { /* ປ່ຽນ .language-group ແລະ .form-group ເປັນ .input-group ແລະ .form-field */
    margin-left: 5px;
}
.form-container { /* ປ່ຽນ .containerfrom ເປັນ .form-container */
    width: 900px;
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.form-field { /* ປ່ຽນ .form-group ເປັນ .form-field */
    margin-bottom: 30px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}
.required{
    color: red;
}

select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

button:hover {
    background-color: #45a049;
}

.input-group { /* ປ່ຽນ .language-group ເປັນ .input-group */
    display: flex;
}

.input-group .form-field { /* ປ່ຽນ .language-group ແລະ .form-group ເປັນ .input-group ແລະ .form-field */
    width: 50%;
}

@media (max-width: 768px) {
    .form-container { /* ປ່ຽນ .containerfrom ເປັນ .form-container */
        width: 90%;
        padding: 20px;
    }

    .input-group { /* ປ່ຽນ .language-group ເປັນ .input-group */
        flex-direction: column;
    }

    .input-group .form-field { /* ປ່ຽນ .language-group ແລະ .form-group ເປັນ .input-group ແລະ .form-field */
        width: 100%;
        margin-bottom: 15px;
    }
}
</style>
<body>

<div class="form-container">
        <h2 class="form-container__title">ຂໍໃບສະເໜີລາຄາຟຣີ</h2>
        <form action="contact.php" method="POST" enctype="multipart/form-data" id="contactForm">
            <div class="form-container__input-group">
                <div class="form-container__form-field">
                    <label class="form-container__label">ເລືອກພາສາຕົ້ນສະບັບ<span class="form-container__required">*</span></label>
                    <select class="form-container__select" type="text" name="originalLanguage">
                        <option value="ພາສາລາວ ">ພາສາລາວ </option>
                        <option value="ພາສາອັງກິດ ">ພາສາອັງກິດ </option>
                        <option value="ພາສາຈີນ ">ພາສາຈີນ </option>
                        <option value="ພາສາຫວຽດນາມ ">ພາສາຫວຽດນາມ </option>
                        <option value="ພາສາຟຣັງ ">ພາສາຟຣັງ </option>
                        <option value="ພາສາໄທ ">ພາສາໄທ </option>
                        <option value="ພາສາລັດເຊຍ ">ພາສາລັດເຊຍ </option>
                        <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                    </select>
                </div>
                <div class="form-container__form-field">
                    <label class="form-container__label">ເລືອກພາສາເປົ້າໝາຍ<span class="form-container__required">*</span></label>
                    <select class="form-container__select" type="text" name="targetLanguage">
                        <option value="ພາສາລາວ ">ພາສາລາວ </option>
                        <option value="ພາສາອັງກິດ ">ພາສາອັງກິດ </option>
                        <option value="ພາສາຈີນ ">ພາສາຈີນ </option>
                        <option value="ພາສາຫວຽດນາມ ">ພາສາຫວຽດນາມ </option>
                        <option value="ພາສາຟຣັງ ">ພາສາຟຣັງ </option>
                        <option value="ພາສາໄທ ">ພາສາໄທ </option>
                        <option value="ພາສາລັດເຊຍ ">ພາສາລັດເຊຍ </option>
                        <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                    </select>
                </div>
            </div>
            <div class="form-container__form-field">
                <label class="form-container__label">ປະເພດການບໍລິການ <span class="form-container__required">*</span> </label>
                <select class="form-container__select" type="text" name="serviceType">
                    <option value="ແປດວນ ">ແປດວນ </option>
                    <option value="ແປປົກກະຕິ ">ແປປົກກະຕິ</option>
                    <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                </select>
            </div>
            <div class="form-container__form-field">
                <label class="form-container__label"> ແນບໄຟລ໌ຂອງທ່ານ (ສູງສຸດ 5 ໄຟລ໌) </label>
                <div class="form-container__upload-area">
                    <input type="file" name="form_fields[]" multiple="multiple" data-maxsize="10" data-maxsize-message="This file exceeds the maximum allowed size.">
                </div>
            </div>
            <div class="form-container__form-field">
                <label class="form-container__label">ປ້ອນຂໍ້ມູນຊື່ຂອງທ່ານ<span class="form-container__required">*</span> </label>
                <input class="form-container__input" type="text" name="name" placeholder="ຊື່ຂອງຂອງ" required>
            </div>
            <div class="form-container__input-group">
                <div class="form-container__form-field">
                    <label class="form-container__label"> ທີ່ຢູ່ອີເມວຂອງທ່ານ <span class="form-container__required">*</span> </label>
                    <input class="form-container__input" type="email" name="email" placeholder="ທີ່ຢູອີເມວ" required>
                </div>
                <div class="form-container__form-field">
                    <label class="form-container__label"> ເບີໂທຂອງທ່ານ <span class="form-container__required">*</span></label>
                    <input class="form-container__input" size="1" type="tel" name="phoneNamber" placeholder="ເບີໂທຂອງທ່ານ" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                </div>
            </div>
            <div class="form-container__form-field">
                <label class="form-container__label"> ຫົວຂໍ້ (ເລື່ອງ)</label>
                <input class="form-container__input" type="text" name="subject" placeholder="ຫົວຂໍ້" required>
            </div>
            <div class="form-container__form-field">
                <label class="form-container__label" for="message">ຂໍ້ຄວາມ</label>
                <textarea class="form-container__textarea" name="text" rows="5" placeholder="ກະລຸນາແຈ້ງຄວາມຕ້ອງການຂອງທ່ານ ເຊັ່ນ ຈຸດປະສົງຂອງການໃຊ້ຄໍາແປ ຯລຯ"></textarea>
            </div>
            <button class="form-container__button" type="submit" id="submitButton">ສົ່ງຂໍ້ມູນ</button>
            <div class="form-container__loading-indicator" id="loadingIndicator" style="display: none;">ກຳລັງສົ່ງ...</div>
        </form>

        <div class="form-container__popup-modal" id="successModal" style="display: none;">
            <div class="form-container__popup-content">
                <p class="form-container__modal-message" id="modalMessage"></p>
                <button class="form-container__modal-button" id="successModalButton">ສຳເລັດ</button>
            </div>
        </div>

        <div class="form-container__popup-modal" id="errorModal" style="display: none;">
            <div class="form-container__popup-content">
                <p class="form-container__modal-message" id="errorMessage"></p>
                <button class="form-container__modal-button" id="errorModalButton">ສຳເລັດ</button>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        document.getElementById('submitButton').disabled = true;
        document.querySelector('.form-container__loading-indicator').style.display = 'block';
        const formData = new FormData(this);
        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            document.getElementById('submitButton').disabled = false;
            document.querySelector('.form-container__loading-indicator').style.display = 'none';
            document.getElementById(data.success ? 'successModal' : 'errorModal').style.display = 'block';
            const modalMessage = data.success ? document.querySelector('.form-container__modal-message#modalMessage') : document.querySelector('.form-container__modal-message#errorMessage');
            modalMessage.textContent = data.message;
            const modalButton = data.success ? document.querySelector('.form-container__modal-button#successModalButton') : document.querySelector('.form-container__modal-button#errorModalButton');
            modalButton.onclick = function() {
                document.getElementById(data.success ? 'successModal' : 'errorModal').style.display = 'none';
            }
            if (data.success) {
                document.getElementById('contactForm').reset();
            }
        })
        .catch(error => {
            document.getElementById('submitButton').disabled = false;
            document.querySelector('.form-container__loading-indicator').style.display = 'none';
            alert('ເກີດຂໍ້ຜິດພາດ. ກະລຸນາລອງໃໝ່.');
        });
    });
</script>
</body>
</html>