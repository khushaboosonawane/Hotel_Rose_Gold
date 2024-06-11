<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/banner_image/rooms.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90 text-center">
					<h5 style=" color: #e02870;"><?= $basic_info[0]['hotel_name'] ?></h5>
					<h1>Rooms & Suites</h1>
				</div>
			</div>
        </div>
    </div>
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5 text-center">
                    <h1>Special Offer Rooms</h1>
                </div>
                <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php
                    if(count($offer_rooms_data)>0){
                        foreach($offer_rooms_data as $key=>$row){
                            ?>
                            <div class="clients-logo">
                                <div class="item">
                                    <div class="position-re o-hidden"> 
                                        <img src="<?= base_url() ?>public/upload/rooms_image/<?=  $row['room_image'] ?>" style="height:380px;width:100%" alt=""> 
                                    </div> 
                                    <span class="category">
                                        <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>" class="btn-effect" style="padding:15px 9px !important"><span>Details</span></a>
                                    </span>
                                    <div class="con">
                                        <h6><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= number_format($row['room_price']) ?> &#8377; / Day & Night</a></h6>
                                        <h5><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= $row['room_name'] ?></a> </h5>
                                        <div class="line"></div>
                                    </div>
                                </div>
                             </div>
                            <?php
                        }
                    }else{
                        ?>
                    <div class="clients-logo">
                        <div class="item">
                            <div class="position-re o-hidden"> 
                                <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> 
                            </div> 
                            <span class="category">
                                <!-- <a href="rooms2.html">Book</a> -->
                                <a href="#" class="btn-effect"><span>Available</span></a>
                            </span>
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
                    <div class="clients-logo">
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
                    <div class="clients-logo">
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
                    <div class="clients-logo">
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
                    <div class="clients-logo">
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
                    <div class="clients-logo">
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
                        <?php
                    }
                    ?>
                   
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rooms1 section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center my-5">
                    <div class="section-subtitle"><span style="color:#ff5031"><?= $basic_info[0]['hotel_name'] ?></span></div>
                    <div class="section-title"><span class="text-dark">Ac Rooms</span></div>
                    <div style="margin:0 auto;height:2px;width:50%;background:black;border-radius:50%;"></div>
                </div>
                <?php
                if(count($ac_rooms)>0){
                    foreach($ac_rooms as $key=>$row){
                        ?>
                         <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> 
                                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="" style="height:400px;width:100%;object-fit:cover;"> 
                                </div> 
                                    <span class="category" style="border:none !important;">
                                        <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>" class="btn-effect" style="padding:15px 9px !important"><span>Details</span></a>
                                    </span>
                                <div class="con">
                                    <h6><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= number_format($row['room_price']) ?> &#8377; / Night</a></h6>
                                    <h5><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= $row['room_name'] ?></a> </h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col col-md-7">
                                            <ul>
                                                <li><i class="flaticon-bed"></i></li>
                                                <li><i class="flaticon-bath"></i></li>
                                                <?php
                                                if($row['room_breakfast']=='Available'){
                                                    ?>
                                                     <li><i class="flaticon-breakfast"></i></li>
                                                    <?php
                                                }
                                                ?>
                                               
                                                <li><i class="flaticon-towel"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col col-md-5 text-end">
                                            <div class="permalink">
                                                <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>">Details <i class="ti-arrow-right"></i></a>
                                            </div>
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
                        <div class="position-re o-hidden"> 
                            <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> 
                        </div> 
                        <span class="category" ><a href="rooms2.html" >Book</a></span>
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
                                    <div class="permalink">
                                        <a href="room-details.html">Details <i class="ti-arrow-right"></i></a>
                                    </div>
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
    </section>
    <section class="rooms1 section-padding" style="margin-top:-200px" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle"><span style="color:#ff5031"><?= $basic_info[0]['hotel_name'] ?></span></div>
                    <div class="section-title"><span class="text-dark">Non Ac Rooms</span></div>
                    <div style="margin:20px auto;height:2px;width:50%;background:black;border-radius:50%;"></div>
                </div>
                <?php
                if(count($non_ac_rooms)>0){
                    foreach($non_ac_rooms as $key=>$row){
                        ?>
                         <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> 
                                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="" style="height:400px;width:100%;object-fit:cover;"> 
                                </div> 
                                    <span class="category" style="border:none !important;">
                                        <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>" class="btn-effect" style="padding:15px 9px !important"><span>Details</span></a>
                                    </span>
                                <div class="con">
                                    <h6><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= number_format($row['room_price']) ?> &#8377; / Night</a></h6>
                                    <h5><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= $row['room_name'] ?></a> </h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col col-md-7">
                                            <ul>
                                                <li><i class="flaticon-bed"></i></li>
                                                <li><i class="flaticon-bath"></i></li>
                                                <?php
                                                if($row['room_breakfast']=='Available'){
                                                    ?>
                                                     <li><i class="flaticon-breakfast"></i></li>
                                                    <?php
                                                }
                                                ?>
                                               
                                                <li><i class="flaticon-towel"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col col-md-5 text-end">
                                            <div class="permalink">
                                                <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>">Details <i class="ti-arrow-right"></i></a>
                                            </div>
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
                        <div class="position-re o-hidden"> 
                            <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> 
                        </div> 
                        <span class="category" ><a href="rooms2.html" >Book</a></span>
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
                                    <div class="permalink">
                                        <a href="room-details.html">Details <i class="ti-arrow-right"></i></a>
                                    </div>
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
    </section>
    <section class="rooms1 section-padding" style="margin-top:-200px" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle"><span style="color:#ff5031"><?= $basic_info[0]['hotel_name'] ?></span></div>
                    <div class="section-title"><span class="text-dark">Other Rooms</span></div>
                    <div style="margin:20px auto;height:2px;width:50%;background:black;border-radius:50%;"></div>
                </div>
                <?php
                if(count($other_room)>0){
                    foreach($other_room as $key=>$row){
                        ?>
                         <div class="col-md-4">
                            <div class="item">
                                <div class="position-re o-hidden"> 
                                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="" style="height:400px;width:100%;object-fit:cover;"> 
                                </div> 
                                    <span class="category" style="border:none !important;">
                                        <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>" class="btn-effect" style="padding:15px 9px !important"><span>Details</span></a>
                                    </span>
                                <div class="con">
                                    <h6><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= number_format($row['room_price']) ?> &#8377; / Night</a></h6>
                                    <h5><a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>"><?= $row['room_name'] ?></a> </h5>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col col-md-7">
                                            <ul>
                                                <li><i class="flaticon-bed"></i></li>
                                                <li><i class="flaticon-bath"></i></li>
                                                <?php
                                                if($row['room_breakfast']=='Available'){
                                                    ?>
                                                     <li><i class="flaticon-breakfast"></i></li>
                                                    <?php
                                                }
                                                ?>
                                               
                                                <li><i class="flaticon-towel"></i></li>
                                            </ul>
                                        </div>
                                        <div class="col col-md-5 text-end">
                                            <div class="permalink">
                                                <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>">Details <i class="ti-arrow-right"></i></a>
                                            </div>
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
                        <div class="position-re o-hidden"> 
                            <img src="<?= base_url() ?>public/user_assets/img/rooms/1.jpg" alt=""> 
                        </div> 
                        <span class="category" ><a href="rooms2.html" >Book</a></span>
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
                                    <div class="permalink">
                                        <a href="room-details.html">Details <i class="ti-arrow-right"></i></a>
                                    </div>
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
    </section>
    <!-- Pricing -->
    <!-- Pricing -->
    <section class="pricing section-padding bg-dark">
        <div class="container">
            <div class="row">
                <?php
                if(count($extra_service)>0){
                    ?>
                    <div class="col-md-12 text-center mb-5" style="margin-top:-90px">
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle" ><span style="color:#ff5031"><?= $extra_service[0]['extra_service_subtitle'] ?></span></div>
                    <div class="section-title" ><span style="color:black"><?= $extra_service[0]['extra_service_title'] ?></span></div>
                    <div style="width:50%;margin:10px auto;background-color:black;height:1px"></div>
                </div>
                    <?php

                }else{
                    ?>
                <div class="col-md-12 text-center mb-5" style="margin-top:-90px">
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle" ><span style="color:#ff5031">Best Prices</span></div>
                    <div class="section-title" ><span style="color:black">Extra Services</span></div>
                    <div style="width:50%;margin:10px auto;background-color:black;height:1px"></div>
                </div>
                    <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                    if(count($extra_service)>0){
                        ?>
                        <p class="color-2"><?= nl2br($extra_service[0]['extra_service_desc']) ?></p>
                        <?php

                    }else{
                        ?>
                        <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney parturient monte nascete ridiculus mus nellen etesque habitant morbine.</p>
                        <?php
                    }
                    ?>
                    <div class="reservations mb-30">
                    <div class="icon"><i class="ri-phone-line lead" style="font-size:40px;color:#ff5031"></i></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:<?= $basic_info[0]['hotel_mobile'] ?>">+91 <?= $basic_info[0]['hotel_mobile'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <?php
                        if(count($extra_service_slider)>0){
                            foreach($extra_service_slider as $key=>$row){
                        ?>
                        <div class="pricing-card">
                            <img src="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>" style='height:35vh;width:100%;object-fit:cover' alt="">
                            <div class="desc">
                                <div class="name"><?= $row['extra_service_title'] ?></div>
                                <div class="amount"><?= number_format($row['extra_service_Price']) ?> &#8377;<span> &nbsp; <?= $row['extra_service_avilable'] ?></span></div>
                                <div style='width:100%;height:10vh' class="text-truncate">
                                <?= $row['extra_service_desc'] ?>
                                </div>
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
  