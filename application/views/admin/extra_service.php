<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">slider</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_extra_service" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Title" aria-label="Username" name="extra_service_title" aria-describedby="basic-addon1" value="<?= $extra_service[0]['extra_service_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Sub Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Extra Service Sub Title" aria-label="Username" name="extra_service_subtitle" aria-describedby="basic-addon1" value="<?= $extra_service[0]['extra_service_subtitle'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter Extra Service Description" aria-label="Username" name="extra_service_desc" aria-describedby="basic-addon1" required><?= $extra_service[0]['extra_service_desc'] ?></textarea>
                                    </div>
                                </div>
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
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-title">
                    <h4 class='p-2'>Extra Service Slider</h4>
                  </div>
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/save_extra_service_slider" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Title" aria-label="Username" name="extra_service_title" aria-describedby="basic-addon1"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Extra Service Rating" aria-label="Username" name="service_rating" aria-describedby="basic-addon1"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Price</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Extra Service Price" aria-label="Username" name="extra_service_Price" aria-describedby="basic-addon1"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Avilable</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Extra Service Sub Title" aria-label="Username" name="extra_service_avilable" aria-describedby="basic-addon1"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" aria-label="Username" name="extra_service_image" aria-describedby="basic-addon1"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Extra Service Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter Extra Service Description" aria-label="Username" name="extra_service_desc" aria-describedby="basic-addon1" required></textarea>
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