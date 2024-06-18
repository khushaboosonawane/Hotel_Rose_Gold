<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
    .buttons {
    margin: 10%;
    text-align: center;
}

.btn-hover {
    width: 150px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 40px;
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

.btn-hover.color-7 {
    background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}
.btn-hover.color-9 {
    background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
    box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
    width: 61%;
    height: 20%;
    border-radius: 0px;
}

</style>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/order.jpeg" style="background-position:center center">
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
                <table class="table table-responsive text-center my-4" style="vertical-align:center">
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($order_room)>0){
                            ?>
                             <h2 class='text-center my-3'>
                            <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px;text-align:center;object-fit:cover" alt=""> <br>    
                            Room Order Details <br>
                        
                            </h2>
                            <tr>
                                <th>View Details</th>
                                <th>Room Name</th>
                                <th>Room Price</th>
                                <th>Booking Date</th>
                                <th>Check Out Date</th>
                                <th>Room Image</th>
                                <th>Cancel Order</th>
                            </tr>
                            <?php
                            foreach($order_room as $key=>$row){
                                ?>
                                <tr>
                                    <td>
                                        <a href="<?= base_url() ?>usercontroller/rooms_details/<?= $row['room_id'] ?>">
                                        <button class="btn-hover color-9">View Details</button>
                                        </a>
                                    </td>
                                    <th><?= $row['room_name'] ?></th>
                                    <th style="width:10%"><?= number_format($row['room_price']) ?> &#8377;</th>
                                    <th style="width:10%"><?= $row['book_date'] ?></th>
                                    <th>
                                        <?= $row['user_checkout_date'] ?>
                                    </th>
                                    <td>
                                        <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" style="height:200px;width:300px;object-fit:cover;padding:10px" alt="">
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url() ?>usercontroller/cancel_order/<?= $row['room_id'] ?>">
                                        <button class="btn-hover color-7" onclick='return confirm("Are You Sure To Cancel Order")'>Cancel Order</button>
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
            <div class="col-md-12 my-5">
                <table class="text-center table table-responsive text-sm">
                    <?php
                    if(isset($_SESSION['user_id'])){
                        
                        if(count($food_order)>0){
                            ?>
                             <h2 class='text-center my-3'>
                            <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:90px;width:90px;text-align:center" alt=""> <br>    
                            Food Order Details <br>
                        
                            </h2>
                            <?php
                            ?>
                            <tr>
                                <th>View Order Details</th>
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
                                    <td style='width:10% !important'>
                                        <a href="<?= base_url() ?>usercontroller/view_order_details/<?= $row['order_id'] ?>">
                                        <button class="btn-hover color-9"><i class="ri-arrow-right-double-line"></i></button>
                                        </a>
                                        
                                    </td>
                                    <td style='width:10% !important'><?= $row['order_date'] ?></td>

                                    <td style='width:10% !important'><?= $row['food_name'] ?></td>
                                    <td style='width:10% !important'><?= number_format($row['food_price']) ?>&#8377;</td>
                                    <td style='width:10% !important'><?= $row['order_qty'] ?></td>
                                    <td style='width:10% !important'><?= number_format($row['food_price']*$row['order_qty']) ?>&#8377;</td>

                                    <td style='width:10% !important'>
                                        <a href="<?= base_url() ?>usercontroller/view_food_details/<?= $row['food_id'] ?>">
                                            <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" style="height:200px;width:300px;object-fit:cover" alt="">
                                        </a>
                                        
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
                                            <button class="btn-hover color-7" onclick='return confirm("Are You Sure To Cancel Order")'>Cancel Order</button>
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