<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/banner_image/about.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90 text-center">
                    <h5 style="color:#ff512f "><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <?php
           if(count($about_info)>0){
            ?>
             <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp"> 
                    <span>
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    </span>
                    <div class="section-subtitle"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title"><?= $about_info[0]['about_title'] ?></div>
                    <p><?= nl2br($about_info[0]['about_description']) ?></p>
                    
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:<?= $basic_info[0]['hotel_reservation_number'] ?>">+91 <?= $basic_info[0]['hotel_reservation_number'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> 
                    <img src="<?= base_url() ?>public/upload/about_image/<?= $about_info[0]['about_first_image'] ?>" alt="" class="mt-90 mb-30" style="height:300px;width:100%">
                 </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="<?= base_url() ?>public/upload/about_image/<?= $about_info[0]['about_second_image'] ?>" style="height:300px;width:100%" alt=""> </div>
            </div>
            <?php

           }else{
            ?>
             <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp"> 
                    <span>
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    </span>
                    <div class="section-subtitle"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title">Enjoy a Luxury Experience</div>
                    <p>Welcome to the best five-star deluxe hotel in New York. Hotel elementum sesue the aucan vestibulum aliquam justo in sapien rutrum volutpat. Donec in quis the pellentesque velit. Donec id velit ac arcu posuere blane.</p>
                    <p>Hotel ut nisl quam nestibulum ac quam nec odio elementum sceisue the aucan ligula. Orci varius natoque penatibus et magnis dis parturient monte nascete ridiculus mus nellentesque habitant morbine.</p>
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:<?= $basic_info[0]['hotel_reservation_number'] ?>">+91 <?= $basic_info[0]['hotel_reservation_number'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="<?= base_url() ?>/public/user_assets/img/rooms/8.jpg" alt="" class="mt-90 mb-30"> </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="<?= base_url() ?>/public/user_assets/img/rooms/2.jpg" alt=""> </div>
            </div>
            <?php
           } 
            ?>
           
        </div>
    </section>
   
    <!-- Pricing -->
    <section class="pricing section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                <?php
                if(count($extra_service)>0){
                ?>
                <div class="section-title"><span><?= $extra_service[0]['extra_service_title'] ?></span></div>
                    <p class="color-2"><?= nl2br($extra_service[0]['extra_service_desc']) ?></p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:<?= $basic_info[0]['hotel_reservation_number'] ?>">+91 <?= $basic_info[0]['hotel_reservation_number'] ?></a>
                        </div>
                    </div>
                <?php
                }else{
                ?>
                <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:<?= $basic_info[0]['hotel_reservation_number'] ?>">+91 <?= $basic_info[0]['hotel_reservation_number'] ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <?php
                        if(count($extra_service_slider)>0){
                            foreach($extra_service_slider as $key=>$row){
                                ?>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>" alt="">
                            <div class="desc">
                                <div class="name"><?= $row['extra_service_title'] ?></div>
                                <div class="amount"><?= number_format($row['extra_service_Price']) ?> &#8377;<span> <?= $row['extra_service_avilable'] ?></span></div>
                                <p class="text-white text-wrap text-truncate" style="height:20vh">
                                    <?= nl2br($row['extra_service_desc']) ?>
                                </p>
                            </div>
                        </div>
                                <?php
                            }

                        }else{
                            ?>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>/public/user_assets/img/pricing/1.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">$50<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>/public/user_assets/img/pricing/2.jpg" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>/public/user_assets/img/pricing/3.jpg" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">$30<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>/public/user_assets/img/pricing/4.jpg" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">$15<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:-90px">
                <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle" style="color:#ff512f"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title">Special Maharashtrian Food</div>
                    <div style="height:1px;width:70%;margin:30px auto;background:linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59))"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <?php
                    if(count($food_spe)>0){
                        foreach($food_spe as $key=>$row){
                            ?>
                    <div class="item shadow">
                        <div class="img">
                             <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="" style='height:200px;width:100%;object-fit:cover'> 
                        </div>
                        <div class="info" style=''>
                            <small><b style="text-align:right !important"><?= $row['off_price'] ?></b></small>
                            <h6><?= $row['food_name'] ?>
                            <?php
                            if(isset($_SESSION['user_id'])){
                                if(count($add_to_cart)>0){
                                    for($i=0;$i<count($add_to_cart);$i++){
                                        if($add_to_cart[$i]['product_id']==$row['food_id']){
                                            ?>
                                            <i class="ri-heart-fill lead text-danger"></i>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                            </h6>
                            <p><?= number_format($row['food_price']) ?> &#8377;</p>
                            <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>">
                            <button class="btn-hover color-2">Details</button>
                            </a>
                           
                        </div>
                    </div>
                            <?php
                        }
                    }else{
                        ?>
                          <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/4.jpg" alt=""> </div>
                        <div class="info" style=''>
                            <h6>Valentina Karla</h6>
                            <p>General Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>valentina@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> 
                        <img src="<?= base_url() ?>/public/user_assets/img/team/1.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Micheal White</h6>
                            <p>Guest Service Department</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a> 
                                    <a href="#"><i class="ti-facebook"></i></a> 
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>micheal@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/2.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Olivia Martin</h6>
                            <p>Reservations Manager</p>
                            <div class="social valign">
                                <div class="social valign">
                                    <div class="full-width"> 
                                       <a href="#"><i class="ti-instagram"></i></a> 
                                       <a href="#"><i class="ti-twitter"></i></a> 
                                       <a href="#"><i class="ti-facebook"></i></a> 
                                       <a href="#"><i class="ti-pinterest"></i></a>
                                       <p>olivia@hotel.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/5.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Mariana Dana</h6>
                            <p>F&B Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>mariana@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/3.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Enrico Brown</h6>
                            <p>Head Chef</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>enrico@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/6.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Victoria Dan</h6>
                            <p>Meetings and Events Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>victoria@hotel.com</p>
                                </div>
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
     <!-- Services -->
     <section class="services section-padding" style="margin-top:-200px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle" style="color:#f28744">Our Facility</div>
                    <div class="section-title">Metting & Halls</div>
                    <br>
                </div>
            </div>
            <?php
            if(count($metting_hall)>0){
                foreach($metting_hall as $key=>$row){
                    if($key%2==0){
                        ?>
                        <div class="row">
                            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                                <div class="img left">
                                    <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>"><img src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>"  style="height:100%;width:600px;object-fit:cover" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                                <div class="content">
                                    <div class="cont text-left">
                                        <div class="info">
                                            <h6><?= $row['hall_subtitle'] ?></h6>
                                        </div>
                                        <h4><?= $row['hall_title'] ?></h4>
                                        <p><?= $row['hall_info'] ?></p>
                                        <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>" class="btn-effect"><span>Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }else{
                        ?>
                    <div class="row">
                        <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                            <div class="content">
                                <div class="cont text-left">
                                    <div class="info">
                                        <h6><?= $row['hall_subtitle'] ?></h6>
                                    </div>
                                    <h4><?= $row['hall_title'] ?></h4>
                                    <p><?= $row['hall_info'] ?>.</p>
                                    <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>" class="btn-effect"><span>Details</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                            <div class="img">
                                <a href="<?= base_url() ?>usercontroller/metting_hall_details/<?= $row['mt_id'] ?>"><img src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>" style="height:50vh;width:600px;object-fit:cover" alt=""></a>
                            </div>
                        </div>
                    </div>
                        <?php

                    }
                }
            }else{
                ?>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="restaurant.html"><img src="<?= base_url() ?>/public/user_assets/img/restaurant/1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                            <!-- <div class="butn-dark"> <a href="restaurant.html"><span>Learn More</span></a> </div> -->
                            <a href="#" class="btn-effect"><span>Details</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Spa Center</h4>
                            <p>Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellness.html"><img src="img/spa/3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="spa-wellness.html"><img src="img/spa/2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Fitness Center</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>The Health Club & Pool</h4>
                            <p>The health club & pool at elit finibus viverra nec a lacus themo the nesudea seneoice misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="spa-wellness.html"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="spa-wellness.html"><img src="img/spa/1.jpg" alt=""></a>
                    </div>
                </div>
            </div>
                <?php
            }
            ?>

        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:-90px">
                <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle">Professionals</div>
                    <div class="section-title">Meet The Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <?php
                    if(count($team)>0){
                        foreach($team as $key=>$row){
                            ?>
                            <div class="item">
                                <div class="img"> <img src="<?= base_url() ?>public/upload/team_image/<?= $row['member_img'] ?>" alt="" style="height:300px;width:100%;object-fit:cover"> </div>
                                <div class="info">
                                    <h6><?= $row['member_name'] ?></h6>
                                    <p><?= $row['member_desig'] ?></p>
                                    <p>(<?= $row['member_edu'] ?>)</p>
                                    <!-- <div class="social valign">
                                        <div class="full-width"> 
                                        <a href="#"><i class="ti-instagram"></i></a> 
                                        <a href="#"><i class="ti-twitter"></i></a> 
                                        <a href="#"><i class="ti-facebook"></i></a> 
                                        <a href="#"><i class="ti-pinterest"></i></a>
                                        <p>valentina@hotel.com</p>
                                        </div>
                                    </div> -->
                                </div>
                             </div>
                            <?php
                        }

                    }else{
                        ?>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/4.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Valentina Karla</h6>
                            <p>General Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>valentina@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> 
                        <img src="<?= base_url() ?>/public/user_assets/img/team/1.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Micheal White</h6>
                            <p>Guest Service Department</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a> 
                                    <a href="#"><i class="ti-facebook"></i></a> 
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <p>micheal@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/2.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Olivia Martin</h6>
                            <p>Reservations Manager</p>
                            <div class="social valign">
                                <div class="social valign">
                                    <div class="full-width"> 
                                       <a href="#"><i class="ti-instagram"></i></a> 
                                       <a href="#"><i class="ti-twitter"></i></a> 
                                       <a href="#"><i class="ti-facebook"></i></a> 
                                       <a href="#"><i class="ti-pinterest"></i></a>
                                       <p>olivia@hotel.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/5.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Mariana Dana</h6>
                            <p>F&B Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>mariana@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/3.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Enrico Brown</h6>
                            <p>Head Chef</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>enrico@hotel.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>/public/user_assets/img/team/6.jpg" alt=""> </div>
                        <div class="info">
                            <h6>Victoria Dan</h6>
                            <p>Meetings and Events Manager</p>
                            <div class="social valign">
                                <div class="full-width"> 
                                   <a href="#"><i class="ti-instagram"></i></a> 
                                   <a href="#"><i class="ti-twitter"></i></a> 
                                   <a href="#"><i class="ti-facebook"></i></a> 
                                   <a href="#"><i class="ti-pinterest"></i></a>
                                   <p>victoria@hotel.com</p>
                                </div>
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
   <!-- Testiominals -->
   <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="<?= base_url() ?>public/upload/test_back_img/<?= $test_back_image[0]['test_back_image'] ?>" data-overlay-dark="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" style="margin-top:-90px">
                        <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                        <h3>Testimonials</h3>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-box">
                            <div class="head-box">
                                <h4>What Client's Say?</h4>
                                <div class="line"></div>
                            </div>
                            <div class="owl-carousel owl-theme">
                                <?php
                                if(count($test_data)>0){
                                    foreach($test_data as $key=>$row){
                                        ?>
                                <div class="item">
                                    <p><?= $row['test_desc'] ?>/p>
                                    <div class="info">
                                        <div class="author-img">
                                            <img src="<?= base_url() ?>public/upload/testimonial_image/<?= $row['test_image'] ?>" alt="">
                                        </div>
                                        
                                        <div class="cont"> 
                                            <?php
                                            if($row['test_rating']<=5){
                                                for($i=0;$i<$row['test_rating'];$i++){
                                            ?>
                                            <i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i>
                                            <?php
                                                }
                                            }else{
                                                ?>
                                                <span>
                                                <i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i><i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i><i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i><i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i><i class="ri-star-fill lead" style="color:#ff5031;font-size:15px"></i>
                                                </span>
                                                <?php
                                            }
                                            ?>
                                            
                                            <h6><?= $row['test_name'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                                        <?php
                                    }

                                }else{
                                    ?>
                                <div class="item">
                                    <span class="quote"><img src="<?= base_url() ?>/public/user_assets/img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?= base_url() ?>/public/user_assets/img/team/4.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Emily Brown</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="<?= base_url() ?>/public/user_assets/img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?= base_url() ?>/public/user_assets/img/team/1.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Nolan White</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="quote"><img src="<?= base_url() ?>/public/user_assets/img/quot.png" alt=""></span>
                                    <p>Hotel dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante otel inilla duiman at finibus viverra neca the sene on satien the miss drana inc fermen norttito sit space, mus nellentesque habitan.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="<?= base_url() ?>/public/user_assets/img/team/5.jpg" alt=""> </div>
                                        <div class="cont"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                                            <h6>Olivia Martin</h6> <span>Guest review</span>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>