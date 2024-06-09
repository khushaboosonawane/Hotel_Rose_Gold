<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Metting & Halls Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/metting_halls">Add Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_hall_data">View Metting & Hall Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Metting & Halls</li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_hall_info" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="mt_id" value="<?= $metting_data[0]['mt_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Hall Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Hall Title" aria-label="Username" name="hall_title" aria-describedby="basic-addon1" value="<?= $metting_data[0]['hall_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Hall Sub Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Hall Title" aria-label="Username" name="hall_subtitle" aria-describedby="basic-addon1" value="<?= $metting_data[0]['hall_subtitle'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Hall Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Hall Rating" aria-label="Username" name="hall_rating" aria-describedby="basic-addon1" value="<?= $metting_data[0]['hall_rating'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Hall Price</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Hall Price" aria-label="Username" name="hall_price" aria-describedby="basic-addon1" value="<?= $metting_data[0]['hall_price'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Hall Image</span>
                                        </div>
                                        <input type="file" name="hall_image" class="form-control" >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/hall_image/<?= $metting_data[0]['hall_image'] ?>" style="height:150px;width:150px" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Hall Description</span>
                                        </div>
                                        <textarea name="hall_info" placeholder="Enter Hall Information" class="form-control" required ><?= $metting_data[0]['hall_info'] ?></textarea>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >CheckIn Details</span>
                                        </div>
                                        <textarea name="checkin_details" class="form-control" placeholder="Enter Checkin Details" required ><?= $metting_data[0]['checkin_details'] ?></textarea>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >CheckOut Details</span>
                                        </div>
                                        <textarea name="checkout_details" class="form-control" placeholder="Enter Checkout Details" required ><?= $metting_data[0]['checkout_details'] ?></textarea>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Special CheckIn Instruction</span>
                                        </div>
                                        <textarea name="special_checkin_ins" placeholder="Enter Spcial CheckIn Instrction" class="form-control" required ><?= $metting_data[0]['special_checkin_ins'] ?></textarea>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Number Of Person Allowed</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Numbe r Of Person" aria-label="Username" name="number_person" aria-describedby="basic-addon1" value="<?= $metting_data[0]['number_person'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Size Of Hall</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Hall Size in sq/ft" aria-label="Username" name="hall_size" aria-describedby="basic-addon1" value="<?= $metting_data[0]['hall_size'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Breakfast Avilable</span>
                                        </div>
                                        <select class="form-control" name="breakfast" aria-label="Default select example" required>
                                            <option selected><?= $metting_data[0]['breakfast'] ?></option>
                                            <option >Avilable</option>
                                            <option >Not Avilable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">wifi Avilable</span>
                                        </div>
                                        <select class="form-control" name="wifi" aria-label="Default select example" required>
                                            <option selected><?= $metting_data[0]['wifi'] ?></option>
                                            <option >Avilable</option>
                                            <option >Not Avilable</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row text-center my-3">
                            <div class="col-md-12 text-center">
                            <button class="btn btn-transparent" style="background:linear-gradient(66deg,rgb(220,52,85),rgb(252,175,59))">update Information</button>
                            </div>
                        </div>
                    </form>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>