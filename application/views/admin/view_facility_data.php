<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Hotel Facility Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/hotel_facility">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Facility Information</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Facility Information</h4>
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
                                <th> Title </th>
                                <th>  Description </th>
                                <th>Update</th>
                            </tr>
                            </thead>
                           <tbody>
                            <?php
                            if(count($fac_data)>0){
                                foreach($fac_data as $key=>$row){
                                    ?>
                                   <tr>
                                   <td><?= $key+1 ?></td>
                                    <td><?= $row['fac_title'] ?></td>
                                    <td><?= $row['fac_desc'] ?></td>
                                    <td style="display:flex;">
                                        <a href="<?= base_url() ?>admincontroller/delete_fac_data/<?= $row['fac_id'] ?>">
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                            <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </a> &nbsp;&nbsp;
                                        <a href="<?= base_url() ?>admincontroller/edit_fac_data/<?= $row['fac_id'] ?>">
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
                                    <td colspan="20" class="text-center">Data not found</td>
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