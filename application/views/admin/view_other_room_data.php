<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Slider Information </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/other_rooms">Add Other Room Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Special Offer Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                            
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Special Rooms Information</h4>
                        <div class="col-md-12 d-flex justify-content-end">
                        <?php echo $this->pagination->create_links(); ?>
                        </div>
                        <div class="table-responsive">
                        <table class="table table-hover text-center text-white table-bordered">
                            <thead>
                            <tr>
                                <th>Srno</th>
                                <th>Update</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
                                <th>Room Name</th>
                                <th>Room Rating</th>
                                <th>Room Description</th>
                                <th>Room Wifi</th>
                                <th>Room Breakfast</th>
                                <th>Room Bed</th>
                                <th>Room Person</th>
                                <th>Room Price</th>
                                <th>Room Image</th> 
                            </tr>
                            </thead>
                             <tbody>
                                <?php
                                if(count($room_data)>0){
                                   foreach($room_data as $key=>$row){
                                    ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td style="display:flex;padding:20px">
                                            <a href="<?= base_url() ?>admincontroller/delete_other_rooms_data/<?= $row['room_id'] ?>">
                                                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure To Delete Record')">
                                                <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </a> &nbsp;&nbsp;
                                            <a href="<?= base_url() ?>admincontroller/edit_other_rooms_data/<?= $row['room_id'] ?>">
                                                <button class="btn btn-success btn-sm" type="button" >
                                                    <i class="ri-edit-box-line"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td><?= $row['category_name'] ?></td>
                                        <td><?= $row['sub_cat_name'] ?></td>
                                        <td><?= $row['room_name'] ?></td>
                                        <td><?= $row['rating'] ?></td>
                                        <td><?= $row['room_desc'] ?></td>
                                        <td><?= $row['wifi_status'] ?></td>
                                        <td><?= $row['room_breakfast'] ?></td>
                                        <td><?= $row['room_bed'] ?></td>
                                        <td><?= $row['person_count'] ?></td>
                                        <td><?= number_format($row['room_price']) ?>&#8377;</td>
                                        <td>
                                            <img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="">
                                        </td>
                                    </tr>
                                    <?php
                                   }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan='20' class='text-center'>No record insertede</td>
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