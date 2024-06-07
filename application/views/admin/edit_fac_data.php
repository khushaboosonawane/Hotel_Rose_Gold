<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/hotel_facility">Add Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_facility_data">View Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_facility_info" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="fac_id" value='<?= $fac_data[0]['fac_id'] ?>' id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Facility Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Facility Title" aria-label="Username" name="fac_title" aria-describedby="basic-addon1" value="<?= $fac_data[0]['fac_title'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Facility Description</span>
                                        </div>
                                        <textarea class="form-control text-white" placeholder="Enter Facility Description" aria-label="Username" name="fac_desc" aria-describedby="basic-addon1" required><?= $fac_data[0]['fac_desc'] ?></textarea>
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
          </div>