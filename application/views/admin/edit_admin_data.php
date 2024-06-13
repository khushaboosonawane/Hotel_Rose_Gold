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
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_admin_data">View Admin</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Update Admin</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_admin_info" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="admin_id" value="<?= $admin_data[0]['admin_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Admin Name" aria-label="Username" name="admin_name" aria-describedby="basic-addon1" required value="<?= $admin_data[0]['admin_name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin Designation</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Admin Designation" aria-label="Username" name="admin_desig" aria-describedby="basic-addon1" value="<?= $admin_data[0]['admin_desig'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin DOB</span>
                                        </div>
                                        <input type="date" class="form-control text-white" placeholder="Enter Admin DOB" aria-label="Username" name="admin_dob" aria-describedby="basic-addon1" required value="<?= $admin_data[0]['admin_dob'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin Mobile</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Admin Mobile" aria-label="Username" name="admin_mobile" aria-describedby="basic-addon1" value="<?= $admin_data[0]['admin_mobile'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin Email</span>
                                        </div>
                                        <input type="email" class="form-control text-white" placeholder="Enter Admin Email" aria-label="Username" name="admin_email" aria-describedby="basic-addon1" value="<?= $admin_data[0]['admin_email'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Admin Address</span>
                                        </div>
                                        <textarea name="admin_address" class="form-control text-white" id="" placeholder="Enter Admin Address" required><?= $admin_data[0]['admin_address'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Admin Image</span>
                                        </div>
                                        <input type="file" name="admin_image" class="form-control" >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_image'] ?>" style="height:100px;width:100px;object-fit:cover" alt="">
                            </div>
                        </div>
                        <div class="row text-center my-3">
                            <div class="col-md-12 text-center">
                            <button class="btn btn-transparent" style="background:linear-gradient(66deg,rgb(220,52,85),rgb(252,175,59))">Update Information</button>
                            </div>
                        </div>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>