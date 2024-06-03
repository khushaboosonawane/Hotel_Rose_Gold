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
                    <form action="<?= base_url() ?>admincontroller/update_slider_info" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="sli_id" value="<?= $sli_data[0]['sli_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Title" aria-label="Username" name="slider_title" aria-describedby="basic-addon1" required value="<?= $sli_data[0]['slider_title'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Sub Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Sub Title" aria-label="Username" name="slider_subtitle" aria-describedby="basic-addon1" required value="<?= $sli_data[0]['slider_subtitle'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Slider Rating" aria-label="Username" name="slider_rating" aria-describedby="basic-addon1" required value="<?= $sli_data[0]['slider_rating'] ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Select Slider Image</span>
                                        </div>
                                        <input type="file" name="slider_image" class="form-control"  >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6 text-center">
                                <img src="<?= base_url() ?>public/upload/slider_image/<?= $sli_data[0]['slider_image'] ?>" style="height:100px;width:100px" alt="">
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