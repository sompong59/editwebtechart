<?php $pageTitle = "ຟອມສົ່ງຂໍ້ມູນ"; ?>
<!DOCTYPE html>
<html lang="la">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="stylecss/style.css">
    <link rel="stylesheet" href="stylecss/stylefrom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

<?php include 'header.php'; ?>

<div class="containerfrom">
        <h2>ຂໍໃບສະເໜີລາຄາຟຣີ</h2>
        <form action="contact.php" method="POST" enctype="multipart/form-data" id="contactForm">
            <div class="form-group">
                <label for="originalLanguage">ເລືອກພາສາຕົ້ນສະບັບ<span class="required">*</span></label>
                <select id="originalLanguage" name="originalLanguage">
                    <option value="ພາສາລາວ">ພາສາລາວ</option>
                    <option value="ພາສາອັງກິດ">ພາສາອັງກິດ</option>
                    <option value="ພາສາຈີນ">ພາສາຈີນ</option>
                    <option value="ພາສາຫວຽດນາມ">ພາສາຫວຽດນາມ</option>
                    <option value="ພາສາຟຣັງ">ພາສາຟຣັງ</option>
                    <option value="ພາສາໄທ">ພາສາໄທ</option>
                    <option value="ພາສາລັດເຊຍ">ພາສາລັດເຊຍ</option>
                    <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="targetLanguage">ເລືອກພາສາເປົ້າໝາຍ<span class="required">*</span></label>
                <select id="targetLanguage" name="targetLanguage">
                    <option value="ພາສາລາວ">ພາສາລາວ</option>
                    <option value="ພາສາອັງກິດ">ພາສາອັງກິດ</option>
                    <option value="ພາສາຈີນ">ພາສາຈີນ</option>
                    <option value="ພາສາຫວຽດນາມ">ພາສາຫວຽດນາມ</option>
                    <option value="ພາສາຟຣັງ">ພາສາຟຣັງ</option>
                    <option value="ພາສາໄທ">ພາສາໄທ</option>
                    <option value="ພາສາລັດເຊຍ">ພາສາລັດເຊຍ</option>
                    <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="serviceType">ປະເພດການບໍລິການ<span class="required">*</span></label>
                <select id="serviceType" name="serviceType">
                    <option value="ແປດວນ">ແປດວນ</option>
                    <option value="ແປປົກກະຕິ">ແປປົກກະຕິ</option>
                    <option value="ອື່ນ ໆ">ອື່ນ ໆ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fileUpload">ແນບໄຟລ໌ຂອງທ່ານ (ສູງສຸດ 5 ໄຟລ໌)</label>
                <div class="file-upload">
                    <input type="file" id="fileUpload" name="form_fields[]" multiple="multiple" data-maxsize="10" data-maxsize-message="This file exceeds the maximum allowed size.">
                </div>
            </div>
            <div class="form-group">
                <label for="name">ປ້ອນຂໍ້ມູນຊື່ຂອງທ່ານ<span class="required">*</span></label>
                <input type="text" id="name" name="name" placeholder="ຊື່ຂອງທ່ານ" required>
            </div>
            <div class="form-group">
                <label for="email">ທີ່ຢູ່ອີເມວຂອງທ່ານ<span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="ທີ່ຢູອີເມວ" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">ເບີໂທຂອງທ່ານ<span class="required">*</span></label>
                <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="ເບີໂທຂອງທ່ານ" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
            </div>
            <div class="form-group">
                <label for="subject">ຫົວຂໍ້ (ເລື່ອງ)</label>
                <input type="text" id="subject" name="subject" placeholder="ຫົວຂໍ້" required>
            </div>
            <div class="form-group">
                <label for="message">ຂໍ້ຄວາມ</label>
                <textarea id="message" name="text" rows="5" placeholder="ກະລຸນາແຈ້ງຄວາມຕ້ອງການຂອງທ່ານ ເຊັ່ນ ຈຸດປະສົງຂອງການໃຊ້ຄໍາແປ ຯລຯ"></textarea>
            </div>
            <button type="submit" id="submitButton">ສົ່ງຂໍ້ມູນ</button>
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

            

    <?php include 'footer.php'; ?>
</body>
</html>