 <?php
  include_once  '../data/config.php';
  include_once  '../data/head.php';
  if (isset($_POST["signup"] )) {
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmPassword = $_POST['confirmPassword'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   try
   {
    $select_stmt =$db->prepare("SELECT email FROM taikhoan WHERE email=:email ");
    $select_stmt->execute(array('email'=>$email));
    $row   = $select_stmt->fetch(PDO::FETCH_ASSOC);
    if($email == ''|| $password==''||$confirmPassword ==''|| $firstname ==''||$lastname==''){
      $status ="400";
      $thongbao ="Thiếu thông tin quan trọng";
     
    }elseif ($confirmPassword != $password) {
      $status ="400";
      $thongbao ="pass không giống nhau";
    }elseif($row['email'] == $email) {
      $status ="401";
      $thongbao = "Tài Khoản Đã Tồn Tại";
     
    }elseif ($password < 6) {
      $status ="400";
      $thongbao = "Độ Dài Mật Khẩu Không Hợp Lệ";
    }
    elseif ($confirmPassword == $password) {
      $pass= md5($password);
      $api = md5($email);
      $stm = $db->prepare(
        "INSERT INTO taikhoan (
          ID,
          email,
          pass,
          firstname,
          lastname,
          vnd,
          token,
          status
          )VALUES(
         :id,
         :email,
         :pass, 
         :firstname,
         :lastname,
         :vnd,
         :token,
         :status)"
         ) ;
      // inserting a record
      $stm->execute(
        array(
        ':id' => 0 , 
        ':email' => $email , 
        ':pass' => "$pass" ,
        ':firstname' => $firstname,
        ':lastname' => $lastname,
        ':vnd' => '0',
        ':token' => $api,
        ':status' => '0'
       ));
      $status ="200";
      $thongbao ="tạo tài khoản thành công";
      $_SESSION['token']="$token";
      header('Location:/');
    }

     if($status == "400"){
       $background = "warning alert-dismissible fade show";
       $icon ="tio-new-release-outlined tio-xl";
     }elseif ($status =="401") {
       $background = "danger alert-dismissible fade show";
       $icon ="tio-warning mt-1 mr-1";
     }elseif ($status=="200") {
       $background = "success alert-dismissible fade show";
       $icon ="tio-done tio-xl";
     } 
  

     $msg ='
     <div class="alert alert-'.$background.'" role="alert">
     <strong> <i class="'.$icon.'"></i>OMG!</strong> '.$thongbao.'.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="tio-clear tio-lg"></i></button>
     </div>';
    
  }
    
    catch (PDOException $e)
    {
       die("Có Lỗi Gì đó đã xảy ra: " . $e->getMessage());
    }
   
  }
?>
 <body class="d-flex align-items-center min-h-100">

    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
      <div class="d-flex d-lg-none justify-content-between">
        <a href="index.html">
          <img class="w-100" src="/assets/svg/logos/logo.svg" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
        </a>

        <!-- Select -->
        <div id="languageSelect2" class="select2-custom select2-custom-right z-index-2">
          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                  data-hs-select2-options='{
                    "dropdownParent": "#languageSelect2",
                    "minimumResultsForSearch": "Infinity",
                    "placeholder": "Select language",
                    "customClass": "custom-select custom-select-sm custom-select-borderless bg-transparent",
                    "dropdownAutoWidth": true,
                    "dropdownWidth": "12rem"
                  }'>
            <option label="empty"></option>
            <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
            <option value="language2" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
            <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
            <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
            <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
            <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
            <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
            <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
          </select>
        </div>
        <!-- End Select -->
      </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
      <!-- Content -->
      <div class="container-fluid px-3">
        <div class="row">
          <!-- Cover -->
          <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
            <!-- Logo & Language -->
            <div class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
              <div class="d-none d-lg-flex justify-content-between">
                <a href="/">
                  <img src="/favicon.ico" >
                </a>

                <!-- Select -->
                <div id="languageSelect1" class="select2-custom select2-custom-right">
                  <select class="js-select2-custom"
                          data-hs-select2-options='{
                            "dropdownParent": "#languageSelect1",
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Select language",
                            "customClass": "custom-select custom-select-sm custom-select-borderless bg-transparent",
                            "dropdownAutoWidth": true,
                            "dropdownWidth": "12rem"
                          }'>
                    <option label="empty"></option>
                    <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
                    <option value="language2" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
                    <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
                    <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
                    <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                    <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
                    <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
                    <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
                  </select>
                </div>
                <!-- End Select -->
              </div>
            </div>
            <!-- End Logo & Language -->

            <div style="max-width: 23rem;">
              <div class="text-center mb-5">
                <img class="img-fluid" src="/assets/svg/illustrations/chat.svg" alt="Image Description" style="width: 12rem;">
              </div>

              <div class="mb-5">
                <h2 class="display-4">Build digital products with:</h2>
              </div>

              <!-- List Checked -->
              <ul class="list-checked list-checked-lg list-checked-primary list-unstyled-py-4">
                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">All-in-one tool</span>
                  Build, run, and scale your apps - end to end
                </li>

                <li class="list-checked-item">
                  <span class="d-block font-weight-bold mb-1">Easily add &amp; manage your services</span>
                  It brings together your tasks, projects, timelines, files and more
                </li>
              </ul>
              <!-- End List Checked -->

              <div class="row justify-content-between mt-5 gx-2">
                <div class="col">
                  <img class="img-fluid" src="/assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="/assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="/assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid" src="/assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Cover -->

          <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
            <div class="w-100 pt-10 pt-lg-7 pb-7" style="max-width: 25rem;">
              <!-- Form -->
              <form  method="POST"class="js-validate">
                <div class="text-center mb-5">
                  <h1 class="display-4">Create your account</h1>
                  <p>Already have an account? <a href="authentication-signin-cover.html">Sign in here</a></p>
                </div>

                <div class="mb-4">
                  <a class="btn btn-lg btn-white btn-block" href="#">
                    <span class="d-flex justify-content-center align-items-center">
                      <img class="avatar avatar-xss mr-2" src="/assets/svg/brands/google.svg" alt="Image Description">
                      Sign up with Google
                    </span>
                  </a>
                </div>
       
                <div class="text-center mb-4">
                  <span class="divider text-muted">OR</span>
                </div>
                <?php echo $msg;?>
                <label class="input-label" for="fullNameSrEmail">Full name</label>

                <!-- Form Group -->
                <div class="form-row">
                  <div class="col-sm-6">
                    <div class="js-form-message form-group">
                      <input type="text" class="form-control form-control-lg" name="firstname" id="fullNameSrEmail" placeholder="Mark" aria-label="Mark" required data-msg="Please enter your first name.">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="js-form-message form-group">
                      <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Williams" aria-label="Williams" required data-msg="Please enter your last name.">
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrEmail">Your email</label>

                  <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="Markwilliams@example.com" aria-label="Markwilliams@example.com" required data-msg="Please enter a valid email address.">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrPassword">Password</label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-msg="Your password is invalid. Please try again."
                           data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": ".js-toggle-passowrd-show-icon-1"
                           }'>
                    <div class="js-toggle-password-target-1 input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-1 tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group">
                  <label class="input-label" for="signupSrConfirmPassword">Confirm password</label>

                  <div class="input-group input-group-merge">
                    <input type="password" class="js-toggle-password form-control form-control-lg" name="confirmPassword" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required
                           data-msg="Password does not match the confirm password."
                           data-hs-toggle-password-options='{
                             "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                             "defaultClass": "tio-hidden-outlined",
                             "showClass": "tio-visible-outlined",
                             "classChangeTarget": ".js-toggle-passowrd-show-icon-2"
                           }'>
                    <div class="js-toggle-password-target-2 input-group-append">
                      <a class="input-group-text" href="javascript:;">
                        <i class="js-toggle-passowrd-show-icon-2 tio-visible-outlined"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Form Group -->

                <!-- Checkbox -->
                <div class="js-form-message form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required data-msg="Please accept our Terms and Conditions.">
                    <label class="custom-control-label text-muted" for="termsCheckbox"> I accept the <a href="#">Terms and Conditions</a></label>
                  </div>
                </div>
                <!-- End Checkbox -->

                <button type="submit" name='signup' class="btn btn-lg btn-block btn-primary mb-2">Create an account</button>

                <button type="submit" class="btn btn-block btn-link">
                 Đăng Ký Trở Thành CTV Miễn Phí 7 day<i class="tio-chevron-right"></i>
                </button>
              </form>
              <!-- End Form -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="/assets/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="/assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });

        
        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupSrPassword'
              }
            }
          });
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/authentication-signup-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 07:42:48 GMT -->
</html>