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
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/gallery.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>Our Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:90px;width:90px" alt="">
                    <div class="section-subtitle"><?= $basic_info[0]['hotel_name'] ?></div>
                    <div class="section-title">Image Gallery</div>
                </div>
                <!-- 3 columns -->
               <?php
               if(count($gallery)>0){
                foreach($gallery as $key=>$row){
                    ?>
                     <div class="col-md-4 gallery-item">
                        <a href="<?= base_url() ?>public/upload/gallery_image/<?= $row['gallery_image'] ?>" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img">
                                     <img src="<?= base_url() ?>public/upload/gallery_image/<?= $row['gallery_image'] ?>" class="img-fluid mx-auto d-block" alt="work-img" style="height:400px;width:400px;object-fit:cover"> 
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
               }else{
                ?>
                <div class="col-md-4 gallery-item">
                    <a href="<?= base_url() ?>public/user_assets/img/slider/5.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="<?= base_url() ?>public/user_assets/img/slider/5.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="<?= base_url() ?>public/user_assets/img/slider/4.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="<?= base_url() ?>public/user_assets/img/slider/4.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <?php
               }
               ?>
               <div class="row">
               <?php
                if(count($two_image)>0){
                    foreach($two_image as $key=>$row){
                        ?>
                        <div class="col-md-6 gallery-item">
                            <a href="<?= base_url() ?>public/upload/gallery_image/<?= $row['gallery_image'] ?>" title="" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> 
                                        <img src="<?= base_url() ?>public/upload/gallery_image/<?= $row['gallery_image'] ?>" class="img-fluid mx-auto d-block" alt="work-img" style="height:400px;width:1000px;object-fit:cover"> 
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                    <!-- 2 columns -->
                <div class="col-md-6 gallery-item">
                    <a href="<?= base_url() ?>public/user_assets/img/slider/2.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> 
                                <img src="<?= base_url() ?>public/user_assets/img/slider/2.jpg" class="img-fluid mx-auto d-block" alt="work-img" style="height:400px;width:100%">
                             </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 gallery-item">
                    <a href="<?= base_url() ?>public/user_assets/img/slider/1.jpg" title="" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="<?= base_url() ?>public/user_assets/img/slider/1.jpg" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                    <?php
                }
                ?>
               </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Videos</div>
                    <div class="section-title">Video Gallery</div>
                </div>
                <?php
                if(count($gallery_video)>0){
                    foreach($gallery_video as $key=>$row){
                        ?>
                         <div class="col-md-6">
                            <div class="vid-area mb-30">
                                <div class="vid-icon">
                                    <img src="<?= base_url() ?>public/upload/gallery_image/<?= $row['gar_image'] ?>" alt="YouTube" style="height:350px;width:100%;object-fit:cover">
                                    <a class="video-gallery-button vid" href="<?= $row['gar_video_link'] ?>"> <span class="video-gallery-polygon">
                                            <i class="ti-control-play"></i>
                                        </span> </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                     <!-- 2 columns -->
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="<?= base_url() ?>public/user_assets/img/slider/2.jpg" alt="YouTube">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> <img src="<?= base_url() ?>public/user_assets/img/slider/3.jpg" alt="Vimeo">
                            <a class="video-gallery-button vid" href="https://youtu.be/xh4GnTKFQso"> <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> </a>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
              
            </div>
        </div>
    </section>