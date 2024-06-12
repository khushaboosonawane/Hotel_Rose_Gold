<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/blog.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>Our Blogs</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News  -->
    <section class="news section-padding bg-blck">
        <div class="container">
            <div class="row">
                <?php
                if(count($blog_data)>0){
                    foreach($blog_data as $key=>$row){
                        ?>
                         <div class="col-md-4 mb-30">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/upload/blog_image/<?= $row['blog_img'] ?>" alt="" style="height:400px;width:100%;object-fit:cover">
                                    <div class="date">
                                         <span><?= $row['blog_date'] ?></span>
                                    </div>
                                </div>
                                <div class="con"> <span class="category text-white">
                                        <?= $row['blog_subtitle'] ?>
                                    </span>
                                    <h5><?= $row['blog_title'] ?></h5>
                                    <p>
                                        <?= $row['blog_desc'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                      <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/1.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Restaurant</a>
                                </span>
                                <h5><a href="post.html">Historic restaurant renovated</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/2.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Spa</a>
                                </span>
                                <h5><a href="post.html">Benefits of Spa Treatments</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/3.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Bathrooms</a>
                                </span>
                                <h5><a href="post.html">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/4.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> 
                                <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Weight Loss with Fitness Health Club</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/6.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Design</a>
                                </span>
                                <h5><a href="post.html">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="item">
                            <div class="position-re o-hidden"> <img src="<?= base_url() ?>public/user_assets/img/news/5.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news.html">Health</a>
                                </span>
                                <h5><a href="post.html">Benefits of Swimming for Your Health</a></h5>
                            </div>
                        </div>
                </div>
                    <?php
                }
                ?>
              
            </div>
           
        </div>
    </section>