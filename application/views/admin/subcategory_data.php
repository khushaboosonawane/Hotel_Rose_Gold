<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Sub Category Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/sub_category">Add Sub Category</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">slider</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Srno</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                              if(count($sub_category_data)>0){
                                 foreach($sub_category_data as $key=>$row){
                              ?>
                              <tr>
                                <td><?= $key+1 ?></td>
                                <td style="display:flex;">
                                  <a href="<?= base_url() ?>admincontroller/delete_sub_cat_data/<?= $row['sub_cat_id'] ?>">
                                      <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                      <i class="ri-delete-bin-line"></i>
                                      </button>
                                  </a> &nbsp;&nbsp;
                                  <a href="<?= base_url() ?>admincontroller/edit_sub_cat_data/<?= $row['sub_cat_id'] ?>">
                                      <button class="btn btn-success btn-sm" type="button" >
                                          <i class="ri-edit-box-line"></i>
                                      </button>
                                  </a>
                                 </td>
                                <td><?= $row['category_name'] ?></td>
                                <td><?= $row['sub_cat_name'] ?></td>
                                <td><?= $row['sub_cat_status'] ?></td>
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