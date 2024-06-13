<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Room Book Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Room Booking Status</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Booking Information</h4>
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
                                    <th>Book Date</th>
                                    <th>Room Name</th>
                                    <th>Room Price</th>
                                    <th>Room Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($room_book)>0){
                                    foreach($room_book as $key=>$row){
                                        
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="<?= base_url() ?>admincontroller/view_room_order_details/<?= $row['room_id'] ?>">
                                                    <button class="btn btn-success btn-sm">
                                                        View
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <?php
                                                if($row['order_status']=='Confirm'){
                                                    ?>
                                                    <button class='btn btn-outline-success btn-sm my-2'><i class="ri-check-double-line"></i></button>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <a href="<?= base_url() ?>admincontroller/update_booking_status/<?= $row['book_id'] ?>">
                                                    <button class="btn btn-primary btn-sm my-2" onclick="confirm('Are You Sure To Confirm Order')">
                                                        Confirm
                                                    </button>
                                                </a>
                                                    <?php
                                                }
                                                ?>
                                                  <?php
                                                if($row['order_status']=='Cancel'){
                                                    ?>
                                                    <button class='btn btn-outline-danger btn-sm my-2'>
                                                    <i class="ri-close-large-line"></i>
                                                    </button>
                                                    <?php
                                                }else{
                                                    ?>
                                                   <a href="<?= base_url() ?>admincontroller/cancel_booking/<?= $row['book_id'] ?>">
                                                        <button class="btn btn-danger btn-sm my-2">
                                                            Cancel Booking
                                                        </button>
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                                
                                                
                                            </td>
                                            <td><?= $row['book_date'] ?></td>
                                            <td><?= $row['room_name'] ?></td>
                                            <td><?= number_format($row['room_price']) ?> &#8377;</td>
                                            <td>
                                                <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="">
                                            </td>
                                        </tr>
                                        <?php
                                    }

                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="20" class="text-center">No Record Found</td>
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