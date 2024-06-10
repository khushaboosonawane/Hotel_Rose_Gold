<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Order Food</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Order Information</h4>
                        </p>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                                <tr>
                                    <th>View</th>
                                <th>Update</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>Date</th>
                                <th>image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($order_food)>0){
                                    foreach($order_food as $key=>$row){
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url() ?>admincontroller/view_details/<?= $row['order_id'] ?>">
                                                    <button class="btn btn-success">
                                                    <i class="ri-eye-2-line"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td class='d-flex justify-content-around'>
                                                <?php
                                                if($row['order_status']=='Canceled'){
                                                    ?>
                                                    <button class="btn btn-danger btn-sm">
                                                        Order Canceled
                                                    </button> &nbsp;
                                                    <?php
                                                }else if($row['order_status']=='Delivered'){
                                                    ?>
                                                    <button class='btn btn-success'>Delivered</button>&nbsp;
                                                    <?php
                                                }else if($row['order_status']=='Dispatched'){
                                                    ?>
                                                        <a href="<?= base_url() ?>admincontroller/cancel_food_order/<?= $row['order_id'] ?>">
                                                             <button class="btn btn-outline-danger btn-sm" onclick='return confirm("Are You Sure To Cancel Order")'>
                                                            Cancel
                                                            </button>&nbsp;
                                                        </a>
                                                        <a href="<?= base_url() ?>admincontroller/deliver_order/<?= $row['order_id'] ?>">
                                                            <button class="btn btn-outline-success btn-sm" onclick='return confirm("Are you sure to deliver product")'>
                                                                Delevered
                                                            </button>&nbsp;
                                                        </a>
                                                        <button class='btn btn-warning btn-sm'>Dispatched</button>&nbsp;
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                     <a href="<?= base_url() ?>admincontroller/cancel_food_order/<?= $row['order_id'] ?>">
                                                        <button class="btn btn-outline-danger btn-sm" onclick='return confirm("Are you sure to cancel order")'>
                                                            Cancel
                                                        </button>&nbsp;&nbsp;
                                                    </a>
                                                    <a href="<?= base_url() ?>admincontroller/deliver_order/<?= $row['order_id'] ?>" onclick='return confirm("Are you sure to deliver product")'>
                                                        <button class="btn btn-outline-success btn-sm">
                                                            Delevered
                                                        </button>&nbsp;&nbsp;
                                                    </a>
                                                    <a href="<?= base_url() ?>admincontroller/dispatched_order/<?= $row['order_id'] ?>" onclick='return confirm("Are you sure to dispatch order")'>
                                                        <button class="btn btn-outline-warning btn-sm">Dispatched</button>&nbsp;&nbsp;
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?= $row['food_name'] ?></td>
                                            <td><?= number_format($row['food_price']) ?> &#8377;</td>
                                            <td><?= $row['order_qty'] ?></td>
                                            <td><?= number_format($row['food_price']*$row['order_qty']) ?> &#8377;</td>
                                            <td><?= $row['order_date'] ?></td>
                                            <td>
                                                <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="">
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="20" class="text-center">Data Not Found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                           
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                           
            </div>
          </div>