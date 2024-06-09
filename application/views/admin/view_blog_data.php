<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Blog Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/blog">Add Blog</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">slider</li>
                </ol>
              </nav>
            </div>
          
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blog Information</h4>
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
                                <th>Update</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>image</th>
                            </tr>
                            </thead>
                           <tbody>
                            <?php
                            if(count($blog_data)>0){
                                foreach($blog_data as $key=>$row){
                                    ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td style="display:flex;">
                                            <a href="<?= base_url() ?>admincontroller/delete_blog_data/<?= $row['blog_id'] ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </a> &nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/edit_blog_data/<?= $row['blog_id'] ?>">
                                                <button class="btn btn-success btn-sm" type="button" >
                                                    <i class="ri-edit-box-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $row['blog_title'] ?></td>
                                        <td><?= $row['blog_subtitle'] ?></td>
                                        <td><?= $row['blog_date'] ?></td>
                                        <td><?= $row['blog_desc'] ?></td>
                                        <td>
                                            <img src="<?= base_url() ?>public/upload/blog_image/<?= $row['blog_img'] ?>" alt="">
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }else{
                                ?>
                                <tr>
                                    <td colspan="20" class="text-center">No Data Found</td>
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