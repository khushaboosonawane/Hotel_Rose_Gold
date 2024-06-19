<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin <?= $basic_info[0]['hotel_name'] ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url() ?>public/admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html">
            <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:50px;width:50px" alt="logo" />
            <span style="color:white;font-size:10px"><?= $basic_info[0]['hotel_name'] ?></span>
          </a>
          <a class="sidebar-brand brand-logo-mini" href="index.html">
          <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:50px;width:50px" alt="logo" />
          </a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
              <?php
            if(isset($_SESSION['admin_id'])){
              ?>
            <div class="profile-desc">
                  <div class="profile-pic">
                    <div class="count-indicator">
                      <img class="img-xs rounded-circle " src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_image'] ?>" style="object-fit:cover" alt="">
                      <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                      <h5 class="mb-0 font-weight-normal" style="font-size:14px"><?= $admin_data[0]['admin_name'] ?></h5>
                      <span><?=$admin_data[0]['admin_desig'] ?></span>
                    </div>
                  </div>
                  <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                  <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-primary"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-onepassword  text-info"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar-today text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                      </div>
                    </a>
                  </div>
            </div>
              <?php
            }else{
              ?>
            <div class="profile-desc">
                <div class="profile-pic">
                  <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="<?= base_url() ?>public/admin_assets/images/faces/face15.jpg" alt="">
                    <span class="count bg-success"></span>
                  </div>
                  <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                    <span>Gold Member</span>
                  </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                  <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar-today text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                    </div>
                  </a>
                </div>
            </div>
              <?php
            }
            ?>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/order_food">
              <span class="menu-icon">
              <i class="ri-restaurant-2-line lead"></i>
              </span>
              <span class="menu-title">Order Food Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/book_hall">
              <span class="menu-icon">
              <i class="ri-bookmark-line lead"></i>
              </span>
              <span class="menu-title">Book Hall Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/room_book_details">
              <span class="menu-icon">
                <i class="mdi mdi-ev-station"></i>
              </span>
              <span class="menu-title">Booked <br> Room Details</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#visitor" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="ri-tv-2-line lead"></i>
              </span>
              <span class="menu-title">Website visitor <br> & User Information </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="visitor">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/users">1 . Users</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/visitor_info">2 . Website Visitor <br> Information</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/basic_info">
              <span class="menu-icon">
                <i class="mdi mdi-firefox"></i>
              </span>
              <span class="menu-title">Website <br> Basic Information</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#home" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-home"></i>
              </span>
              <span class="menu-title">Home Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/slider">1 . Slider Information</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/about_page">2 . About</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/special_offer_room">3 . Special Offer <br> Room</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/extra_service">4 . Extra Services</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/promotional_video">5 . Promotional Video</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/hotel_facility">5 . Hotel Facility</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/testimonial">6 . Testimonial</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/metting_halls">7 . Metting & Halls</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/blog">8 . Blog</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#about" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-vpn"></i>
              </span>
              <span class="menu-title">About Page</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/food">1 . Foods</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/team">2 . Team</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#room_suits" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-briefcase"></i>
              </span>
              <span class="menu-title">Rooms & Suits</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="room_suits">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/other_rooms">1 . Rooms Data</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#gallery" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="ri-gallery-line lead"></i>
              </span>
              <span class="menu-title">Gallery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gallery">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/gallery">1 . Gallery Images</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/gallery_video">1 . Gallery Images & Video</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" data-target="#cat_sub" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="ri-gallery-view-2 lead" ></i>
              </span>
              <span class="menu-title">Category And <br> SubCategory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="cat_sub">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/category">Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?= base_url() ?>admincontroller/sub_category">SubCategory</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="<?= base_url() ?>admincontroller/admin_data">
              <span class="menu-icon">
              <i class="ri-map-pin-user-line lead" style="font-size:20px"></i>
              </span>
              <span class="menu-title">Admin</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>admincontroller/">
              <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:50px;width:50px;object-fit:cover" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <!-- <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button> -->
            <ul class="navbar-nav navbar-nav-right">
             
              <?php
              if(isset($_SESSION['admin_id'])){
                ?>
              <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                      <img class="img-xs rounded-circle" src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_image'] ?>" style="height:40px;width:40px;object-fit:cover" alt="">
                      <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $admin_data[0]['admin_name'] ?></p>
                      <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?= base_url() ?>admincontroller/view_profile">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                        <i class="ri-user-line lead"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">View Profile</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?= base_url() ?>admincontroller/logout_user" onclick="return confirm('Are You Sure To Logout From Account')">
                      <div class="preview-thumbnail" >
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger" ></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1" onclick="return confirm('Are You Sure To Logout From Account')">Log out</p>
                      </div>
                    </a>
                   
              </li>
                <?php
              }else{
                ?>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?= base_url() ?>public/admin_assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
                <?php
              }
              ?>
              
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>


        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">