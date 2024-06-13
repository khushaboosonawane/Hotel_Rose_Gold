<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dropdowns </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/room_book_details">Go Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Room Booking Detail</li>
                </ol>
              </nav>
            </div>
            <?php
            if(count($order_details)>0){
              ?>
                 <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title"><?= $order_details[0]['room_name'] ?> &nbsp;&nbsp;<?= number_format($order_details[0]['room_price']) ?> &#8377;</h4>
                    <span>
                        <?php
                            for($i=0;$i<$order_details[0]['rating'];$i++){
                                ?>
                                <i class="ri-star-fill text-danger" ></i>
                                <?php
                            } 
                        ?>
                    </span>
                    
                    <div class="row">
                        <div class="col-md-6">
                        <p class="card-description"> <?= $order_details[0]['room_desc'] ?></code>
                        </p>
                        <ul>
                        <li>Bed : <?= $order_details[0]['room_bed'] ?></li>
                        <li>Person :<?= $order_details[0]['person_count'] ?> Persons</li>
                        <li>WIFI : <?= $order_details[0]['wifi_status'] ?></li>
                        <li>Breakfast :<?= $order_details[0]['room_breakfast'] ?></li>
                    </ul>
                        </div>
                        <div class="col-md-6 my-3">
                            <img src="<?= base_url() ?>public/upload/rooms_image/<?= $order_details[0]['room_image'] ?>" alt="" style="height:200px;width:200px;object-fit:cover;border-radius:20%">
                        </div>
                    </div>

                    <div class="template-demo">
                      <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th>User Name</th>
                            <th>Order Date</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td><?= $order_details[0]['user_name'] ?></td>
                            <td><?= $order_details[0]['login_date'] ?></td>
                            <td><?= number_format($order_details[0]['room_price']) ?> &#8377;</td>
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
          