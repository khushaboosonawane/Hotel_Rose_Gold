<?php
defined("BASEPATH") or exit("no direct script ia allowed");
?>
<style>
    /* colors */
.list-group {
  border-color: #D0D5DC !important;
}
.list-group-item {
  border-color: #D0D5DC !important;
}

h1,h2,h3,h4,h5,h6 {
  font-weight: 500 !important;
}

a.account-card {
  text-decoration: none;
  color: unset;
}
a.account-card i.fa {
  font-size: 42px;
  width: 45px;
}
a.account-card .card {
  background: #F9FAFB;
  border: 1px solid #D0D5DC;
}
a.account-card .card:hover {
  background: #FFFFFF;
}
a.account-card .card:active {
  background: #F0F2F5;
}

.bg-yellow {
  background: #F5D847;
  color: #222C3A;
}

.list-group-item-action {
  background: #F9FAFB;
}
.list-group-item-action .fa {
  width: 22px;
}
.list-group-item-action .fa.fa-angle-right {
  font-size: 20px;
  position: absolute;
  right: 5px;
  top: 14px;
}

.coupon {
  background: #F9FAFB;
  border: 2px dashed #354050 !important;
}

.reward-status-box {
  position: relative;
  width: 100%;
  color: #FFFFFF;
  background: #3A70A0;
  border: 2px solid #3A70A0;
  border-radius: 5px;
}
.reward-status-box .reward-status {
  width: 60%;
  background: #3A70A0;
  padding: 15px;
}
.reward-status-box .current-status {
  position: absolute;
  right: 15px;
  top: 15px;
  color: #FFFFFF;
}
.reward-status-box .current-status-2 {
  position: absolute;
  right: 15px;
  top: 41px;
  color: #FFFFFF;
}

.text-orange {
  color: #EC9532 !important;
}
.text-carbon {
  color: #222C3A !important;
}
.text-pebble {
  color: #79879A !important;
}
.text-gray, .text-pale-sky {
  color: #A2ABB9 !important;
}
.text-cloud {
  color: #D0D5DC !important;
}
.text-blue {
  color: #49AED0 !important;
}

.bg-black {
  background: #111822 !important;
}

.bg-snow {
  background: #F9FAFB !important;
}

.bg-fog {
  background: #F0F2F5 !important;
}

.bb1-cloud {
  border-bottom: 1px solid #354050;
}

.fs-14 {
  font-size: 14px !important;
}

.fs-22 {
  font-size: 22px !important;
}

.tanga-header .navbar-brand {
  margin-bottom: 5px;
}
.tanga-header .nav-link {
  color: #A2ABB9;
}
.tanga-header .nav-link:hover {
  color: #FFFFFF;
}
.tanga-header .nav-link:active {
  color: #A2ABB9;
}

.tanga-navbar {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.tanga-navbar .nav-link {
  white-space: nowrap;
  color: #79879A;
}
.tanga-navbar .nav-link:hover {
  color: #354050;
}
.tanga-navbar .nav-link:active {
  color: #79879A;
}

.btn-primary {
  background: #C62931;
  border-color: #C62931;
  cursor: pointer;
}
.btn-primary:hover {
  background: #DA4350;
  border-color: #DA4350;
}

.btn-secondary {
  background: #FFFFFF !important;
  color: #354050 !important;
  border-color: #D0D5DC !important;
  cursor: pointer;
}
.btn-secondary:hover {
  color: #354050 !important;
  background: #F9FAFB !important;
}
.btn-secondary:active, .btn-secondary:focus {
  color: #79879A !important;
  background: #F0F2F5 !important;
  outline: 0 !important;
}

.mobile-nav {
  position: fixed;
  bottom: 0;
  z-index: 50;
  display: block;
  width: 100%;
  background: #111822;
}
.mobile-nav a {
  text-decoration: none !important;
  cursor: pointer;
  color: #A2ABB9;
  font-size: 12px;
  float: left;
  width: 20%;
  display: inline-block;
  text-align: center;
  margin: 0 !important;
  padding: 8px 0px 5px 0px;
}
.mobile-nav a.active {
  background: #222C3A;
  color: #FFFFFF;
}
.mobile-nav a i {
  font-size: 23px;
  display: block;
  margin: 0 auto;
  margin-bottom: 2px;
}

.fs-18 {
  font-size: 18px !important;
}

.bg-snow {
  background: #F9FAFB !important;
}

.card {
  border-color: #D0D5DC !important;
}

.text-pebble {
  color: #79879A !important;
}

.text-charcoal {
  color: #354050 !important;
}

.bottom-drawer {
  position: fixed;
  bottom: 56px;
  width: 100%;
  border-top: 1px solid #354050;
}

.bg-white {
  background: #FFFFFF !important;
}

.text-red {
  color: #C62931 !important;
}

.text-green {
  color: #00A362 !important;
}

.text-link-blue {
  color: hsl(215, 60%, 50%) !important;
}

.form-control {
  background: #F9FAFB;
  border-color: #D0D5DC !important;
}

.bd-2-cloud {
  border: 2px dashed #354050;
}

.b-1-green {
  border: 2px solid #00A362 !important;
}

.br-8 {
  border-radius: 5px;
}

.address-radio .address-label {
  padding: 1rem;
}

.address-radio [type="radio"]:checked,
.address-radio [type="radio"]:not(:checked) {
  position: absolute;
  opacity: 0;
}
.address-radio [type="radio"]:checked + label,
.address-radio [type="radio"]:not(:checked) + label {
  position: relative;
  padding-left: 50px;
  width: 100%;
  cursor: pointer;
  line-height: 20px;
  display: inline-block;
  color: #354050;
}
.address-radio [type="radio"]:checked + label:before,
.address-radio [type="radio"]:not(:checked) + label:before {
  content: '';
  position: absolute;
  left: 1rem;
  top: 1rem;
  width: 20px;
  height: 20px;
  border: 2px solid #354050;
  border-radius: 50%;
  background: #FFFFFF;
}
.address-radio [type="radio"]:checked + label:after {
  content: '';
  width: 12px;
  height: 12px;
  background: #00A362;
  position: absolute;
  top: 20px;
  left: 20px;
  border-radius: 50%;
  transition: all 0.2s ease;
}
.address-radio [type="radio"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
.address-radio [type="radio"]:checked + label p {
  display: unset;
}
.address-radio [type="radio"]:not(:checked) + label p {
  display: none;
}
.spinner-grow{
    --bs-spinner-width:1rem;
    --bs-spinner-height:1rem;
}
</style>
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="5" data-background="<?= base_url() ?>public/upload/banner_image/about.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90 text-center">
                    <h5 style="color:#ff512f "><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1>Order Details</h1>
                </div>
            </div>
        </div>
    </div>

<div class="container mt-3 mt-md-5">
  <h2 class="text-charcoal hidden-sm-down">Your Orders</h2>
  <h5 class="text-charcoal hidden-md-up">Your Orders</h5>
  <div class="row">
    <div class="col-12">
      <div class="list-group mb-5">
        <div class="list-group-item p-3 bg-snow" style="position: relative;">
          <div class="row w-100 no-gutters">
            <div class="col-6 col-md">
              <h6 class="text-charcoal mb-0 w-100">Order Number</h6>
              <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $order_details[0]['food_id'] ?>" class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= $order_details[0]['razor_order_id'] ?></a>
            </div>
            <div class="col-6 col-md">
              <h6 class="text-charcoal mb-0 w-100">Date</h6>
              <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= $order_details[0]['order_date'] ?></p>  
            </div>
            <div class="col-6 col-md"> 
              <h6 class="text-charcoal mb-0 w-100">Total</h6>
              <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= number_format($sub_total) ?> &#8377;</p> 
            </div>
            <div class="col-6 col-md"> 
              <h6 class="text-charcoal mb-0 w-100">Shipped To</h6>
              <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= $order_details[0]['deliver_to'] ?></p> 
            </div>
            <div class="col-12 col-md-3">
              <a href="<?= base_url() ?>usercontroller/order_page" class="btn btn-primary w-100">View Order</a>
            </div>
          </div>
          
        </div>
        <div class="list-group-item p-3 bg-white">
          <div class="row no-gutters">
            <div class="col-12 col-md-9 pr-0 pr-md-3">
              <div class="alert p-2 alert-success w-100 mb-0">
                <h6 class="text-green mb-0"><b>Order Delivery Date</b></h6>
                <?php
                if($order_details[0]['order_status']=='Delivered'){
                    ?>
                    <p class="text-green hidden-sm-down mb-0"><?= $order_details[0]['order_deliver_date'] ?></p>
                    <?php

                }else{
                    ?>
                    <p class="text-green hidden-sm-down mb-0">Yet Not Delivered</p>
                    <?php
                }
                ?>
                
              </div>
            </div>
           
            <?php
            if(count($order_details)>0){
                foreach($order_details as $key=>$row){
                    ?>
                    <div class="row no-gutters mt-3">
                        <div class="col-3 col-md-3">
                            <img class="img-fluid " src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" style="height:30vh;width:300px;objcet-fit:cover" alt="">
                        </div>
                        <div class="col-9 col-md-7 pr-0 pr-md-3">
                            <h6 class="text-charcoal mb-2 mb-md-1">
                            <a href="" class="text-charcoal"><?= $row['order_qty'] ?> x <?= $row['food_name'] ?></a>
                            </h6>
                            <ul class="list-unstyled text-pebble mb-2 small">
                            <li class="">
                                <b>Food Details:</b> <p><?= $row['food_desc'] ?></p>
                            </li>
                            <li class="">
                                
                                <span>
                                    <?php
                                    if($row['food_rating']<=5){
                                        for($i=0;$i<$row['food_rating'];$i++){
                                            ?>
                                        <i class="ri-star-fill text-danger lead"></i>

                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <i class="ri-star-fill text-danger"></i>
                                        <i class="ri-star-fill text-danger"></i>
                                        <i class="ri-star-fill text-danger"></i>
                                        <i class="ri-star-fill text-danger"></i>
                                        <i class="ri-star-fill text-danger"></i>
                                        <?php
                                    }
                                    ?>
                                </span>
                            </li>
                            <li>
                                <b>Delivery Address :</b>
                                <p class="lead">
                                    <?= $row['country'] ?> <?= $row['state'] ?> <?= $row['dist'] ?> <?=  $row['tal'] ?> <?= $row['street'] ?>
                                </p>
                            </li>
                            <li>
                                <b>Delivery Status</b>
                                <?php
                                if($row['order_status']=='Delivered'){
                                    ?>
                                    <p class="lead">
                                        <span class="spinner-grow text-success" style="font-size:3px !important"></span> <?= $row['order_status'] ?>
                                    </p>
                                    <?php
                                }else{
                                    ?>
                                    <p class="lead">
                                         <span class="spinner-grow text-danger" style="font-size:3px !important"></span> <?= $row['order_status'] ?>
                                    </p>
                                    <?php
                                }
                                ?>
                                
                            </li>
                            </ul>
                            <h6 class="text-charcoal text-left mb-0 mb-md-2"><b><?= number_format($row['food_price']) ?> &#8377;</b></h6>
                        </div>
                        <div class="col-12 col-md-2 hidden-sm-down">
                            <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>" class="btn btn-secondary w-100 mb-2">Buy It Again</a>
                        </div>
                    </div>
                
                    <?php
                }
            }else{
                ?>
            <div class="row no-gutters mt-3">
                <div class="col col-md-12">
                    No Order Found
                </div>
            </div>
           
                <?php
            }
            ?>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-12 col-md-4">
      <div class="pt-5 pt-md-0">
        <div class="list-group mb-3">
          <div class="list-group-item p-3 bg-snow">
            <h6 class="mb-0">Order Summary</h6>
          </div>
          <div class="list-group-item py-2 px-3 bg-white">
            <div class="row w-100 no-gutters">
              <div class="col-6 text-pebble">
                Subtotal
              </div>
              <div class="col-6 text-right text-charcoal">
              <?= $order_details[0]['order_qty'] ?> * <?= number_format($order_details[0]['food_price']) ?> &#8377; = <?= number_format($sub_total) ?> &#8377;
              </div>
            </div>
          </div>
          <div class="list-group-item py-2 px-3 bg-white">
            <div class="row w-100 no-gutters">
              <div class="col-6 text-pebble">
                Sales Tax
              </div>
              <div class="col-6 text-right text-charcoal">
                00.00 &#8377;
              </div>
            </div>
          </div>
          <div class="list-group-item py-2 px-3 bg-white">
            <div class="row w-100 no-gutters">
              <div class="col-6 text-pebble">
                Shipping
              </div>
              <div class="col-6 text-right text-charcoal">
                FREE
              </div>
            </div>
          </div>
          <div class="list-group-item py-2 px-3 bg-white">
            <div class="row w-100 no-gutters">
              <div class="col-8 text-pebble">
                Gift certificate
              </div>
              <div class="col-4 text-right text-red text-charcoal">
                -5.55 &#8377;
              </div>
            </div>
          </div>
          <div class="list-group-item py-2 px-3 bg-snow">
            <div class="row w-100 no-gutters">
              <div class="col-8 text-charcoal">
                <b>Total</b>
              </div>
              <div class="col-4 text-right text-green">
                <b> <?= number_format($sub_total - 5.55) ?> &#8377; </b>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="p-3 hidden-md-up"></div>
