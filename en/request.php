<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Contact Form</title>
    <link rel="stylesheet" href="styletext.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <a href="#" class="button">
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
            </div>
            <span>Facebook</span>
        </a>
        <a href="#" class="button">
            <div class="icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <span>Whatsapp</span>
        </a>
        <a href="#" class="button">
            <div class="icon">
                <i class="fab fa-instagram"></i>
            </div>
            <span>Instagram</span>
        </a>
        <a href="#" class="button">
            <div class="icon">
                <i class="fab fa-tiktok"></i>
            </div>
            <span>Tiktok</span>
        </a>
        <a href="#" class="button">
            <div class="icon">
                <i class="fab fa-youtube"></i>
            </div>
            <span>YouTube</span>
        </a>
    </div>
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
            <button type="submit" id="submitButton">Submit</button>
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
                alert('An error occurred. Please try again.');
            });
        });
    </script>
</body>
</html>