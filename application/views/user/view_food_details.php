<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/food_image/<?= $food_data[0]['food_image'] ?>">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90">
				    
					<h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h4 class="my-3"><?= $food_data[0]['food_name'] ?></h4>
					<h1>Food Details</h1>
				</div>
			</div>
        </div>
    </div>
    <!-- Rooms -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rooms2 mb-90 animate-box" data-animate-effect="fadeInUp">
                        <figure>
                            <img src="<?= base_url() ?>public/upload/food_image/<?= $food_data[0]['food_image'] ?>" alt="" style="height:100%;width:100%;object-fit:cover" class="img-fluid">
                        </figure>
                        <div class="caption">
                            <h3 style="color:#ff512f">
                                <?= number_format($food_data[0]['food_price']) ?> &#8377; &nbsp;
                                <?php
                                if(isset($_SESSION['user_id'])){
                                    if(count($cart_data)>0){
                                        if($cart_data[0]['product_id']==$food_data[0]['food_id'] && $cart_data[0]['product_name']=='food'){
                                            ?>
                                            <a href="<?= base_url() ?>usercontroller/remove_product_form_cart_food/<?= $food_data[0]['food_id'] ?>">
                                                <i class="ri-heart-fill text-danger" ></i>
                                            </a>
                                            <?php

                                        }
                                    }else{
                                        ?>
                                        <a href="<?= base_url() ?>usercontroller/add_to_cart_food/<?= $food_data[0]['food_id'] ?>">
                                            <i class="ri-heart-line lead" style="color:#d5185a"></i>
                                        </a>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <a href="<?= base_url() ?>usercontroller/userprofile">
                                        <i class="ri-heart-line lead" style="color:#d5185a"></i>
                                    </a>
                                    <?php
                                }
                                ?>
                            </h3>
                            <h4><?= $food_data[0]['food_name'] ?></h4>
                            <span>
                                <?php
                                if($food_data[0]['food_rating']<=5){
                                    for($i=0;$i<$food_data[0]['food_rating'];$i++){
                                        ?>
                                    <i class="ri-star-line" style="color:#ff512f"></i>

                                        <?php
                                    }
                                }else{
                                    ?>
                                    <i class="ri-star-line"></i>
                                    <?php
                                }
                                ?>
                              </span>
                            <p><?= nl2br($food_data[0]['food_desc']) ?>.</p>
                            <div class="row room-facilities">
                              <span style="color:black;font-size:18px;" class="lead"><?= $food_data[0]['sub_cat_name'] ?></span>
                              
                            </div>
                            <hr class="border-2">
                            <!-- <div class="info-wrapper">
                                <div class="butn-dark">
                                    <a href="#" data-scroll-nav="1"><span>Order Now</span></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

   
   
  