<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Testimonial Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/testimonial">Add Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_test_data">View Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Add Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_test_info" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="test_id" value="<?= $test_data[0]['test_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Testimonial Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Testimonial Name" aria-label="Username" name="test_name" value="<?= $test_data[0]['test_name'] ?>" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Testimonial Rating" aria-label="Username" name="test_rating" aria-describedby="basic-addon1" value="<?= $test_data[0]['test_rating'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Testimonial Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter Testimonial DEscripion" aria-label="Username" name="test_desc" aria-describedby="basic-addon1" required><?= $test_data[0]['test_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Testimonial Image</span>
                                        </div>
                                        <input type="file" name="test_image" class="form-control" >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="offset-8">

                            </div>
                            <div class="col-4 col-md-4">
                                <img src="<?= base_url() ?>public/upload/testimonial_image/<?= $test_data[0]['test_image'] ?>" style="height:150px;width:150px" alt="">
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