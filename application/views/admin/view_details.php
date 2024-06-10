<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Dropdowns </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/order_food">Go Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order Food Detail</li>
                </ol>
              </nav>
            </div>
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

                    <div class="template-demo">
                      <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th>User Name</th>
                            <th>Order Date</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td><?= $order_detail[0]['user_name'] ?></td>
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
          </div>
          