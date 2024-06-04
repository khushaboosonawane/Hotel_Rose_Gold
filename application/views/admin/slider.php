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
                    <form action="<?= base_url() ?>admincontroller/save_slider_info" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Title" aria-label="Username" name="slider_title" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Sub Title</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Slider Sub Title" aria-label="Username" name="slider_subtitle" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Slider Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Slider Rating" aria-label="Username" name="slider_rating" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white" >Select Slider Image</span>
                                        </div>
                                        <input type="file" name="slider_image" class="form-control" required >
                                    
                                    </div>
                                </div>
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

            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider Information</h4>
                        <p class="card-description"> 2 Record Display At Time
                        </p>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Srno</th>
                                <th>  Image </th>
                                <th> Title </th>
                                <th>  SubTitle </th>
                                <th> Rating </th>
                                <th>Update</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($slider_info)>0){
                                    foreach($slider_info as $key=>$row){
                                ?>
                                 <tr>
                                    <td><?= $key+1 ?></td>
                                    <td class="py-1" style="word-wrap:break-word">
                                        <img src="<?= base_url() ?>public/upload/slider_image/<?= $row['slider_image'] ?>" alt="image" />
                                    </td>
                                    <td> 
                                        <?= $row['slider_title'] ?> 
                                    </td>
                                    <td> <?= $row['slider_subtitle'] ?> </td>
                                    <td> <?= $row['slider_rating'] ?> </td>
                                    <td style="display:flex;">
                                        <a href="<?= base_url() ?>admincontroller/delete_slider_data/<?= $row['sli_id'] ?>">
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                            <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </a> &nbsp;&nbsp;
                                        <a href="<?= base_url() ?>admincontroller/edit_slider_data/<?= $row['sli_id'] ?>">
                                            <button class="btn btn-success btn-sm" type="button" >
                                                <i class="ri-edit-box-line"></i>
                                            </button>
                                        </a>
                                    </td>
                                    
                                 </tr>
                                <?php
                                    }
                                }else{
                                ?>
                                <tr>
                                    <td colspan="20" class="text-center"> No Record Found </td>
                                </tr>
                                <?php
                                }
                                ?>
                           
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                           
            </div>
          </div>