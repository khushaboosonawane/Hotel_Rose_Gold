<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<!-- Room Page Slider -->
<header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
             <?php
             if(count($metting_hall)>0){
                foreach($metting_hall as $key=>$row){
                    ?>
                     <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>"></div>
                    <?php
                }

             }else{
                ?>
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>/public/user_assets/img/slider/3.jpg"></div>
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>/public/user_assets/img/slider/2.jpg"></div>
                <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>/public/user_assets/img/slider/5.jpg"></div>
                <?php
             }
             ?>
           
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Room Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12">
                    <?php
                    if($hall_details[0]['hall_rating']<=5){
                        for($i=0;$i<$hall_details[0]['hall_rating'];$i++){
                          ?>
                          <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                          <?php
                        }
                    }else{
                        ?>
                        <span>
                        <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                        <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                        <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                        <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                        <i class="ri-star-fill " style="font-size:20px;color:#ff5031!important"></i>
                        </span>
                        <?php
                    }
                    ?> 
                    
                    <div class="section-subtitle"><?= $hall_details[0]['hall_subtitle'] ?></div>
                    <div class="section-title"><?= $hall_details[0]['hall_title'] ?></div>
                    <h3><?= number_format($hall_details[0]['hall_price']) ?> &#8377;</h3>
                </div>
                <div class="col-md-8">
                    <p class="mb-30"><?= $hall_details[0]['hall_info'] ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                               <li>
                                <?= nl2br($hall_details[0]['checkin_details']) ?>
                               </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <?= nl2br($hall_details[0]['checkout_details']) ?>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h6>Special check-in instructions</h6>
                            <p><?= $hall_details[0]['special_checkin_ins'] ?></p>
                        </div>
                        <div class="col-md-12">
                            <?php
                            if(isset($_SESSION['user_id'])){
                                ?>
                                <?php
                                if(count($hall_book_status)>0){
                                    if($hall_book_status[0]['mt_id']==$hall_details[0]['mt_id']){
                                        ?>
                                        <button class="btn btn-primary">Alerady Book</button>
                                        <?php
                                    }else{
                                        ?>
                                    <div class="butn-dark mt-15 mb-30">
                                        <a href="<?= base_url() ?>usercontroller/book_now/<?= $hall_details[0]['mt_id'] ?>"><span>Check Now</span></a>
                                    </div>
                                        <?php
                                    }
                                }else{
                                    ?>
                                     <div class="butn-dark mt-15 mb-30">
                                        <a href="<?= base_url() ?>usercontroller/book_now/<?= $hall_details[0]['mt_id'] ?>"><span>Check Now</span></a>
                                    </div>
                                    <?php
                                }
                                ?>
                               
                                <?php
                            }else{
                                ?>
                                <?php
                                if(count($hall_book_status)>0){
                                   if($hall_book_status[0]['mt_id']==$hall_details[0]['mt_id']){
                                    ?>
                                    <button class="btn btn-primary">Already Booked</button>
                                    <?php
                                   }
                                }else{
                                    ?>
                                     <div class="butn-dark mt-15 mb-30">
                                        <a href="<?= base_url() ?>usercontroller/registration"><span>Check Now</span></a>
                                    </div>
                                    <?php
                                }
                                ?>
                               
                                <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                            <div class="page-list-text">
                                <p><?= $hall_details[0]['number_person'] ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <div class="page-list-text">
                                <p><?= $hall_details[0]['wifi'] ?></p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p><?= $hall_details[0]['hall_size'] ?> sqft room</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                            <div class="page-list-text">
                                <p><?= $hall_details[0]['breakfast'] ?></p>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Similiar Room -->
    <section class="rooms1 section-padding bg-blck">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span><?= $basic_info[0]['hotel_name'] ?></span></div>
                    <div class="section-title"><span>Halls</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php
                        if(count($metting_hall)>0){
                            foreach($metting_hall as $key=>$row){
                                ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img style="height:400px;width:100%;object-fit:cover" src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>" alt=""> </div>
                            <div class="con">
                                <h6><a href="room-details.html"><?= number_format($row['hall_price']) ?> &#8377;</a></h6>
                                <h5><a href="room-details.html"><?= $row['hall_title'] ?></a> </h5>
                                <div class="line"></div>
                            </div>
                        </div>
                                <?php
                            }

                        }else{
                            ?>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> </div>
                            <div class="con">
                                <h6><a href="room-details.html">150$ / Night</a></h6>
                                <h5><a href="room-details.html">Junior Suite</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/2.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">200$ / Night</a></h6>
                                <h5><a href="room-details.html">Family Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/5.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">250$ / Night</a></h6>
                                <h5><a href="room-details.html">Double Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/6.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">300$ / Night</a></h6>
                                <h5><a href="room-details.html">Deluxe Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/8.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">150$ / Night</a></h6>
                                <h5><a href="room-details.html">Superior Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/5.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
                            <div class="con">
                                <h6><a href="room-details.html">400$ / Night</a></h6>
                                <h5><a href="room-details.html">Wellness Room</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col col-md-5 text-end">
                                        <div class="permalink"><a href="room-details.html">Details <i class="ti-arrow-right"></i></a></div>
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
        </div>
    </section>