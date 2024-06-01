<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>The Cappa Luxury Hotel</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/public/user_assets/img/favicon.png" />
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
                <a class="logo" href="index.html"> <img src="<?= base_url() ?>/public/user_assets/img/logo.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>THE CAPPA <span>Luxury Hotel</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Home <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html" class="dropdown-item"><span>Home Layout 1</span></a></li>
                            <li><a href="index2.html" class="dropdown-item"><span>Home Layout 2</span></a></li>
                            <li><a href="index3.html" class="dropdown-item active"><span>Home Layout 3</span></a></li>
                            <li><a href="index4.html" class="dropdown-item"><span>Home Layout 4</span></a></li>
                            <li><a href="index5.html" class="dropdown-item"><span>Video 1</span></a></li>
                            <li><a href="index6.html" class="dropdown-item"><span>Video 2</span></a></li>
                            <li><a href="index7.html" class="dropdown-item"><span>Video 3</span></a></li>
                            <li><a href="index8.html" class="dropdown-item"><span>Slideshow 1</span></a></li>
                            <li><a href="index9.html" class="dropdown-item"><span>Slideshow 2</span></a></li>
                            <li><a href="index10.html" class="dropdown-item"><span>Slideshow 3</span></a></li>
                            <li><a href="index11.html" class="dropdown-item"><span>Parallax Image 1</span></a></li>
                            <li><a href="index12.html" class="dropdown-item"><span>Parallax Image 2</span></a></li>
                            <li><a href="index13.html" class="dropdown-item"><span>Parallax Image 3</span></a></li>
                            <li><a href="index14.html" class="dropdown-item"><span>Grid Background 1</span></a></li>
                            <li><a href="index15.html" class="dropdown-item"><span>Grid Background 2</span></a></li>
                        </ul>     
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Rooms & Suites <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="rooms.html" class="dropdown-item"><span>Rooms 1</span></a></li>
                            <li><a href="rooms2.html" class="dropdown-item"><span>Rooms 2</span></a></li>
                            <li><a href="rooms3.html" class="dropdown-item"><span>Rooms 3</span></a></li>
                            <li><a href="room-details.html" class="dropdown-item"><span>Room Details</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="restaurant.html">Restaurant</a></li>
                    <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="services.html" class="dropdown-item"><span>Services</span></a></li>
                            <li><a href="facilities.html" class="dropdown-item"><span>Facilities</span></a></li>
                            <li><a href="gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                            <li><a href="careers.html" class="dropdown-item"><span>Careers</span></a></li>
                            <li><a href="faq.html" class="dropdown-item"><span>F.A.Qs</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                    <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">News <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.html" class="dropdown-item"><span>News 1</span></a></li>
                            <li><a href="news2.html" class="dropdown-item"><span>News 2</span></a></li>
                            <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"><i class="ri-user-line lead"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"><i class="ri-search-2-line lead"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>