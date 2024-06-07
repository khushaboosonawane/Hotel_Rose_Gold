<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<!-- Room Page Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <?php
            if(count($special_rooms)>0){
                foreach($special_rooms as $row){
            ?>
            <div class="text-center item bg-img" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>"></div>
            <?php
                }
            }else{
            ?>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/slider/3.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/slider/2.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/slider/5.jpg"></div>
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
                    <span>
                        <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    </span>
                    <div class="section-subtitle"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title"><?= nl2br($room_details[0]['room_name']) ?></div>
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($add_to_cart_data)>0){
                          ?>
                          <a href="<?= base_url() ?>usercontroller/remove_product_form_cart/<?=$room_details[0]['room_id']?>">
                                <i class="ri-heart-fill text-danger lead"></i>
                            </a>
                          <?php
                        }else{
                            ?>
                             <h6>
                                <a href="<?= base_url() ?>usercontroller/add_to_cart/<?= $room_details[0]['room_id'] ?>">
                                    <i class="ri-heart-line lead"></i>
                                </a>
                            </h6>
                            <?php
                        }
                    }else{
                    ?>
                        <h6>
                            <a href="<?= base_url() ?>usercontroller/userprofile">
                                <i class="ri-heart-line lead"></i>
                            </a>
                        </h6>
                    <?php
                    }
                    ?>
                    
                    <!-- <h4><i class="ri-heart-fill"></i></h4> -->
                </div>
                <div class="col-md-8">
                    <p class="mb-30"><?= nl2br($room_details[0]['room_desc']) ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Check-in</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-in from 9:00 AM - anytime</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Early check-in subject to availability</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Check-out</h6>
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Check-out before noon</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-check"></span> </div>
                                    <div class="page-list-text">
                                        <p>Express check-out</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h6>Special check-in instructions</h6>
                            <p>Guests will receive an email 5 days before arrival with check-in instructions; front desk staff will greet guests on arrival For more details, please contact the property using the information on the booking confirmation.</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Pets</h6>
                            <p>Pets not allowed</p>
                        </div>
                        <div class="col-md-12">
                            <h6>Children and extra beds</h6>
                            <p>Children are welcome Kids stay free! Children stay free when using existing bedding; children may not be eligible for complimentary breakfast Rollaway/extra beds are available for $ 10 per day.</p>
                        </div>
                        <div class="col-md-12">
                            <div class="butn-dark mt-15 mb-30"> <a href="rooms2.html"><span>Check Now</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $room_details[0]['room_image'] ?>" style="margin:20px 10px;height:30vh;width:100%;object-fit:cover" alt="">
                    <h6>Amenities</h6>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-group"></span> </div>
                            <div class="page-list-text">
                                <p><?= $room_details[0]['person_count'] ?> Persons</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-wifi"></span> </div>
                            <?php
                            if($room_details[0]['wifi_status']=='Avilable'){
                            ?>
                            <div class="page-list-text">
                                <p>Free Wifi</p>
                            </div>
                            <?php
                            }else{
                            ?>
                            <div class="page-list-text">
                                <p>Not Avilable wifi</p>
                            </div>
                            <?php
                            }
                            ?>
                            
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-clock-1"></span> </div>
                            <div class="page-list-text">
                                <p>200 sqft room</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="flaticon-breakfast"></span> </div>
                            <?php
                            if($room_details[0]['room_breakfast']=='Avilable'){
                            ?>
                            <div class="page-list-text">
                                <p>Breakfast</p>
                            </div>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <?php
                if(count($special_rooms)>0){
                    foreach($special_rooms as $row){
                ?>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="" style="height:70vh;width:100%;object-fit:cover"> </div>

                        <div class="con">
                            <span>
                                <?php
                                if($row['rating']<=5){
                                    for($i=1;$i<=$row['rating'];$i++){
                                ?>
                                <i class="ri-star-fill lead text-white" style="color:white  !important"></i>
                                <?php
                                    }
                                }else{
                                ?>
                                <i class="ri-star-fill lead" style="color:white !important"></i>
                                <i class="ri-star-fill lead" style="color:white !important"></i>
                                <i class="ri-star-fill lead" style="color:white !important"></i>
                                <i class="ri-star-fill lead" style="color:white !important"></i>
                                <i class="ri-star-fill lead" style="color:white !important"></i>
                                <?php
                                }
                                ?>
                            </span>
                            <br>
                            <h6><a href="room-details.html"><?= number_format($row['room_price']) ?> &#8377; / Night</a></h6>
                            <h5><?= $row['room_name'] ?></h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-7">
                                    <ul>
                                        <li><i class="flaticon-bed"></i></li>
                                        <li><i class="flaticon-bath"></i></li>
                                        <?php
                                        if($row['room_breakfast']=='Avilable'){
                                        ?>
                                        <li><i class="flaticon-breakfast"></i></li>
                                        <?php
                                        }
                                        ?>
                                        <li><i class="flaticon-towel"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }else{
                ?>
                 <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
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
                </div>
                <div class="col-md-4">
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
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/3.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
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
                </div>
                <?php
                }
                ?>
                <div class="row">
                    <?php
                    $data=$this->db->query("select * from category,sub_category,rooms where rooms.cat_id=category.cat_id and rooms.sub_cat_id=sub_category.sub_cat_id limit 2")->result_array();
                    if(count($data)>0){
                        foreach($data as $row){
                    ?>
                     <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" style="height:50vh;object-fit:cover" alt=""> </div> 
                            <div class="con">
                                <span>
                                    <?php
                                    if($row['rating']<=5){
                                        for($i=0;$i<$row['rating'];$i++){
                                    ?>
                                    <i class="ri-star-line" style="color:white"></i>
                                    <?php
                                        }
                                    }else{
                                    ?>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>
                                    <i class="ri-star-line"></i>

                                    <?php
                                    }
                                    ?>
                                </span>
                                <br>
                                <h6><?= number_format($row['room_price']) ?>  &#8377;/ Night</h6>
                                <h5><?= $row['room_name'] ?></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-7">
                                        <ul>
                                            <li><i class="flaticon-bed"></i></li>
                                            <li><i class="flaticon-bath"></i></li>
                                            <?php
                                            if($row['room_breakfast']=='Avilable'){
                                            ?>
                                            <li><i class="flaticon-breakfast"></i></li>
                                            <?php
                                            }
                                            ?>
                                            <li><i class="flaticon-towel"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }else{
                        ?>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/4.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
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
                        </div>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/rooms/7.jpg" alt=""> </div> <span class="category"><a href="rooms2.html">Book</a></span>
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
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>