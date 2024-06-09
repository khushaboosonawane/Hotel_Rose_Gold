<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
 <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Special Food </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/food">Add Food Data</a></li>
                  <li class="breadcrumb-item"><a href="<?= base_url() ?>admincontroller/food_data">View Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page" style="color:#f18444">Edit Food Data</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form action="<?= base_url() ?>admincontroller/update_food" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="food_id" value="<?= $food_data[0]['food_id'] ?>" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Select Category</span>
                                        </div>
                                        <select class="form-control" name="cat_id" aria-label="Default select example" id="cat_id" onchange="getsubcategory()">
                                            <option selected value="<?= $food_data[0]['cat_id'] ?>" class="text-white"><?= $food_data[0]['category_name'] ?></option>
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
                                        <span class="input-group-text text-white" >Select Sub Category</span>
                                        </div>
                                        <select class="form-control" name="sub_cat_id" id="sub_category_data" aria-label="Default select example">
                                            <option selected class="text-white" value="<?= $food_data[0]['sub_cat_id'] ?>"><?= $food_data[0]['sub_cat_name'] ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Food Name</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Food Name" aria-label="Username" name="food_name" value="<?= $food_data[0]['food_name'] ?>" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Food Rating</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Food Rating" aria-label="Username" name="food_rating" value="<?= $food_data[0]['food_rating'] ?>" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Food Description</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter Food Description" aria-label="Username" name="food_desc" aria-describedby="basic-addon1" required value="<?= $food_data[0]['food_desc'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Food Image</span>
                                        </div>
                                        <input type="file" class="form-control text-white" placeholder="Enter Room Description" aria-label="Username" name="food_image" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-4">
                                <img src="<?= base_url() ?>public/upload/food_image/<?= $food_data[0]['food_image'] ?>" style="height:100px;width:100px" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">Food Price</span>
                                        </div>
                                        <input type="number" class="form-control text-white" placeholder="Enter Food Price" aria-label="Username" name="food_price" aria-describedby="basic-addon1" required value="<?= $food_data[0]['food_price'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text text-white">% OFF In Price</span>
                                        </div>
                                        <input type="text" class="form-control text-white" placeholder="Enter % OFF Price" aria-label="Username" name="off_price" aria-describedby="basic-addon1"  value="<?= $food_data[0]['off_price'] ?>" required>
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
                            option+=`<option value="${res[i]['sub_cat_id']}">${res[i]['sub_cat_name']}</option>`
                        }
                        $("#sub_category_data").html(option);
                    }else{
                        option+=`<option>No Record Found</option>`
                        $("#sub_category_data").html(option);
                    }
                })
            }
          </script>