<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add Team Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/team">Add Team Member</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/view_team_data">View Team Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Add Team Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_team_data" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="team_id" value="<?= $team_data[0]['team_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Member Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Member Name" aria-label="Username" name="member_name" aria-describedby="basic-addon1" required value="<?= $team_data[0]['member_name'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Member Education</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Member Education" aria-label="Username" name="member_edu" aria-describedby="basic-addon1" required value="<?= $team_data[0]['member_edu'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Member Mobile</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Member Mobile" aria-label="Username" name="member_mobile" aria-describedby="basic-addon1" required value="<?= $team_data[0]['member_mobile'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Member Email</span>
                                        </div>
                                        <input type="email" class="form-control text-white" placeholder="Enter Member Email" aria-label="Username" name="member_email" aria-describedby="basic-addon1" required value="<?= $team_data[0]['member_email'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Member Designation</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Member Designation" aria-label="Username" name="member_desig" aria-describedby="basic-addon1" required value="<?= $team_data[0]['member_desig'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Member Image</span>
                                        </div>
                                        <input type="file" name="member_img" class="form-control" >
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/team_image/<?= $team_data
                                [0]['member_img'] ?>" style="height:100px;width:100px" alt="">
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