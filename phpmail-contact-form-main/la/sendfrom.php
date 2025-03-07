<?php $pageTitle = "ຟອມສົ່ງຂໍ້ມູນຂໍໃບສະເໜີລາຄາຟຣີ"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="from.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="social-buttons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
</head>
<body>
    <?php include 'header.php';?>

<div class="containerbody">
        <h2>ຂໍໃບສະເໜີລາຄາຟຣີ</h2>

        <form action="contact.php" method="POST" enctype="multipart/form-data" id="contactForm">
            <div class="language-group">
                <div class="form-group">
                    <label>ເລືອກພາສາຕົ້ນສະບັບ <span class="required">*</span></label>
                    <select type="text" name="originalLanguage">
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
                <div class="form-group">
                    <label>ເລືອກພາສາເປົ້າໝາຍ <span class="required">*</span></label>
                    <select type="text" name="targetLanguage">
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
               <div class="form-group">
<label>ປະເພດການບໍລິການ <span class="required">*</span> </label>
            <select type="text" name="serviceType">
			<option value="ແປດວນ ">ແປດວນ </option>
                <option value="ແປປົກກະຕິ ">ແປປົກກະຕິ</option>
                <option value="ອື່່ນ ໆ">ອື່ນ ໆ</option>
            </select>
        </div>
            <div class="form-group">
                <label> ແນບໄຟລ໌ຂອງທ່ານ (ສູງສຸດ 5 ໄຟລ໌) <span class="required">*</span></label>
                <div class="file-upload">
                    <input type="file" name="form_fields[]" multiple="multiple" data-maxsize="10" data-maxsize-message="This file exceeds the maximum allowed size.">
                </div>
            </div>
            <div class="form-group">
                <label>ປ້ອນຂໍ້ມູນຊື່ຂອງທ່ານ <span class="required">*</span></label>
                <input type="text" name="name" placeholder="ຊື່ຂອງຂອງ" required>
            </div>
            <div class="language-group">
                <div class="form-group">
                    <label> ທີ່ຢູ່ອີເມວຂອງທ່ານ <span class="required">*</span></label>
                    <input type="email" name="email" placeholder="ທີ່ຢູອີເມວ" required>
                </div>
                <div class="form-group">
                    <label> ເບີໂທຂອງທ່ານ <span class="required">*</span></label>
                    <input size="1" type="tel" name="phoneNamber" placeholder="ເບີໂທຂອງທ່ານ" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
                </div>
            </div>
            <div class="form-group">
            <label> ຫົວຂໍ້ (ເລື່ອງ)</label>
                <input type="text" name="subject" placeholder="ຫົວຂໍ້" required>
            </div>
            <div class="form-group">
                <label for="message">ຂໍ້ຄວາມ</label>
                <textarea name="text" rows="5" placeholder="ກະລຸນາແຈ້ງຄວາມຕ້ອງການຂອງທ່ານ ເຊັ່ນ ຈຸດປະສົງຂອງການໃຊ້ຄໍາແປ ຯລຯ"></textarea>
            </div>
            <button class="button1" type="submit" id="submitButton">ສົ່ງຂໍ້ມູນ</button>
            <div id="loadingIndicator" style="display: none;">ກຳລັງສົ່ງ...</div>
        </form>

        <div id="successModal" class="modal" style="display: none;">
            <div class="modal-content">
                <p id="modalMessage"></p>
                <button id="successModalButton">ສຳເລັດ</button>
            </div>
        </div>

        <div id="errorModal" class="modal" style="display: none;">
            <div class="modal-content">
                <p id="errorMessage"></p>
                <button id="errorModalButton">ສຳເລັດ</button>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('submitButton').disabled = true;
            document.getElementById('loadingIndicator').style.display = 'block';
            const formData = new FormData(this);
            fetch('contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('submitButton').disabled = false;
                document.getElementById('loadingIndicator').style.display = 'none';
                const modal = data.success ? document.getElementById('successModal') : document.getElementById('errorModal');
                const modalMessage = data.success ? document.getElementById('modalMessage') : document.getElementById('errorMessage');
                modalMessage.textContent = data.message;
                modal.style.display = 'block';

                // ເພີ່ມ event listener ສຳລັບປຸ່ມ "ສຳເລັດ"
                const modalButton = data.success ? document.getElementById('successModalButton') : document.getElementById('errorModalButton');
                modalButton.onclick = function() {
                    modal.style.display = 'none';
                }

                if (data.success) {
                    document.getElementById('contactForm').reset();
                }
            })
            .catch(error => {
                document.getElementById('submitButton').disabled = false;
                document.getElementById('loadingIndicator').style.display = 'none';
                alert('ເກີດຂໍ້ຜິດພາດ. ກະລຸນາລອງໃໝ່.');
            });
        });
    </script>
</body>
</html>
