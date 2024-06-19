<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> <span style='color:#ff512f'><?= $admin_data[0]['admin_name'] ?></span> Profile Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile Details</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                   
                   
                    </p>
                    <div class="template-demo d-flex justify-content-center align-items-center">
                     <?php
                     if(isset($_SESSION['admin_id'])){
                        ?>
                        <div class="col-md-3">
                          <a href="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_image'] ?>" traget="__self">
                          <img src="<?= base_url() ?>public/upload/admin_image/<?= $admin_data[0]['admin_image'] ?>" style="height:200px;width:200px;object-fit:cover;border-radius:50%;outline:2px solid #ff5031;outline-offset:10px" alt="">
                          </a>
                            
                        </div>
                        <div class="col col-md-6">
                            <table>
                                <tr>
                                    <td>Name : <?= $admin_data[0]['admin_name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile : +91 <?= $admin_data[0]['admin_mobile'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email : <?= $admin_data[0]['admin_email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Designation : <?= $admin_data[0]['admin_desig'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address : <?= $admin_data[0]['admin_address'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <?php
                     }
                     ?>
                    </div>
                  </div>
                  <!-- <div class="card-body">
                    <h4 class="card-title">Dropdown outline</h4>
                    <p class="card-description"> Add class <code>.btn-outline-{color}</code> to the button inside <code>.dropdown</code>
                    </p>
                    <div class="template-demo">
                      <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuOutlineButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuOutlineButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton3">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuOutlineButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton4">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuOutlineButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton5">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuOutlineButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton6">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
             
            </div>
          </div>