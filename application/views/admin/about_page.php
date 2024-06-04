<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> About Section </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">About Section</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/save_about_info" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">About Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter About Title" aria-label="Username" name="about_title" aria-describedby="basic-addon1" value="<?= $about_data[0]['about_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">About Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter About Description" aria-label="Username" name="about_description" aria-describedby="basic-addon1" required><?= $about_data[0]['about_description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">About First Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" placeholder="Enter Slider Rating" aria-label="Username" name="about_first_image" aria-describedby="basic-addon1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/about_image/<?= $about_data[0]['about_first_image'] ?>" style="height:100px;width:100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">About Second Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" placeholder="Enter Slider Rating" aria-label="Username" name="about_second_image" aria-describedby="basic-addon1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 my-3">
                                <img src="<?= base_url() ?>public/upload/about_image/<?= $about_data[0]['about_second_image'] ?>" style="height:100px;width:100px" alt="">
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