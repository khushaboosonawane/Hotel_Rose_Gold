<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Users Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Users Information</li>
                </ol>
              </nav>
            </div>
          
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Information</h4>
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
                                <th>Account Create Date</th>
                                <th>User Name</th>
                                <th>User Mobile</th>
                                <th>User Email</th>
                                <th>User Password</th>
                                <th>User image</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($users_info)>0){
                                    foreach($users_info as $key=>$row){
                                        ?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td><?= $row['login_date'] ?></td>
                                            <td><?= $row['user_name'] ?></td>
                                            <td><?= $row['user_mobile'] ?></td>
                                            <td><?= $row['user_email'] ?></td>
                                            <td><?= $row['user_password'] ?></td>
                                            <?php
                                            if($row['user_image']){
                                                ?>
                                               <td>
                                               <img src="<?= base_url() ?>public/upload/user_image/<?= $row['user_image'] ?>" alt="">
                                               </td>
                                                <?php
                                            }else{
                                                ?>
                                                <td>No Image Uploaded</td>
                                                <?php
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="20" class="text-center">No Users Found</td>
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