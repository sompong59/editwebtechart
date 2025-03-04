
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Contact Form</title>
	<link rel="stylesheet" href="styletext.css">
</head>
<body>
    <div class="container">
    <?php if (isset($_GET['error'])) { ?>
  		<p class="error">
  			<?=htmlspecialchars($_GET['error'])?>
  		</p>
  	<?php } ?>
  	
  	<?php if (isset($_GET['success'])) { ?>
  		<p class="success">
  			<?=htmlspecialchars($_GET['success'])?>
  		</p>
  	<?php } ?>
  	<h2>ຂໍໃບສະເໜີລາຄາຟຣີ</h2>
 
  	<!-- <form action="contact.php" method="POST"> -->
      <form id="myForm" action="contact.php" method="POST" enctype="multipart/form-data">
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
                <option value="ອື່່ນ ໆ">ອື່ນ ໆ</option>
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
                <option value="ອື່່ນ ໆ">ອື່ນ ໆ</option>
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
            <label> ແນບໄຟລ໌ຂອງທ່ານ (ສູງສຸດ 5 ໄຟລ໌) </label>
        <div class="file-upload">
            <input type="file" name="form_fields[]" multiple="multiple" data-maxsize="10" data-maxsize-message="This file exceeds the maximum allowed size.">   
        </div>
        </div>
        
        <div class="form-group">
            <label>ປ້ອນຂໍ້ມູນຊື່ຂອງທ່ານ <span class="required">*</span> </label>
            <input type="text" name="name"
                placeholder="ຊື່ຂອງຂອງ"
                required>
        </div>
        <div class="language-group">
        <div class="form-group">
		<label> ທີ່ຢູ່ອີເມວຂອງທ່ານ	<span class="required">*</span> </label>
  		<input type="email" name="email" 
  		       placeholder="ທີ່ຢູອີເມວ" 
  		       required>
            </div> 
            <div class="form-group">
            <label> ເບີໂທຂອງທ່ານ </label>
            <input size="1" type="tel" name="phoneNamber" placeholder="ເບີໂທຂອງທ່ານ" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">
        </div> 
    </div>
    <div class="form-group">
    <label> ຫົວຂໍ້</label>
  		<input type="text" name="subject" 
  		       placeholder="ຫົວຂໍ້" 
  		       required>
            </div>
            <div class="form-group">
                <label for="message">ຂໍ້ຄວາມ</label>
  		<textarea name="text" 
  		          rows="5"
  		          placeholder="ກະລຸນາແຈ້ງຄວາມຕ້ອງການຂອງທ່ານ ເຊັ່ນ ຈຸດປະສົງຂອງການໃຊ້ຄໍາແປ ຯລຯ"></textarea>
                </div>
  		<button type="submit" onclick="closeAlert()">ສົ່ງຂໍ້ມູນ</button>
          <p id="customAlertMessage"></p>
  	</form>
      <div>
      <div id="notification"></div>
      <script>
        function showAlert(message) {
            document.getElementById('customAlertMessage').textContent = message;
            document.getElementById('customAlert').style.display = 'block';
        }
        function closeAlert() {
            document.getElementById('customAlert').style.display = 'none';
        }
    </script>
 
</body>

   


</html>