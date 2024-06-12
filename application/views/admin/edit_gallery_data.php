<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Gallery Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/gallery">Add Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_gallery_data">View Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Gallery Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_gallery_info" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="gar_id" value="<?= $gallery_data[0]['gar_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Gallery Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" aria-label="Username" name="gallery_image" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/gallery_image/<?= $gallery_data[0]['gallery_image'] ?>" style="height:150px;width:150px" alt="">
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