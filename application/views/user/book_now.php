<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>Book Now</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-12 mb-60">
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px " alt="">
                    <h3><?= $basic_info[0]['hotel_name'] ?></h3>
                    <p><?= $basic_info[0]['hotel_information'] ?></p>
                    
                </div>
                <div class="col-md-6 mb-30 offset-md-1">
                    <h3>Book <?= $hall_data[0]['hall_title'] ?></h3>
                    <form method="post" action="<?= base_url() ?>usercontroller/book_hall_data">
                        <input type="hidden" name="mt_id" value="<?= $hall_data[0]['mt_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="hall_name" value="<?= $hall_data[0]['hall_title'] ?>" type="text" placeholder="Your Name *" required readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="hall_price" type="number" placeholder="Your Email *" value="<?= $hall_data[0]['hall_price'] ?>" required readonly>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_mobile" type="number" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_email" type="email" placeholder="Your Email *" required>
                            </div>
                            
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Book</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url() ?>public/upload/hall_image/<?= $hall_data[0]['hall_image'] ?>" style="height:100%;width:100%;object-fit:cover" alt="">
                </div>
            </div>
            <!-- Map Section -->
            
        </div>
    </section>