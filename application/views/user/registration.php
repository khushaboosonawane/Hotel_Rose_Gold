<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="<?= base_url() ?>public/user_assets/img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>User Registration</h1>
                </div>
            </div>
        </div>
    </div>

<!-- popup design  -->

<!-- popup end  -->

     <!-- Contact -->
     <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90 d-flex justify-content-center">
                <div class="col-md-10 mb-30 offset-md-1 shadow p-5">
                    <h3>Create An Account</h3>
                    <form method="post"  action="<?= base_url() ?>usercontroller/save_user_data" enctype="multipart/form-data">
                        <!-- form message -->
                        <?php
                        if(isset($_SESSION['save_user_data'])){
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" role="alert" id="data1"> <?= $_SESSION['save_user_data'] ?></div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                setTimeout(function(){
                                    $("#data1").fadeOut(5000);
                                },2000)
                            })
                        
                        </script>
                        <?php
                        unset($_SESSION['save_user_data']);
                        ?>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="user_name" type="text" placeholder="Your Name *" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="user_email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_mobile" type="number" class="form-control" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_password" type="password" placeholder="password *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_image" type="file" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Create Account</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            
        </div>
    </section> 