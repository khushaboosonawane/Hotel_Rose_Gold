<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Website Basic Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Website Basic Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_basic_info" method="post" enctype="multipart/form-data" class="form-sample">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hotel Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white text-white" name="hotel_name" value="<?= $basic_info[0]['hotel_name'] ?>" required placeholder="Enter Hotel Name"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hotel Mobile</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control text-white text-white" name="hotel_mobile" required placeholder="Enter Hotel Mobile" value="<?= $basic_info[0]['hotel_mobile'] ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hotel Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control text-white" name="hotel_email" required placeholder="Enter Hotel Email" value="<?= $basic_info[0]['hotel_email'] ?> "/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hotel Reservation Number</label>
                            <div class="col-sm-9">
                              <input type="number" class="form-control text-white" name="hotel_reservation_number" placeholder="Enter Hotel Reservation Number" required  value="<?= $basic_info[0]['hotel_reservation_number'] ?>"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotel Logo</label>
                                <div class="col-sm-9">
                                <input type="file" class="form-control text-white" name="hotel_logo" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:100px;width:100px" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Enter Hotel Address</label>
                                <div class="col-sm-9">
                                <input type="text" placeholder="Enter Hotel Address" class="form-control text-white" name="hotel_address" required value="<?= $basic_info[0]['hotel_address'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotel Map Link</label>
                                <div class="col-sm-9">
                                <textarea type="text" placeholder="Enter Hotel Map Address" class="form-control text-white" name="hotel_map_link" required ><?= $basic_info[0]['hotel_map_link'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Enter Hotel Owner Name</label>
                                <div class="col-sm-9">
                                <input type="text" placeholder="Enter Hotel Owner Name" class="form-control text-white" name="hotel_owner_name" value="<?= $basic_info[0]['hotel_owner_name'] ?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotel Owner Information</label>
                                <div class="col-sm-9">
                                <input type="text" placeholder="Enter Hotel Owner Information" class="form-control text-white" name="hotel_owner_information" required value="<?= $basic_info[0]['hotel_owner_information'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotel Information</label>
                                <div class="col-sm-9">
                                <input type="text" placeholder="Enter Hotel Information" class="form-control text-white" name="hotel_information" required value="<?= $basic_info[0]['hotel_information'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotel Reservation Details</label>
                                <div class="col-sm-9">
                                <textarea  placeholder="Enter Hotel Reservation Details" class="form-control text-white" name="hotel_reservation_details" required ><?= $basic_info[0]['hotel_reservation_details'] ?></textarea>
                                </div>
                            </div>
                        </div>
                      </div>
                      <p class="card-description"> Social Media </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" placeholder="Enter Facebook Link" requireed name="facebook_link" value="<?= $basic_info[0]['facebook_link'] ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Twitter</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" placeholder="Enter Twitter Link" required name="twitter_link" value="<?= $basic_info[0]['twitter_link'] ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Youtube</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" placeholder="Enter Youtube Link" name="youtube_link" value="<?= $basic_info[0]['youtube_link'] ?>" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Instagram</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control text-white" name="instagram_link" placeholder="Enter Instagram Link" value="<?= $basic_info[0]['instagram_link'] ?>" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 my-3">
                        <div class="form-group text-center">
                            <button class="btn btn-primary">
                                Update Information
                            </button>
                        </div>
                        </div>
                      </div>
                       
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>