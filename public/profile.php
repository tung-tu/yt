<?php
 include_once  '../data/config.php';
 include_once  '../data/head.php';
 include_once  '../data/nav.php';
 
 ?>
    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Account</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Settings</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Settings</h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="user-profile-my-profile.html">
                <i class="tio-user mr-1"></i> My profile
              </a>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
          <div class="col-lg-3">
            <!-- Navbar -->
            <div class="navbar-vertical navbar-expand-lg mb-3 mb-lg-5">
              <!-- Navbar Toggle -->
              <button type="button" class="navbar-toggler btn btn-block btn-white mb-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu" data-toggle="collapse" data-target="#navbarVerticalNavMenu">
                <span class="d-flex justify-content-between align-items-center">
                  <span class="h5 mb-0">Nav menu</span>

                  <span class="navbar-toggle-default">
                    <i class="tio-menu-hamburger"></i>
                  </span>

                  <span class="navbar-toggle-toggled">
                    <i class="tio-clear"></i>
                  </span>
                </span>
              </button>
              <!-- End Navbar Toggle -->

              <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                <!-- Navbar Nav -->
                <ul id="navbarSettings" class="js-sticky-block js-scrollspy navbar-nav navbar-nav-lg nav-tabs card card-navbar-nav"
                     data-hs-sticky-block-options='{
                       "parentSelector": "#navbarVerticalNavMenu",
                       "breakpoint": "lg",
                       "startPoint": "#navbarVerticalNavMenu",
                       "endPoint": "#stickyBlockEndPoint",
                       "stickyOffsetTop": 20
                     }'>
                  <li class="nav-item">
                    <a class="nav-link active" href="#content">
                      <i class="tio-user-outlined nav-icon"></i> Basic information
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#passwordSection">
                      <i class="tio-lock-outlined nav-icon"></i> Password
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#twoStepVerificationSection">
                      <i class="tio-fingerprint nav-icon"></i> Two-step verification
                    </a>
                  </li>
               
                
               
                  <li class="nav-item">
                    <a class="nav-link" href="#deleteAccountSection">
                      <i class="tio-delete-outlined nav-icon"></i> Delete account
                    </a>
                  </li>
                </ul>
                <!-- End Navbar Nav -->
              </div>
            </div>
            <!-- End Navbar -->
          </div>
             
          <div class="col-lg-9">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Profile Cover -->
              <div class="profile-cover">
                <div class="profile-cover-img-wrapper">
                  <img id="profileCoverImg" class="profile-cover-img" src="/assets/img/1920x400/img2.jpg" alt="Image Description">

                  <!-- Custom File Cover -->
                  <div class="profile-cover-content profile-cover-btn">
                    <div class="custom-file-btn">
                      <input type="file" class="js-file-attach custom-file-btn-input" id="profileCoverUplaoder"
                             data-hs-file-attach-options='{
                                "textTarget": "#profileCoverImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
                      <label class="custom-file-btn-label btn btn-sm btn-white" for="profileCoverUplaoder">
                        <i class="tio-add-photo mr-sm-1"></i>
                        <span class="d-none d-sm-inline-block">Update your header</span>
                      </label>
                    </div>
                  </div>
                  <!-- End Custom File Cover -->
                </div>
              </div>
              <!-- End Profile Cover -->

              <!-- Avatar -->
              <label class="avatar avatar-xxl avatar-circle avatar-border-lg avatar-uploader profile-cover-avatar" for="avatarUploader">
                <img id="avatarImg" class="avatar-img" src="/assets/img/160x160/img6.jpg" alt="Image Description">

                <input type="file" class="js-file-attach avatar-uploader-input" id="avatarUploader"
                       data-hs-file-attach-options='{
                          "textTarget": "#avatarImg",
                          "mode": "image",
                          "targetAttr": "src",
                          "allowTypes": [".png", ".jpeg", ".jpg"]
                       }'>

                <span class="avatar-uploader-trigger">
                  <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                </span>
              </label>
              <!-- End Avatar -->

              <!-- Body -->
              <div class="card-body">
              <center><h1><?php echo $myname; ?></h1></center>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h2 class="card-title h4" id='demo'>Basic information</h2>
              </div>

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
              
                
                  <!-- Form Group -->
                  <div id='thongbao'></div>
                  <div class="row form-group">
                  <input type="hidden" id="_token" value="W86nTmzWhqt6gjJwsDPpLReUzEe4UlMSimhRFN0R"> 
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Full name <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Displayed on public forums, such as Front."></i></label>

                    <div class="col-sm-9">
                      <div class="input-group input-group-sm-down-break">
                        <input type="text" class="form-control" id="firstname" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="<?php echo $row['firstname']; ?>">
                        <input type="text" class="form-control" id="lastname" id="lastNameLabel" placeholder="Your last name" aria-label="Your last name" value="<?php echo $row['lastname']; ?>">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" id="emailLabel" placeholder="Email" aria-label="Email" value="<?php echo $myemail;?>">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="phoneLabel" class="col-sm-3 col-form-label input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                    <div class="col-sm-9">
                      <input type="text" class="js-masked-input form-control" id="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22"
                             data-hs-mask-options='{
                               "template": "+0(000)000-00-00"
                             }'>
                    </div>
                  </div>
                  <!-- End Form Group -->

                
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row align-items-center form-group">
                    <label for="disableAdCheckbox" class="col-sm-3 col-form-label input-label">Disable ads <span class="badge badge-primary text-uppercase ml-1">PRO</span></label>

                    <div class="col-sm-9">
                      <!-- Custom Checkbox -->
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="disableAdCheckbox">
                        <label class="custom-control-label" for="disableAdCheckbox">With your Pro account, you can disable ads across the site.</label>
                      </div>
                      <!-- End Custom Checkbox -->
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" id='doithongtin'>Save changes</button>
                  </div>
              
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->


            <!-- Card -->
            <div id="passwordSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Change your password</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
             
                  <div id='thongbao2'></div>
                <input type="hidden" id="token" value="GFKBH23BR2H3R29HO2N3">
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="currentPasswordLabel" class="col-sm-3 col-form-label input-label">Current password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="pass"  placeholder="Enter current password" aria-label="Enter current password">
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="newPassword" class="col-sm-3 col-form-label input-label">New password</label>

                    <div class="col-sm-9">
                      <input type="password" class="js-pwstrength form-control" id="newpass" placeholder="Enter new password" aria-label="Enter new password"
                             data-hs-pwstrength-options='{
                               "ui": {
                                 "container": "#changePasswordForm",
                                 "viewports": {
                                   "progress": "#passwordStrengthProgress",
                                   "verdict": "#passwordStrengthVerdict"
                                 }
                               }
                             }'>

                      <p id="passwordStrengthVerdict" class="form-text mb-2"></p>

                      <div id="passwordStrengthProgress"></div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="row form-group">
                 
                    <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label input-label">Confirm new password</label>

                    <div class="col-sm-9">
                      <div class="mb-3">
                        <input type="password" class="form-control"  id="Confirm" placeholder="Confirm your new password" aria-label="Confirm your new password">
                      </div>

                      <h5>Password requirements:</h5>

                      <p class="font-size-sm mb-2">Ensure that these requirements are met:</p>

                      <ul class="font-size-sm">
                        <li>Minimum 8 characters long - the more, the better</li>
                        <li>At least one lowercase character</li>
                        <li>At least one uppercase character</li>
                        <li>At least one number, symbol, or whitespace character</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" id='doipass'>Save Changes</button>
                  </div>
              
                <!-- End Form -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
           
            <!-- End Card -->

            <!-- Card -->
            <div id="twoStepVerificationSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h4 class="card-title">Two-step verification</h4>
                  <span class="badge badge-soft-danger ml-2">Disabled</span>
                </div>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">Start by entering your password so that we know it's you. Then we'll walk you through two more simple steps.</p>

        
               
                  <div id='thongbao3'></div>
                  
                  <input type="hidden" id="tokencheck" value="FIN2Y98NE0XH1N39X1N8F">
                  <!-- Form Group -->
                  <div class="row form-group">
                    <label for="accountPasswordLabel" class="col-sm-3 col-form-label input-label">Account password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control"  id="passcheck" placeholder="Enter current password" aria-label="Enter current password">
                      <small class="form-text">This is the password you use to log in to your Front account.</small>
                    </div>
                  </div>
                  <!-- End Form Group -->
                  
                  <div class="d-flex justify-content-end" id='thongbao4'>
                    <button type="submit" id='checkpass' class="btn btn-primary">Set up</button>
                
                  </div>
               
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->


            <!-- Card -->
          






            <!-- Card -->
            <div id="deleteAccountSection" class="card mb-3 mb-lg-5">
              <div class="card-header">
                <h4 class="card-title">Delete your account</h4>
              </div>

              <!-- Body -->
              <div class="card-body">
                <p class="card-text">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>

                <div class="form-group">
                  <!-- Custom Checkbox -->
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="deleteAccountCheckbox">
                    <label class="custom-control-label" for="deleteAccountCheckbox">Confirm that I want to delete my account.</label>
                  </div>
                  <!-- End Custom Checkbox -->
                </div>

                <div class="d-flex justify-content-end">
                  <a class="btn btn-white mr-2" href="#">Learn more <i class="tio-open-in-new ml-1"></i></a>

                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Sticky Block End Point -->
            <div id="stickyBlockEndPoint"></div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>

                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>

                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;"
                         data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                        <i class="tio-command-key"></i>
                      </a>
                    </div>
                    <!-- End Keyboard Shortcuts Toggle -->
                  </li>
                </ul>
                <!-- End List Dot -->
              </div>
            </div>
          </div>
        </div>
      

      
      <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Keyboard Shortcuts -->
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

    <!-- Activity -->
    <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Activity stream</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;"
             data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
            <i class="tio-clear tio-lg"></i>
          </a>
          <!-- End Toggle Button -->
        </div>

        <!-- Body -->
        <div class="card-body sidebar-body sidebar-scrollbar">
          <!-- Step -->
          <ul class="step step-icon-sm step-avatar-sm">
            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="/assets/img/160x160/img9.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Iana Robinson</h5>

                  <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                  <ul class="list-group list-group-sm">
                    <!-- List Item -->
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="/assets/svg/brands/excel.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">12kb</small>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="media">
                              <span class="mt-1 mr-2">
                                <img class="avatar avatar-xs" src="/assets/svg/brands/word.svg" alt="Image Description">
                              </span>
                            <div class="media-body text-truncate">
                              <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                              <small class="d-block text-muted">4kb</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- End List Item -->
                  </ul>

                  <small class="text-muted text-uppercase">Now</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-dark">B</span>

                <div class="step-content">
                  <h5 class="mb-1">Bob Dean</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Today</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="/assets/img/160x160/img3.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="/assets/svg/illustrations/card-1.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="/assets/svg/illustrations/card-2.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="/assets/svg/illustrations/card-3.svg" alt="Image Description">
                        </div>
                        <div class="col-auto align-self-center">
                          <div class="text-center">
                            <a href="#">+2</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <small class="text-muted text-uppercase">May 12</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <span class="step-icon step-icon-soft-info">D</span>

                <div class="step-content">
                  <h5 class="mb-1">David Lidell</h5>

                  <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                  <small class="text-muted text-uppercase">May 15</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="/assets/img/160x160/img7.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Rachel King</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                  <small class="text-muted text-uppercase">Apr 29</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                <div class="step-avatar">
                  <img class="step-avatar-img" src="/assets/img/160x160/img5.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="mb-1">Finch Hoot</h5>

                  <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                  <small class="text-muted text-uppercase">Apr 06</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->

            <!-- Step Item -->
            <li class="step-item">
              <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">
                    <i class="tio-user"></i>
                  </span>

                <div class="step-content">
                  <h5 class="mb-1">Project status updated</h5>

                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

                  <small class="text-muted text-uppercase">Feb 10</small>
                </div>
              </div>
            </li>
            <!-- End Step Item -->
          </ul>
          <!-- End Step -->

          <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Activity -->

    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-close">
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body p-sm-5">
            <div class="text-center">
              <div class="w-75 w-sm-50 mx-auto mb-4">
                <img class="img-fluid" src="/assets/svg/illustrations/graphs.svg" alt="Image Description">
              </div>

              <h4 class="h1">Welcome to Front</h4>

              <p>We're happy to see you in our community.</p>
            </div>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer d-block text-center py-sm-5">
            <small class="text-cap mb-4">Trusted by the world's best teams</small>

            <div class="w-85 mx-auto">
              <div class="row justify-content-between">
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="/assets/svg/brands/gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="/assets/svg/brands/fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="/assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="/assets/svg/brands/layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
 
 
 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mã Xác Thực 2FA của bạn là</h5>
            <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <div class="modal-body">
          <div class="input-group input-group-merge">
  <input type="text" id="iconExample" class="form-control" value="I aaaa">

  <a class="js-clipboard input-group-append" href="javascript:;"
     data-hs-clipboard-options='{
       "contentTarget": "#iconExample",
       "classChangeTarget": "#iconExampleLinkIcon",
       "defaultClass": "tio-copy",
       "successClass": "tio-done"
     }'>
    <span class="input-group-text">
      <span id="iconExampleLinkIcon" class="tio-copy"></span>
    </span>
  </a>
</div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>





    
<!-- End Input Group -->

    <!-- JS Implementing Plugins -->
    <script src="/assets/js/vendor.min.js"></script>
    
    <!-- JS Front -->
    <script src="/assets/js/theme.min.js"></script>
<script src="/assets/js/hs-clipboard.js"></script>
    <script src="/node_modules/clipboard/dist/clipboard.min.js"></script>
    <!-- JS Plugins Init. -->
    <script>
    $(document).on('ready', function () {
    // INITIALIZATION OF CLIPBOARD
    // =======================================================
    $('.js-clipboard').each(function() {
      $.HSCore.components.HSClipboard.init(this);
    });
  });
    </script>






    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // ONLY DEV
        // =======================================================
        
          if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show')
              .on('shown.bs.popover', function () {
                $('.popover').last().addClass('popover-dark')
              });

            $(document).on('click', '#closeBuilderPopover' , function() {
              window.localStorage.setItem('hs-builder-popover', true);
              $('#builderPopover').popover('dispose');
            });
          } else {
            $('#builderPopover').on('show.bs.popover', function () {
              return false
            });
          }
        
        // END ONLY DEV
        // =======================================================


        // BUILDER TOGGLE INVOKER
        // =======================================================
        $('.js-navbar-vertical-aside-toggle-invoker').click(function () {
          $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });

        
          // INITIALIZATION OF MEGA MENU
          // =======================================================
          var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
              position: 'left'
            }
          }).init();
        

        
        // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
        // =======================================================
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        
        // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
        // =======================================================
        $('.js-nav-tooltip-link').tooltip({ boundary: 'window' })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
          if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
            return false;
          }
        });

        
        // INITIALIZATION OF UNFOLD
        // =======================================================
        $('.js-hs-unfold-invoker').each(function () {
          var unfold = new HSUnfold($(this)).init();
        });

        
        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        $('.js-form-search').each(function () {
          new HSFormSearch($(this)).init()
        });

        
        // INITIALIZATION OF FILE ATTACH
        // =======================================================
        $('.js-file-attach').each(function () {
          var customFile = new HSFileAttach($(this)).init();
        });

        
        // INITIALIZATION OF MASKED INPUT
        // =======================================================
        $('.js-masked-input').each(function () {
          var mask = $.HSCore.components.HSMask.init($(this));
        });

        
        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });


        // INITIALIZATION OF SELECT2 WITH FLAGS
        // =======================================================
        $.getJSON('/assets/json/flags.json', function(data) {
          const items = [
            {id: null, html: '', text: ''}
          ];

          let images = [];

          $.each( data, function( key, val ) {
            images[key] = new Image()
            images[key].src = '/assets/vendor/flag-icon-css/flags/1x1/' + val.code + '.svg'

            items.push({
              id: val.name,
              text: val.name,
              html: '<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="/' + images[key].src + '" alt="Flag Image" /><span class="text-truncate">' + val.name + '</span></span>'
            })
          });

          $.HSCore.components.HSSelect2.init($('#locationLabel'), {
            data: items,
            templateResult: function (data) {
              return data.html
            },
            templateSelection: function (data) {
              if (!data.id) {
                return '<span class="text-muted">Select country</span>'
              }

              return data.html
            }
          });
        });

        
        // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        $('.js-sticky-block').each(function () {
          var stickyBlock = new HSStickyBlock($(this), {
            targetSelector: $('#header').hasClass('navbar-fixed') ? '#header' : null
          }).init();
        });

        
        // INITIALIZATION OF SCROLL NAV
        // =======================================================
        var scrollspy = new HSScrollspy($('body'), {
          // !SETTING "resolve" PARAMETER AND RETURNING "resolve('completed')" IS REQUIRED
          beforeScroll: function(resolve) {
            if (window.innerWidth < 992) {
              $('#navbarVerticalNavMenu').collapse('hide').on('hidden.bs.collapse', function () {
                return resolve('completed');
              });
            } else {
              return resolve('completed');
            }
          }
        }).init();

        
        // INITIALIZATION OF PASSWORD STRENGTH MODULE
        // =======================================================
        $('.js-pwstrength').each(function () {
          var pwstrength = $.HSCore.components.HSPWStrength.init($(this));
        });
      });
    $("#doithongtin").on("click", function(){
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
    var email = $("#email").val();
    var token = $("#_token").val();
		var thongbao = $("#thongbao");
		thongbao.html("");

		$.ajax({
		  url: "/Ajax/update.php",
		  method: "POST",
		  data: { firstname : firstname, lastname : lastname , email : email ,token : token},
		  success : function(response){
        var response = JSON.parse(response);
		  if(response.status=='200'){
      background = "success alert-dismissible fade show";
      icon ="tio-done tio-xl";
      }else{
      background = "danger alert-dismissible fade show";
      icon ="tio-warning mt-1 mr-1";
      }
      thongbaohtml ='<div class="alert alert-'+background+'" role="alert"><strong><i class="'+icon+'"></i>OMG!</strong> '+ response.msg +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="tio-clear tio-lg"></i></button></div>';
      thongbao.html(thongbaohtml);
		  	
		  }
		});

	});
  $("#doipass").on("click", function(){
		var pass = $("#pass").val();
		var newpass = $("#newpass").val();
    var Confirm = $("#Confirm").val();
    var token = $("#token").val();
		var thongbao = $("#thongbao2");
		thongbao.html("");

		$.ajax({
		  url: "/Ajax/update.php",
		  method: "POST",
		  data: { pass : pass, newpass : newpass , Confirm : Confirm ,token : token},
		  success : function(response){
        var response = JSON.parse(response);
		  if(response.status=='200'){
      background = "success alert-dismissible fade show";
      icon ="tio-done tio-xl";
      }else{
      background = "danger alert-dismissible fade show";
      icon ="tio-warning mt-1 mr-1";
      }
      thongbaohtml ='<div class="alert alert-'+background+'" role="alert"><strong><i class="'+icon+'"></i>OMG!</strong> '+ response.msg +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="tio-clear tio-lg"></i></button></div>';
      thongbao.html(thongbaohtml);
		  	
		  }
		});

	});
  $("#checkpass").on("click", function(){
		var pass = $("#passcheck").val();
		var thongbao = $("#thongbao3");
    var thongbao2 = $("#thongbao4");
    var token = $("#tokencheck").val();
		thongbao.html("");
    thongbao2.html("");
		$.ajax({
		  url: "/Ajax/update.php",
		  method: "POST",
		  data: { pass : pass,token : token},
		  success : function(response){
        var response = JSON.parse(response);
		  if(response.status=='200'){
      background = "success alert-dismissible fade show";
      icon ="tio-done tio-xl";
      }else{
      background = "danger alert-dismissible fade show";
      icon ="tio-warning mt-1 mr-1";
      }
      thongbaohtml ='<div class="alert alert-'+background+'" role="alert"><strong><i class="'+icon+'"></i>OMG!</strong> '+ response.msg +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <i class="tio-clear tio-lg"></i></button></div>';
      
      if(response.status=='200'){
        thongbao.html(thongbaohtml);
        thongbao2.html(response.check);
        document.getElementById("iconExample").value = response.code;

      }else{
        thongbao.html(thongbaohtml);

        
      }
   
		  }
		});

	});


  
    </script>
      
    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="/assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>

  </body>

<!-- Mirrored from htmlstream.com/front-dashboard/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 07:42:17 GMT -->
</html>