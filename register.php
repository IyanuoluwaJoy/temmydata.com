<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>TemmyWummex | Register</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.html" />
    <link rel="icon" href="assets/img/favicon/favicon.jpg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
   
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css" /> -->
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
  </head>


  <body>
    <!-- Content -->
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html"class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="assets/img/favicon/favicon.jpg" height="30px">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder" style="text-transform: capitalize;">TemmyWummex</span>
                </a>
              </div>
              <!-- /Logo -->
            <h3>Enjoy - <strong>TEMMYWUMMEX</strong></h3>
            <p class="mb-4">Provide your valid creditials and sign in.</p>

            <!-- <div id="messages" class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <strong>Alert</strong>
            </div> -->
            <div id="form-messages" class="alert" style="display: none;"></div>
            <form id="form" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">First Name</label>
                  <input type="hidden" id="myreferral" value="ADMIN" name="myreferral">
                  <input
                    type="text"
                    class="form-control"
                    id="first_name"
                    placeholder="Enter your first name"
                    autofocus
                    name="first_name"
                  required/>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Last Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="last_name"
                    placeholder="Enter your last name"
                    autofocus
                    name="last_name"
                    required
                  />
                </div>


                <div class="mb-3">
                  <label for="email" class="form-label">Telephone</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="mobile_no"
                    placeholder="Enter your mobile no."
                    autofocus
                    name="mobile_no"
                    required
                  />
                </div>


                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email_address"
                    placeholder="Enter your email"
                    autofocus
                    name="email_address"
                    required
                  />
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    placeholder="Enter your username"
                    autofocus
                    name="username"
                    required
                  />
                </div>


                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      name="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" checked/>
                    <label class="form-check-label" for="remember-me"> I agree to terms and conditions </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" id="submitBtn" name="submit">Sign Up</button>
                </div>
        
</form>
              <p class="text-center">
                <span>Already a member?</span>
                <a href="login.html">
                  <span>Sign In</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay%402.1.7/dist/loadingoverlay.min.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
<script>
    
const submitBtn = document.getElementById("submitBtn");
const messages = document.getElementById("form-messages"); // Get the existing div

submitBtn.addEventListener('click', () => {
  event.preventDefault();

  // Display "Please wait..." message
  submitBtn.textContent = "Please wait...";

  const first_name = document.getElementById("first_name").value;
  const last_name = document.getElementById("last_name").value;
  const mobile_no = document.getElementById("mobile_no").value;
  const email_address = document.getElementById("email_address").value;
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const myreferral = document.getElementById("myreferral").value;

  const formData = new FormData();
  formData.append("first_name", first_name);
  formData.append("last_name", last_name);
  formData.append("mobile_no", mobile_no);
  formData.append("email_address", email_address);
  formData.append("username", username);
  formData.append("password", password);
  formData.append("myreferral", myreferral);

  const xhr = new XMLHttpRequest();

  xhr.onload = () => {
    if (xhr.status === 200) {
      // Request was successful, you can handle the server response here
      const response = JSON.parse(xhr.responseText);
      if (response.success) {
        // Registration was successful
        //alert(response.message);
        displayMessage("success", response.message);
        clearFormFields();
      } else {
        // Registration encountered an error
        //alert(response.message);
        displayMessage("danger", response.message);
      }
    } else {
      // Handle errors here
      //alert('Error occurred: ' + xhr.status);
      displayMessage("danger", 'Error occurred: ' + xhr.status);
    }
    
    // Revert the button text after the request is complete
    submitBtn.textContent = "Sign Up";
  };

  xhr.open('POST', 'app/register.php', true);
  xhr.send(formData);
});

function displayMessage(type, message) {
  // Remove any existing message classes
  messages.classList.remove("alert", "alert-success", "alert-danger");

  // Set the appropriate message class based on the type
  messages.classList.add("alert", `alert-${type}`);
  messages.textContent = message;
  messages.style.fontWeight = "bold";
  messages.style.display = "block";
}
function clearFormFields() {
    // Clear form values
    document.getElementById("first_name").value = "";
    document.getElementById("last_name").value = "";
    document.getElementById("mobile_no").value = "";
    document.getElementById("email_address").value = "";
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
    document.getElementById("myreferral").value = ""; 
    
    // Clear placeholders (set them to empty strings)
    document.getElementById("first_name").placeholder = "";
    document.getElementById("last_name").placeholder = "";
    document.getElementById("mobile_no").placeholder = "";
    document.getElementById("email_address").placeholder = "";
    document.getElementById("username").placeholder = "";
    document.getElementById("password").placeholder = "";
    document.getElementById("myreferral").placeholder = ""; 
}
</script>

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="../buttons.github.io/buttons.js"></script>
  </body>
</html>
