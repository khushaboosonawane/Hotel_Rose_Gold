<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Special Offer Room </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/special_offer_room">Add Rooms Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/rooms_data">Rooms Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Special Offer Room</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_special_room" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="room_id" value="<?= $special_rooms_data[0]['room_id'] ?>" id="">
                    <input type="hidden" name="room_type" value="special_offer_room" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Select Category</span>
                                        </div>
                                        <select class="form-control" name="cat_id" aria-label="Default select example" id="cat_id" onchange="getsubcategory()">
                                            <option selected class="text-white" value="<?= $special_rooms_data[0]['cat_id'] ?>"><?= $special_rooms_data[0]['category_name'] ?></option>
                                            <?php
                                            if(count($cat_data)>0){
                                               foreach($cat_data as $key=>$row){
                                            ?>
                                            <option class="text-white" value="<?= $row['cat_id'] ?>"><?= $row['category_name'] ?></option>
                                            <?php
                                               }
                                            }else{
                                            ?>
                                             <option class="text-white">Record Not Found</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Select Sub Category</span>
                                        </div>
                                        <select class="form-control" name="sub_cat_id" id="sub_category_data" aria-label="Default select example">
                                            <option selected class="text-white" value="<?= $special_rooms_data[0]['sub_cat_id'] ?>"><?= $special_rooms_data[0]['sub_cat_name'] ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Room Name" aria-label="Username" name="room_name" value="<?= $special_rooms_data[0]['room_name'] ?>" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Room Rating" aria-label="Username" name="rating"  value="<?= $special_rooms_data[0]['rating'] ?>" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Description</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Room Description" aria-label="Username" name="room_desc" aria-describedby="basic-addon1" required value="<?= $special_rooms_data[0]['room_desc'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" placeholder="Enter Room Description" aria-label="Username" name="room_image" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>public/upload/rooms_image/<?= $special_rooms_data[0]['room_image'] ?>" style="height:100px;width:100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Bed</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Room Bed" aria-label="Username" name="room_bed" aria-describedby="basic-addon1" required value="<?= $special_rooms_data[0]['room_bed'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Person Count</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Room Person Cpount" aria-label="Username" name="person_count" aria-describedby="basic-addon1" required value="<?= $special_rooms_data[0]['person_count'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Breakfast</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Room Breakfast" aria-label="Username" name="room_breakfast" aria-describedby="basic-addon1" required value="<?= $special_rooms_data[0]['room_breakfast'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Room Price</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Room Price" aria-label="Username" name="room_price" aria-describedby="basic-addon1" required value="<?= $special_rooms_data[0]['room_price'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Select wifi status</span>
                                        </div>
                                        <select class="form-control" name="wifi_status" aria-label="Default select example">
                                            <option selected class="text-white"><?= $special_rooms_data[0]['wifi_status'] ?></option>
                                            <option class="text-white">Avilable</option>
                                            <option class="text-white">Not Avilable</option>
                                        </select>
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
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
          <script>
            function getsubcategory(){
                var cat_id=$("#cat_id").val();
                $.ajax({
                    url:'<?= base_url() ?>admincontroller/getSubCateUseAjax/'+cat_id,
                    dataType:'json'
                }).done(function(res){
                    option="";
                    if(res.length>0){
                        for(i=0;i<res.length;i++){
                            option+=`<option value="${res[0]['sub_cat_id']}">${res[0]['sub_cat_name']}</option>`
                        }
                        $("#sub_category_data").html(option);
                    }else{
                        option+=`<option>No Record Found</option>`
                        $("#sub_category_data").html(option);
                    }
                })
            }
          </script>