<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?= $basic_info[0]['hotel_name'] ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info['0']['hotel_logo'] ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&amp;family=Barlow+Condensed&amp;family=Gilda+Display&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url() ?>/public/user_assets/css/plugins.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/public/user_assets/css/style.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>


</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <!-- <a class="logo" href="index.html"> <img src="<?= base_url() ?>/public/user_assets/img/logo.png" class="logo-img" alt=""> </a> -->
                <a class="logo" href="<?= base_url() ?>usercontroller/">
                     <h5 class="text-white my-3" style="width:87%;text-align:center">
                     <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" alt="" style="height:100px;width:100px;object-fit:cover">
                    </h5>
                    
                </a>
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link active " href="<?= base_url() ?>usercontroller/" >Home </a> 
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url() ?>usercontroller/rooms_suits" >
                            Rooms & Suites
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/foods">Foods</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/team">Team</a></li>
                   
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>usercontroller/contact">Contact</a></li>


                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>usercontroller/cart_page">
                            <i class="ri-heart-line lead"></i>
                        </a>
                    </li>
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if($total>0){
                            ?>
                            <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>usercontroller/order_page">
                                <div style='height:20px;width:20px;position:absolute;top:20px;right:180px;border:1px solid #ff512f;border-radius:50%;background:#ff512f;color:white;font-weight:bold;text-align:center;font-size:10px;vertical-align:center'>
                                    <span style="position:relative;top:-5px;left:1px;font-weight:bold"><?= $total ?></span>
                                </div>
                            <i class="ri-shopping-cart-line lead"></i>
                            </a>
                        </li>
                            <?php
                        }else{
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>usercontroller/order_page">
                                    <div style='height:20px;width:20px;position:absolute;top:20px;right:180px;border:1px solid #ff512f;border-radius:50%;background:#ff512f;color:white;font-weight:bold;text-align:center;font-size:10px;vertical-align:center'>
                                        <span style="position:relative;top:-5px;left:1px;font-weight:bold">0</span>
                                    </div>
                                <i class="ri-shopping-cart-line lead"></i>
                                </a>
                            </li>
                            <?php
                        }
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>usercontroller/order_page">
                                <i class="ri-shopping-cart-line lead"></i>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <?php
                         if(isset( $_SESSION['user_id'])){
                            if($user_data[0]['user_image']){
                        ?>
                        <a href="<?= base_url() ?>usercontroller/view_profile/<?= $_SESSION['user_id'] ?>" title="View Profile">
                            <img src="<?= base_url() ?>public/upload/user_image/<?= $user_data[0]['user_image'] ?>" alt="" style="height:50px;width:50px;object-fit:cover;border-radius:50%">
                        </a>
                        <?php
                        }else{
                        ?>
                           <!-- <li class="nav-item"> -->
                           <!-- <a href="<?= base_url() ?>usercontroller/logout_account/<?= $_SESSION['user_id']?>" class="nav-link">
                           <button onclick="return confirm('Are You Sure To Logput From Your Account?')">
                               <i class="ri-logout-circle-r-line text-white lead"></i>
                           </button>
                            </a> -->
                           <!-- </li> -->

                           <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>usercontroller/view_profile/<?= $_SESSION['user_id'] ?>"><i class="ri-user-line lead"></i></a>
                          </li>
                        <?php
                        }
                         }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>usercontroller/userprofile"><i class="ri-user-line lead"></i></a>
                        </li>
                        
                        <?php
                         }
                        ?>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>