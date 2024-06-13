<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/food">Add Food Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Food Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Food Information</h4>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Update</th>
                                <th>category</th>
                                <th>Food Name</th>
                                <th>Price</th>
                                <th>Rating</th>
                                <th>Desc</th>
                                <th>Img</th>
                                <th>% OFF</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($food_data)>0){
                                    foreach($food_data as $key=>$row){
                                ?>
                                <tr>
                                    <td style="display:flex;">
                                        <a href="<?= base_url() ?>admincontroller/delete_food_data/<?= $row['food_id'] ?>">
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                            <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </a> &nbsp;&nbsp;
                                        <a href="<?= base_url() ?>admincontroller/edit_food_data/<?= $row['food_id'] ?>">
                                            <button class="btn btn-success btn-sm" type="button" >
                                                <i class="ri-edit-box-line"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td><?= $row['sub_cat_name'] ?></td>
                                    <td><?= $row['food_name'] ?></td>
                                    <td><?= number_format($row['food_price']) ?> &#8377;</td>
                                    <td><?= $row['food_rating'] ?>
                                    <i class="ri-star-fill lead" style="color:#FFD700"></i>
                                    </td>

                                    <td><?= $row['food_desc'] ?></td>
                                    <td>
                                        <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="">
                                    </td>
                                    <td>
                                        <?= $row['off_price'] ?>
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