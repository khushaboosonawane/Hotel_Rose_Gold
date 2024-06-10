<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/rooms_image/<?= $room_cart_data[0]['room_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                <h1>Cart Page</h1>
            </div>
        </div>
    </div>
</div>
 <!-- Contact -->
 <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3><?= $room_cart_data[0]['room_name'] ?></h3>
                    <p><?= $room_cart_data[0]['room_desc'] ?></p>
                    <span>
                        <?php
                        $room_cart_data[0]['rating'];
                        // echo "<pre>";
                        // print_r($room_cart_data);
                        // exit();
                        for($i=0;$i<$room_cart_data[0]['rating'];$i++){
                            ?>
                            <i class="ri-star-fill"></i>
                            <?php
                        }
                        ?>
                    </span>
                    <ul class="list-group">
                        <li class='list-group-item'>Breakfast : <?= $room_cart_data[0]['room_breakfast'] ?></li>
                        <li class='list-group-item'>wifi : <?= $room_cart_data[0]['wifi_status'] ?></li>
                    </ul>
                </div>
                <div class="col-md-6 mb-60">
                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $room_cart_data[0]['room_image'] ?>" alt="" style="height:100%;width:100%;object-fit:cover">
                </div>
                <div class="col-md-12 mb-30  d-flex justify-content-center">
                    <form method="post" action="<?= base_url() ?>usercontroller/booked">
                        <input type="hidden" name="room_id" value="<?= $room_cart_data[0]['room_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="room_price" value="<?= $room_cart_data[0]['room_price'] ?> &#8377;" readonly type="text" placeholder="Your Name *" required>
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
                            <div class="col-md-12 text-center my-4">
                                <button type="submit" class="butn-dark2"><span>Order</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>