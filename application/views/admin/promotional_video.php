<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Promotional Video Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Promotional Video Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_promotional_video" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Promotional Video Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Title" aria-label="Username" name="video_title" aria-describedby="basic-addon1" value="<?= $pro_data[0]['video_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Promotional Video</span>
                                        </div>
                                        <input type="file" class="form-control text-white" placeholder="Enter Slider Sub Title" aria-label="Username" name="promotional_video" aria-describedby="basic-addon1" accept="video/mp4" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <video autoplay controls style='height:500px;width:500px'>
                                <source src='<?= base_url() ?>public/upload/promotional_video/<?= $pro_data[0]['promotional_video'] ?>' type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
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