<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Admin Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/admin_data">Add Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Admin Details</li>
                </ol>
              </nav>
            </div>
          
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Admin Information</h4>
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
                                <th>Name</th>
                                <th>Desig</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>Address</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($admin_data)>0){
                                    foreach($admin_data as $key=>$row){
                                        ?>
                                        <tr>
                                            <td style="display:flex;">
                                                <a href="<?= base_url() ?>admincontroller/delete_admin_data/<?= $row['admin_id'] ?>">
                                                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                    <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </a> &nbsp;&nbsp;
                                                <a href="<?= base_url() ?>admincontroller/edit_admin_data/<?= $row['admin_id'] ?>">
                                                    <button class="btn btn-success btn-sm" type="button" >
                                                        <i class="ri-edit-box-line"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td><?= $row['admin_name'] ?></td>
                                            <td><?= $row['admin_desig'] ?></td>
                                            <td><?= $row['admin_mobile'] ?></td>
                                            <td><?= $row['admin_email'] ?></td>
                                            <td><?= $row['admin_dob'] ?></td>
                                            <td><?= $row['admin_address'] ?></td>
                                            <td>
                                                <img src="<?= base_url() ?>public/upload/admin_image/<?= $row['admin_image'] ?>" alt="">
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