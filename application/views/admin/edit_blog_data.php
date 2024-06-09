<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Blog Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_blog_data">View Blog Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/blog">Add Blog Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Blog Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_blog_info" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="blog_id" value="<?= $blog_data[0]['blog_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Blog Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Blog Title" aria-label="Username" name="blog_title" aria-describedby="basic-addon1" value="<?= $blog_data[0]['blog_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Blog Sub Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Blog Sub Title" aria-label="Username" name="blog_subtitle" aria-describedby="basic-addon1" value="<?= $blog_data[0]['blog_subtitle'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Blog Date</span>
                                        </div>
                                        <input type="date" class="form-control text-white" placeholder="Enter Blog Date" aria-label="Username" name="blog_date" aria-describedby="basic-addon1" required value="<?= $blog_data[0]['blog_date'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Blog Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter Blog Description" aria-label="Username" name="blog_desc" aria-describedby="basic-addon1" required><?= $blog_data[0]['blog_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Blog Image</span>
                                        </div>
                                        <input type="file" name="blog_img" class="form-control"  >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/blog_image/<?= $blog_data[0]['blog_img'] ?>" style="height:100px;width:100px" alt="">
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