<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Category Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/category_data">Category Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Category</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_sub_category" method="post">
                    <input type="hidden" name="sub_cat_id" value='<?= $sub_cat_data[0]['sub_cat_id'] ?>' id="">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Select Category</span>
                                        </div>
                                        <select class="form-control" name="cat_id" aria-label="Default select example">
                                            <option selected class="text-white" value="<?= $sub_cat_data[0]['cat_id'] ?>"><?= $sub_cat_data[0]['category_name'] ?></option>
                                            <?php
                                            if(count($cat_data)>0){
                                               foreach($cat_data as $key=>$row){
                                            ?>
                                            <option class="text-white" value="<?= $row['cat_id'] ?>"><?= $row['category_name'] ?></option>
                                            <?php
                                               }
                                            }else{
                                            ?>
                                             <option class="text-white">Record Not Found</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Sub Category Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Sub Category Name" aria-label="Username" name="sub_cat_name" aria-describedby="basic-addon1" required value="<?= $sub_cat_data[0]['sub_cat_name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Status</span>
                                        </div>
                                        <select class="form-control" name="sub_cat_status" aria-label="Default select example">
                                            <option selected class="text-white"><?= $sub_cat_data[0]['sub_cat_status'] ?></option>
                                            <option class="text-white">Active</option>
                                            <option class="text-white">Disabled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center my-3">
                            <div class="col-md-12 text-center">
                            <button class="btn btn-transparent" style="background:linear-gradient(66deg,rgb(220,52,85),rgb(252,175,59))">Save Information</button>
                            </div>
                        </div>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>
          </div>