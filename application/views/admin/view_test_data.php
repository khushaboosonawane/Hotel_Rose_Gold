<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/testimonial">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Testimonial data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Testimonial Information</h4>
                        <p class="card-description"> 2 Record Display At Time
                        </p>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Srno</th>
                                <th>Update</th>
                                <th> Name </th>
                                <th> Rating </th>
                                <th>  Description </th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($test_data)>0){
                                    foreach($test_data as $key=>$row){
                                        ?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td style="display:flex;justify-content:center;padding:20px">
                                                <a href="<?= base_url() ?>admincontroller/delete_test_data/<?= $row['test_id'] ?>">
                                                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                    <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </a> &nbsp;&nbsp;
                                                <a href="<?= base_url() ?>admincontroller/edit_test_data/<?= $row['test_id'] ?>">
                                                    <button class="btn btn-success btn-sm" type="button" >
                                                        <i class="ri-edit-box-line"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td><?= $row['test_name'] ?></td>
                                            <td><?= $row['test_rating'] ?> <i class="ri-star-fill lead" style="color:#FFD700"></i></td>
                                            <td><?= $row['test_desc'] ?></td>
                                            <td>
                                                <img src="<?= base_url() ?>public/upload/testimonial_image/<?= $row['test_image'] ?>" alt="">
                                               
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
          