<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Visitor Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Website Information</li>
                </ol>
              </nav>
            </div>
          
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visitor Information</h4>
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
                                <th>User Name</th>
                                <th>User Mobile</th>
                                <th>User Email</th>
                                <th>User Subject</th>
                                <th>User Msg</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(count($contact_info)>0){
                                    foreach($contact_info as $key=>$row){
                                        ?>
                                        <tr>
                                            <td><?= $key+1 ?></td>
                                            <td><?= $row['user_name'] ?></td>
                                            <td><?= $row['user_mobile'] ?></td>
                                            <td><?= $row['user_email'] ?></td>
                                            <td><?= $row['user_subject'] ?></td>
                                            <td><?= $row['user_message'] ?></td>
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