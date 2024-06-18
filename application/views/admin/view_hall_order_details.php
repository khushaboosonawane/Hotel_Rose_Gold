<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dropdowns </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/book_hall">Go Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Room Booking Detail</li>
                </ol>
              </nav>
            </div>
            <?php
            if(count($hall_details)>0){
              ?>
                 <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?= $hall_details[0]['hall_title'] ?> &nbsp;&nbsp;<?= number_format($hall_details[0]['hall_price']) ?> &#8377;</h4>
                    <span>
                        <?php
                            for($i=0;$i<$hall_details[0]['hall_rating'];$i++){
                                ?>
                                <i class="ri-star-fill text-danger" ></i>
                                <?php
                            } 
                        ?>
                    </span>
                    
                    <div class="row">
                        <div class="col-md-6">
                        <p class="card-description"> <?= $hall_details[0]['hall_info'] ?></code>
                        </p>
                        <ul>
                        <li>Size : <?= $hall_details[0]['hall_size'] ?> sq.foot</li>
                        <li>Person :<?= $hall_details[0]['number_person'] ?> Persons</li>
                        <li>WIFI : <?= $hall_details[0]['wifi'] ?></li>
                        <li>Breakfast :<?= $hall_details[0]['breakfast'] ?></li>
                    </ul>
                        </div>
                        <div class="col-md-6 my-3">
                            <img src="<?= base_url() ?>public/upload/hall_image/<?= $hall_details[0]['hall_image'] ?>" alt="" style="height:200px;width:200px;object-fit:cover;border-radius:20%">
                        </div>
                    </div>

                    <div class="template-demo">
                      <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th>User Name</th>
                            <th>Order Status</th>
                            <th>Order Id</th>
                            <th>CheckIn Date</th>
                            <th>CheckOut Date</th>
                            <th>Order Date</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td><?= $hall_details[0]['user_name'] ?></td>
                            <?php
                        if($hall_details[0]['order_status']=='Confirm'){
                          ?>
                          
                          <td style="height:100%;width:10%;">
                             <button class="btn btn-outline-success btn-sm d-flex align-items-center">
                             <span class="spinner-grow text-success" style="font-size:3px !important"></span> &nbsp;
                             <span><?= $hall_details[0]['order_status'] ?></span>
                             </button>
                           </td>
                          <?php

                        }else{
                          ?>
                          <td style="height:100%;width:10%;">
                             
                             <button class="btn btn-outline-danger btn-sm d-flex align-items-center">
                             <span class="spinner-grow text-danger" style="font-size:3px !important"></span> &nbsp;
                             <span><?= $hall_details[0]['order_status'] ?></span>
                             </button>
                           </td>
                          <?php
                        }
                        
                        ?>
                           
                            <td><?= $hall_details[0]['razor_order_id'] ?></td>
                            <td><?= $hall_details[0]['check_in_date'] ?></td>
                            <td><?= $hall_details[0]['check_out_date'] ?></td>
                            <td><?= $hall_details[0]['order_date'] ?></td>
                            <td><?= number_format($hall_details[0]['hall_price']) ?> &#8377;</td>
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
          