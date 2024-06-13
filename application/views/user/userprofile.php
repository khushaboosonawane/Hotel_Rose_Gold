<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/login_banner.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Hello User !...</h5>
                    <h1>Login To Your Account</h1>
                </div>
            </div>
        </div>
    </div>
     <!-- Contact -->
     <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90 d-flex justify-content-center">
                <div class="col-md-10 mb-30 offset-md-1 shadow p-5">
                    <h3>Login To Your Account</h3>
                    <form method="post" action="<?= base_url() ?>usercontroller/check_user_login">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="user_email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_password" type="password" placeholder="password *" required>
                            </div>
                            <div class="col-md-12 my-3">
                                <a href="<?= base_url() ?>usercontroller/registration">
                                    <small class="text-primary">Not have account? create account..</small>
                                </a>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Login</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            
        </div>
    </section> 