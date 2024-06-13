<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/admin_assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
        <!--  -->
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          
          
            <div class="card col-lg-4 mx-auto">
              <?php
                if(isset($_SESSION['invalid_login'])){
                  ?>
                  <p style="text-align:center;font-weight:bold;position:relative;top:-60px" class="lead text-white bg-danger" id="invalid">Invalid Login</p>
                  <?php
                }
                ?>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        setTimeout(function(){
                            $("#invalid").fadeOut(2000);
                        },2000)
                    })
                  
                </script>
                <?php
                unset($_SESSION['invalid_login']);
                ?>
              <div class="card-body px-5 py-5 ">
               
                <form action="<?= base_url() ?>adminlogincontroller/checkadminlogin" method="post">
                  <div class="form-group">
                    <label> Email *</label>
                    <input type="text" class="form-control p_input" name="user_email" placeholder="Enter Email" required>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" class="form-control p_input" name="user_pass" placeholder="Enter Password" required>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>public/admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>public/admin_assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/misc.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/settings.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>