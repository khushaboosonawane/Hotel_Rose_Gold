<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
.buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-2 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}





</style>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/banner_image/food_wine.jpeg" style="background-position:center">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90 text-center">
				    
					<h5><?= $basic_info[0]['hotel_name'] ?></h5>
					<h1>Foods & Wines</h1>
				</div>
			</div>
        </div>
    </div>
   
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
     <!-- Team -->
     <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="margin-top:-100px">
                <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    <div class="section-subtitle" style="color:#ff512f"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title">Special Wines</div>
                    <div style="height:1px;width:50%;margin:30px auto;background:linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59))"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <?php
                    if(count($wine_spe)>0){
                        foreach($wine_spe as $key=>$row){
                            ?>
                    <div class="item" style="box-shadow:0 0 20px rgba(255,80,49,0.3)">
                        <div class="img">
                             <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="" style='height:200px;width:100%;object-fit:cover'> 
                        </div>
                        <div class="info" style=''>
                            <small><b style="text-align:right !important"><?= $row['off_price'] ?></b></small>
                            <h6><?= $row['food_name'] ?></h6>
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
                            <p><?= number_format($row['food_price']) ?> &#8377;</p>
                            <span>
                                <?php
                                if($row['food_rating']<=5){
                                    for($i=0;$i<$row['food_rating'];$i++){
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
   <style>
    .rooms1 .item .con{
        background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2),rgba(255,80,49));
    }
   </style>
    <section class="rooms1 section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <?php
                if(count($food)>0){
                    foreach($food as $key=>$row){
                     ?>
                <div class="col-md-4">
                    <div class="item">
                        <div class="position-re o-hidden"> 
                            <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" style="height:300px;width:100%" alt=""> 
                        </div> 
                        
                        <div class="con">
                            <h6>
                                <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>"><?= number_format($row['food_price']) ?> &#8377; </a>
                            </h6>
                            <h5>
                                <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>"><?= $row['food_name'] ?></a> <br>
                                <small style="font-size:15px;font-weight:bold"><?= $row['off_price'] ?></small>
                                <br>
                                <span>
                                    <?php
                                    if($row['food_rating']<=5){
                                        for($i=0;$i<$row['food_rating'];$i++){
                                            ?>
                                            <i class="ri-star-s-fill"></i>

                                            <?php
                                        }

                                    }else{
                                        ?>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <?php
                                    }
                                    ?>
                                </span>
                            </h5>
                            <div class="line"></div>
                            <div class="row facilities">
                                <div class="col col-md-12 text-center">
                                    <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>" >
                                    <button class="btn-hover color-2" style="position:relative;top:34px">View Details</button>
                                    </a>
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
                            <h6>
                                <a href=""><i class="ri-heart-line" style="font-size:28px;"></i></a>
                                <a href="room-details.html">150$ / Night</a>
                            </h6>
                            <h5>
                                <a href="room-details.html">Junior Suite</a>
                            </h5>
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
    