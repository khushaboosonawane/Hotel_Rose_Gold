<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="<?= base_url() ?>public/upload/banner_image/team.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>Meet The Team</h1>
                </div>
            </div>
        </div>
    </div>
     <!-- About -->
     <section class="about section-padding">
        <div class="container">
        <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp"> 
                    <span>
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                    </span>
                    <div class="section-subtitle"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title">Hotel Owner</div>
                    <p><?= $basic_info[0]['hotel_owner_information'] ?></p>
                   
                    <!-- reservation -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:<?= $basic_info[0]['hotel_reservation_number'] ?>">+91 <?= $basic_info[0]['hotel_reservation_number'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 animate-box" data-animate-effect="fadeInUp">
                     <img src="<?= base_url() ?>public/upload/banner_image/successful-entrepreneur.jpg" style="height:300px;width:100%;object-fit:cover" alt="" class="mt-90 mb-30"> </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <?php
                if(count($team)>0){
                    foreach($team as $key=>$row){
                        ?>
                         <div class="col-md-4">
                            <div class="item shadow">
                                <div class="img"> <img src="<?= base_url() ?>public/upload/team_image/<?= $row['member_img'] ?>" alt="" style="height:300px;width:100%;object-fit:cover"> </div>
                                <div class="info">
                                    <h6><?= $row['member_name'] ?></h6>
                                    <p><?= $row['member_desig'] ?></p>
                                    <p>( <?= $row['member_edu'] ?> )</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                <div class="col-md-4">
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>public/user_assets/img/team/4.jpg" alt=""> </div>
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
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="img"> 
                        <img src="<?= base_url() ?>public/user_assets/img/team/1.jpg" alt=""> </div>
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
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="<?= base_url() ?>public/user_assets/img"> <img src="img/team/2.jpg" alt=""> </div>
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
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>public/user_assets/img/team/5.jpg" alt=""> </div>
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
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <div class="img"> <img src="<?= base_url() ?>public/user_assets/img/team/3.jpg" alt=""> </div>
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
                </div>
                <div class="col-md-4">
                    <div class="item" style="box-shadow: 0 0 20px gray !important">
                        <div class="img">
                             <img src="<?= base_url() ?>public/user_assets/img/team/6.jpg" alt="" style="height:300px;width:100%;object-fit:cover"> 
                        </div>
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
                </div>
                    <?php
                }
                ?>
                
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
    