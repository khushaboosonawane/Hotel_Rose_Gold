<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/rooms_image/<?= $room_cart_data[0]['room_image'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                <h1>Book  Page</h1>
            </div>
        </div>
    </div>
</div>
 <!-- Contact -->
 <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3><?= $room_cart_data[0]['room_name'] ?></h3>
                    <p><?= $room_cart_data[0]['room_desc'] ?></p>
                    <span>
                        <?php
                        $room_cart_data[0]['rating'];

                        for($i=0;$i<$room_cart_data[0]['rating'];$i++){
                            ?>
                            <i class="ri-star-fill"></i>
                            <?php
                        }
                        ?>
                        
                    </span>
                    <ul class="list-group">
                        <li class='list-group-item'>Breakfast : <?= $room_cart_data[0]['room_breakfast'] ?></li>
                        <li class='list-group-item'>wifi : <?= $room_cart_data[0]['wifi_status'] ?></li>
                    </ul>
                </div>
                <div class="col-md-6 mb-60">
                    <img src="<?= base_url() ?>public/upload/rooms_image/<?= $room_cart_data[0]['room_image'] ?>" alt="" style="height:100%;width:100%;object-fit:cover">
                </div>
                <div class="col-md-12 mb-30  d-flex justify-content-center">
                    <form method="post" action="<?= base_url() ?>usercontroller/checkout">
                        <input type="hidden" name="room_id" id="room_id" value="<?= $room_cart_data[0]['room_id'] ?>" id="">
                        <input type="text" name="product_name" value="<?= $room_cart_data[0]['product_name'] ?>">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="room_price" id="room_price" value="<?= $room_cart_data[0]['room_price'] ?>" readonly type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_name" id="user_name" type="text" placeholder="Your Name *" >
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_mobile" id="user_mobile" type="number" placeholder="Your Number *" >
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="user_email" id="user_email" type="email" placeholder="Your Email *" >
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="" style="color:#ff5031">CheckIn Date</label>
                                <input name="user_checkin_date" id="user_checkin_date" class="form-control" type="date" placeholder="Your checkin Date *" >
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="" style="color:#ff5031">CheckOut Date</label>
                                <input name="user_checkout_date" id="user_checkout_date" type="date" placeholder="Your checkOUt Date *" >
                            </div>
                            <div class="col-md-12 text-center my-4">
                                <button class="butn-dark2" id="PayNow" ><span>Proceed To Checkout</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </section>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
       $(document).ready(function(){
        $("#PayNow").click(function(){
            var user_name=$("#user_name").val();
            var user_mobile=$("#user_mobile").val();
            var user_email=$("#user_email").val();
            var user_checkin_date=$("#user_checkin_date").val();
            var user_checkout_date=$("#user_checkout_date").val();
            var obj={
                "user_name":user_name,
                "user_mobile":user_mobile,
                "user_email":user_email,
                "user_checkin_date":user_checkin_date,
                "user_checkout_date":user_checkout_date
            }
            $.ajax({
                url:"<?= base_url() ?>usercontroller/paymentstatus",
                type:"POST",
                data:obj,
                dataType:'json'
            }).done(function(res){
                console.log(res);
            })
        })
       })
    </script>