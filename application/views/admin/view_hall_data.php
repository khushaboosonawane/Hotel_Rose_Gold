<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/metting_halls">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Metting & Halls Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Metting & Halls Information</h4>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Update</th>
                                <th>Hall Name</th> 
                                <th>Hall Price</th>
                                <th>Hall Rating</th>
                                <th>Hall Information</th>
                                <th>Hall Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($metting_data)>0){
                                    foreach($metting_data as $key=>$row){
                                      ?>
                                      <tr>
                                        <td style="display:flex;padding:20px">
                                            <a href="<?= base_url() ?>admincontroller/delete_metting_data/<?= $row['mt_id'] ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </a> &nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/edit_metting_data/<?= $row['mt_id'] ?>">
                                                <button class="btn btn-success btn-sm" type="button" >
                                                    <i class="ri-edit-box-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $row['hall_title'] ?></td>
                                        <td><?= number_format($row['hall_price']) ?> &#8377;</td>
                                        <td><?= $row['hall_rating'] ?></td>
                                        <td><?= $row['hall_info'] ?></td>
                                        <td>
                                            <img src="<?= base_url() ?>public/upload/hall_image/<?= $row['hall_image'] ?>" alt="">
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