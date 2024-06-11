<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
  <!-- Spa-Wellness Slider -->
  <header class="header slider">
        <div class="owl-carousel owl-theme">
           <?php
           if(count($service)>0){
                foreach($service as $key=>$row){
                    ?>
                    <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>"></div>
                    <?php
                }
           }else{
            ?>
             <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/spa/3.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/spa/1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/spa/2.jpg"></div>
            <?php
           }
           ?>
           
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center my-5">
                    <div class="section-subtitle">
                        <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" alt="" style="height:100px;width:100px"> <br>
                        <span style="color:#ff5031"><?= $basic_info[0]['hotel_name'] ?></span>
                    </div>
                    <div class="section-title"><span class="text-dark">Service</span></div>
                    <div style="margin:0 auto;height:2px;width:50%;background:black;border-radius:50%;"></div>
                </div>
                <div class="col-md-12 my-5">
                    <?php
                    if(count($service)>0){
                        foreach($service as $key=>$row){
                            if($key%2==0){
                                ?>
                                <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                                    <figure><img src="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>" alt="" class="img-fluid " style="height:500px;width:100%"></figure>
                                    <div class="caption shadow p-5">
                                        <h3><?= number_format($row['extra_service_Price']) ?> &#8377; <span>/ <?= $row['extra_service_avilable'] ?></span></h3>
                                        <h4><?= $row['extra_service_title'] ?></h4>
                                        <p><?= $row['extra_service_desc'] ?></p>
                                        <div class="row room-facilities">
                                            <div class="col-md-4">
                                               <span>
                                                <?php
                                                if($row['service_rating']<=5){
                                                    for($i=0;$i<$row['service_rating'];$i++){
                                                        ?>
                                                        <i class="ri-star-fill"></i>
                                                        <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                                    <?php
                                                }
                                                ?>
                                               </span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }else{
                                ?>
                                <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                                    <figure><img src="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>" alt="" class="img-fluid" style="height:500px;width:100%"></figure>
                                    <div class="caption shadow">
                                        <h3><?= number_format($row['extra_service_Price']) ?> &#8377; <span>/ <?= $row['extra_service_avilable'] ?></span></h3>
                                        <h4><?= $row['extra_service_title'] ?></h4>
                                        <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                                        <div class="row room-facilities">
                                            <div class="col-md-4">
                                            <span>
                                                <?php
                                                if($row['service_rating']<=5){
                                                    for($i=0;$i<$row['service_rating'];$i++){
                                                        ?>
                                                        <i class="ri-star-fill"></i>
                                                        <?php
                                                    }
                                                }else{
                                                    ?>
                                                    <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
                                                    <?php
                                                }
                                                ?>
                                               </span>
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }else{
                        ?>
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="<?= base_url() ?>public/user_assets/img/slider/4.jpg" alt="" class="img-fluid"></figure>
                            <div class="caption">
                                <h3>150$ <span>/ Night</span></h3>
                                <h4><a href="room-details.html">Junior Suite</a></h4>
                                <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                                <div class="row room-facilities">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                            <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="flaticon-bed"></i> Twin Bed</li>
                                            <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                            <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="border-2">
                                <div class="info-wrapper">
                                    <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                    <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                                </div>
                            </div>
                    </div>
                    <div class="rooms2 mb-90 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/3.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>200$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Family Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/3.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>250$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Double Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left animate-box" data-animate-effect="fadeInUp">
                        <figure><img src="<?= base_url() ?>public/user_assets/img/slider/2.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption">
                            <h3>300$ <span>/ Night</span></h3>
                            <h4><a href="room-details.html">Deluxe Room</a></h4>
                            <p>Spacious, bright guestrooms with tasteful furnishing, wooden floor and panoramic windows from the ceiling to the floor.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 2-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> Twin Bed</li>
                                        <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 200 sqft Room</li>
                                        <li><i class="flaticon-swimming"></i> Swimming Pool</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">
                                <div class="more"><a href="room-details.html" class="link-btn" tabindex="0">Details <i class="ti-arrow-right"></i></a></div>
                                <div class="butn-dark"> <a href="#" data-scroll-nav="1"><span>Book Now</span></a> </div>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                   
                </div>
            </div>
        </div>
    </section>