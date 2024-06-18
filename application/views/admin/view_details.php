<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>



<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Food Details </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/order_food">Go Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order Food Detail</li>
                </ol>
              </nav>
            </div>
            <?php
            if(count($order_detail)>0){
              ?>
                 <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?= $order_detail[0]['food_name'] ?> &nbsp;&nbsp;<?= number_format($order_detail[0]['food_price']) ?> &#8377;</h4>
                    <span>
                        <?php
                            for($i=0;$i<$order_detail[0]['food_rating'];$i++){
                                ?>
                                <i class="ri-star-fill text-danger" ></i>
                                <?php
                            } 
                        ?>
                    </span>
                    <div class="row">
                        <div class="col-md-6">
                        <p class="card-description"> <?= $order_detail[0]['food_desc'] ?></code>
                        </p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= base_url() ?>public/upload/food_image/<?= $order_detail[0]['food_image'] ?>" alt="" style="height:200px;width:200px;object-fit:cover;border-radius:20%">
                        </div>
                    </div>

                    <div class="template-demo table-responsive">
                      <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th>Status</th>
                            <?php
                            if($order_detail[0]['order_status']='Delivered'){
                              ?>
                              <th>Order Delivery Date</th>
                              <?php
                            }
                            ?>
                            <th>User Name</th>
                            <th>User Mobile</th>
                            <th>User Email</th>
                            <th>Order Address</th>
                            <th>Order Date</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>

                       
                        <tr>
                        <?php
                        if($order_detail_status[0]['order_status']=='Delivered'){
                          ?>
                          
                          <td style="height:100%;width:30%;">
                             <button class="btn btn-outline-success btn-sm d-flex align-items-center">
                             <span class="spinner-grow text-success" style="font-size:3px !important"></span> &nbsp;
                             <span><?= $order_detail_status[0]['order_status'] ?></span>
                             </button>
                           </td>
                          <?php

                        }else{
                          ?>
                          <td style="height:100%;width:30%;">
                             
                             <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                             <span class="spinner-grow text-danger" style="font-size:3px !important"></span> &nbsp;
                             <span><?= $order_detail_status[0]['order_status'] ?></span>
                             </button>
                           </td>
                          <?php
                        }
                        
                        ?>
                            
                            
                            
                            <?php
                            if($order_detail[0]['order_status']='Delivered'){
                              ?>
                              <td><?= $order_detail[0]['order_deliver_date'] ?></td>
                              <?php
                            }
                            ?>
                            <td><?= $order_detail[0]['user_order_name'] ?></td>
                            <td style="width:18%">+91 &nbsp; <?= $order_detail[0]['user_order_mobile'] ?></td>
                            <td><?= $order_detail[0]['user_order_email'] ?></td>
                            <td style="width:20%">
                              <?= $order_detail[0]['state'] ?> &nbsp; <?= $order_detail[0]['dist'] ?> &nbsp;
                              <?= $order_detail[0]['tal'] ?> &nbsp; <?= $order_detail[0]['street'] ?> &nbsp;
                              <?= $order_detail[0]['pincode'] ?>
                            </td>
                            <td><?= $order_detail[0]['order_date'] ?></td>
                            <td><?= $order_detail[0]['order_qty'] ?></td>
                            <td><?= number_format($order_detail[0]['food_price']) ?> &#8377;</td>
                            <td><?= number_format($order_detail[0]['order_qty'] * $order_detail[0]['food_price']) ?> &#8377;</td>
                        </tr>
                      </table>
                      
                      
                    </div>
                  </div>
                
                </div>
              </div>
              
            </div>
              <?php
            }else{
              ?>
              <div class="row">
                <div class="col-md-12">
                  <h2 class="text-center">
                    User LogOut From His Account
                  </h2>
                </div>
              </div>
              <?php
            }
            ?>
         
          </div>
          