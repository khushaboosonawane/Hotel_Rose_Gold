<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="<?= base_url() ?>public/user_assets/img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                <h1>Your Orders</h1>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 my-4">
                <h3><?= $basic_info[0]['hotel_name'] ?></h3>
                <p>
                    <?= $basic_info[0]['hotel_information'] ?>
                </p>
                <?php
                if(isset($_SESSION['user_id'])){
                    ?>
                <h4 style="color:#ff5031">Welcome <?= $user_data[0]['user_name'] ?> Your Order Details</h4>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-12">
                <table class="table table-responsive text-center" style="vertical-align:center">
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($order_room)>0){
                            foreach($order_room as $key=>$row){
                                ?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $row['room_name'] ?></td>
                                    <td><?= number_format($row['room_price']) ?> &#8377;</td>
                                    <td><?= $row['book_date'] ?></td>
                                    <td>
                                        ChekOut Date Fixed When You Vist To Hotel
                                    </td>
                                    <td>
                                        <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" style="height:200px;width:200px" alt="">
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url() ?>usercontroller/cancel_order/<?= $row['room_id'] ?>">
                                            <button class="btn btn-primary" onclick='return confirm("Are You Sure To Cancel Order")'>Cancel Order</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }

                        }else{
                            ?>
                            <tr>
                                <!-- <h2 colspan="20" class="text-center">No Product Order</h2>
                                <h4 colspan="20" class="text-center">
                                    <a href="<?= base_url() ?>usercontroller/">
                                        <button class="btn btn-primary">Order Product</button>
                                    </a>
                                </h4> -->
                            </tr>
                            <?php
                        }

                    }else{
                        ?>
                        <tr>
                            <h1 class="text-center">You Have No Account</h1>
                            <h4 class="text-center">
                                <a href="<?= base_url() ?>usercontroller/userprofile">
                                    <button class="btn btn-primary">Create An Account</button>
                                </a>
                            </h4>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            <div class="col-md-12">
                <table class="text-center">
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($food_order)>0){
                            ?>
                            <tr>
                                <th>Srno</th>
                                <th>Order Date</th>
                                <th>Food Name</th>
                                <th>Food Price</th>
                                <th>Food Quantity</th>
                                <th>Total Price</th>
                                <th>Food</th>
                                <th>Cancel</th>
                            </tr>
                            <?php
                                foreach($food_order as $key=>$row){
                                    ?>
                                    <tr>
                                    <td style='width:10% !important'><?= $key+1 ?></td>
                                    <td style='width:10% !important'><?= $row['order_date'] ?></td>

                                    <td style='width:10% !important'><?= $row['food_name'] ?></td>
                                    <td style='width:10% !important'><?= number_format($row['food_price']) ?>&#8377;</td>
                                    <td style='width:10% !important'><?= $row['order_qty'] ?></td>
                                    <td style='width:10% !important'><?= number_format($row['food_price']*$row['order_qty']) ?>&#8377;</td>

                                    <td style='width:10% !important'>
                                        <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" style="height:200px;width:200px" alt="">
                                    </td>
                                    <td>
                                        <?php
                                        if($row['order_status']=='Disabled'){
                                           ?>
                                           <button class="btn btn-warning btn-sm">Order Cancel</button>
                                           <?php
                                        }else if($row['order_status']=='Dispatched'){
                                            ?>
                                            <button class="btn btn-info btn-sm">Dispatched</button>
                                            <?php
                                        }else if($row['order_status']=='Delivered'){
                                            ?>
                                            <button class='btn btn-success btn-sm'>Delivered</button>
                                            <?php
                                            
                                        }else if($row['order_status']=='Canceled'){
                                            ?>
                                            <button class='btn btn-danger'>Not Available</button>
                                            <?php
                                        }else{
                                            ?>
                                            <a href="<?= base_url() ?>usercontroller/cancel_food_order/<?= $row['order_id'] ?>">
                                                <button class="btn btn-danger btn-sm" onclick='return confirm("Are You Sure To Cancel Order")'>Cancel Order</button>
                                            </a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    </tr>
                                    <?php
                                }
                        }else{

                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>