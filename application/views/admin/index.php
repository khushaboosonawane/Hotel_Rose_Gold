

            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <?php
                      $cat=$this->db->query("select count(*) as total_category from category")->result_array();
                      ?>
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">                   
                          <?php
                          if(count($cat)>0){
                            ?>
                            <h3 class="mb-0"><?= $cat[0]['total_category'] ?></h3>
                           
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">
                      Ctategory
                      <br>
                      <a href="<?= base_url() ?>admincontroller/category_data">
                        <button class="btn btn-outline-success my-2">
                          View
                        </button>
                      </a>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php
                          $sub_cat=$this->db->query("select count(*) as total_subcategory from sub_category")->result_array();
                          ?>
                          <?php
                          if(count($sub_cat)>0){
                            ?>
                            <h3 class="mb-0"><?= $sub_cat[0]['total_subcategory'] ?></h3>
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Sub Category</h6>
          
                    <a href="<?= base_url() ?>admincontroller/subcategory_data">
                      <button class="btn btn-outline-success">View</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php
                          $room_book=$this->db->query("select count(*) as total_book from room_book")->result_array();

                          ?>
                          <?php
                          if(count($room_book)>0){
                            ?>
                            <h3 class="mb-0"><?= $room_book[0]['total_book'] ?></h3>
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Room Book</h6>
                    <a href="<?= base_url() ?>admincontroller/room_book_details">
                      <button class="btn btn-outline-success">View</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php
                          $order_food=$this->db->query("select count(*) as order_food from order_food")->result_array();
                          $total_order=$this->db->query("select sum(food_price*order_qty) as total_price from food,order_food where food.food_id=order_food.food_id")->result_array();
                          
                          ?>
                          <?php
                          
                          if(count($order_food)>0){
                            ?>
                            <h3 class="mb-0"><?= $order_food[0]['order_food'] ?></h3>
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                          
                          <?php
                          if(count($total_order)>0){
                            ?>
                            <p class="text-success ml-2 mb-0 font-weight-medium"><?= number_format($total_order[0]['total_price']) ?>&#8377;</p>

                            <?php
                          }else{
                            ?>
                            <p class="text-success ml-2 mb-0 font-weight-medium">0</p>
                            <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Order Food</h6>
                    <a href="<?= base_url() ?>admincontroller/order_food">
                      <button class="btn btn-outline-success btn-sm">View</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php
                          $hall_book=$this->db->query("select count(*) as book_hall from book_hall")->result_array(); 
                          ?>
                          <?php
                          
                          if(count($hall_book)>0){
                            ?>
                            <h3 class="mb-0"><?= $hall_book[0]['book_hall'] ?></h3>
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Hall Book</h6>
                    <a href="<?= base_url() ?>admincontroller/book_hall">
                      <button class="btn btn-outline-success btn-sm">View</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <?php
                          $total_user=$this->db->query("select count(*) as total_count from user_data")->result_array(); 
                          ?>
                          <?php
                          
                          if(count($total_user)>0){
                            ?>
                            <h3 class="mb-0"><?= $total_user[0]['total_count'] ?></h3>
                            <?php
                          }else{
                            ?>
                            <h3 class="mb-0">0</h3>
                            <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total User</h6>
                    <a href="<?= base_url() ?>admincontroller/users">
                      <button class="btn btn-outline-success btn-sm">View</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
