<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Extra Service Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/extra_service">Add Slider Information</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Slider Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Extra Service Information</h4>
                        <p class="card-description"> 2 Record Display At Time
                        </p>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Update</th>
                                <th>Service Title</th>
                                <th>Price</th>
                                <th>Rating</th>
                                <th>Avilable</th>
                                <th>imagee</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($slider_data)>0){
                                    foreach($slider_data as $key=>$row){
                                        ?>
                                        <tr>
                                            <td class="d-flex">
                                            <a href="<?= base_url() ?>admincontroller/delete_extra_slider_data/<?= $row['extra_service_id'] ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </a> &nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/edit_extra_slider_data/<?= $row['extra_service_id'] ?>">
                                                <button class="btn btn-success btn-sm" type="button" >
                                                    <i class="ri-edit-box-line"></i>
                                                </button>
                                            </a>
                                            </td>
                                            <td><?= $row['extra_service_title'] ?></td>
                                            <td style="width:10%"><?= number_format($row['extra_service_Price']) ?> &#8377;</td>
                                            <td><?= $row['service_rating'] ?><span><i class="ri-star-fill" style='color:#FFD700'></i></span></td>
                                            <td><?= $row['extra_service_avilable'] ?></td>
                                            <td><?= $row['extra_service_desc'] ?></td>
                                            <td>
                                                <img src="<?= base_url() ?>public/upload/extra_service_slider_image/<?= $row['extra_service_image'] ?>" alt="">
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