<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="<?= base_url() ?>public/user_assets/img/slider/1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 caption mt-90">
                <!-- <h5><?= $basic_info[0]['hotel_name'] ?></h5> -->
                <h1>Cart Page</h1>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container">
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-12">
                <table class="table table-bordered text-center w-100">
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($room_cart_data)>0){
                          foreach($room_cart_data as $key=>$row){
                            ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $row['room_name'] ?></td>
                                <td><?= number_format($row['room_price']) ?> &#8377;</td>
                                <td><img src="<?= base_url() ?>public/upload/rooms_image/<?= $row['room_image'] ?>" alt="" style="height:200px;width:200px"></td>
                                <td>
                                    <a href="<?= base_url() ?>usercontroller/book_room/<?= $row['room_id'] ?>">
                                        <button class="btn btn-primary">Book</button>
                                    </a>
                                </td>
                            </tr>
                            <?php
                          }  
                        }else{
                            ?>
                            <tr>
                                <h2 class="text-center">No Room Added Into Cart</h2>
                                <h4 class="text-center">
                                    <a href="<?= base_url() ?>usercontroller/">
                                        <button class="btn btn-primary">Order Product </button>
                                    </a>
                                </h4>
                            </tr>
                            <?php
                        }
                    }else{
                        ?>
                        <a href="<?= base_url() ?>usercontroller/userprofile">
                            <h2>You Have No Account !...</h2>
                            <button class="btn btn-dark">Create An Account</button>
                        </a>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-8">
                <table class='table text-center'>
                    <?php
                    if(isset($_SESSION['user_id'])){
                        if(count($food_cart_data)>0){
                            $sub_total=0;
                            foreach($food_cart_data as $key=>$row){
                                $sub_total+=$row['qty']*$row['food_price'];
                                ?>
                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $row['food_name'] ?></td>
                                    <td><?= number_format($row['food_price']) ?> &#8377;</td>
                                    <td class="d-flex justify-content-around">
                                       <button class='btn btn-primary' onclick="increaseValue(<?= $row['food_id'] ?>)">+</button> 
                                       <input type="text" style='height:20%;width:20%;text-align:center' value="<?= $row['qty'] ?>" name="qty" id="quantity_value<?= $row['food_id'] ?>">
                                       <button class="btn btn-danger" onclick="decreaseValue(<?= $row['food_id'] ?>)">-</button>
                                    </td>
                                    <td>
                                         <span id='totalprice<?= $row['food_id'] ?>'>
                                            <?= number_format($row['food_price']*$row['qty']) ?>
                                        </span> &#8377;</td>
                                    <td>
                                        <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="" style="height:200px;width:200px;padding:20px">
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                                <tr>
                                    <td colspan="4">SubTotal</td>
                                    <td colspan="4" style='text-align:left'><?= number_format($sub_total) ?> &#8377;</td>
                                </tr>
                            <?php
    
                        }else{
                            ?>
                            <tr>
                                <!-- <h2 class="text-center">No Food Added Into Cart</h2> -->
                            </tr>
                            <?php
                        }
                    }
                    
                    ?>
                </table>
            </div>
            <div class="col-md-4">
                <?php
                if(isset($_SESSION['user_id'])){
                    if(count($food_cart_data)>0){
                        ?>
                          <table class="table">
                        <tr>
                            <th>Subtotal</th>
                            <th><?= number_format($sub_total) ?> &#8377;</th>
                        </tr>
                        <tr>
                            <th>Charges</th>
                            <th>0 &#8377;</th>
                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <th><?= number_format($sub_total) ?> &#8377;</th>
                        </tr>
                        <tr>
                            <th colspan="2" style="text-align:center">
                                <a href="<?= base_url() ?>usercontroller/confirm_address">
                                    <button class='btn btn-success'>Proceed To Checkout</button>
                                </a>
                            </th>
                        </tr>
                    </table>
                        <?php
                    }
                }
                
                ?>
            </div>
        </div>
    </div>
</div>
<!-- create table order_food (order_id int primary key auto_increment,food_id int,user_id int,order_date varchar(2000),order_status varchar(200)); -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function increaseValue(pro_id){
        
        $.ajax({
            url:'<?= base_url() ?>usercontroller/increase_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
            cal(pro_id);
            
        })
        cal(pro_id);
        location.reload()
    }
    function decreaseValue(pro_id){
        $.ajax({
            url:'<?= base_url() ?>usercontroller/decrease_cart_qty/'+pro_id,
            dataType:'json'
        }).done(function(responce){
            $("#quantity_value"+pro_id).val(responce);
            cal(pro_id);
        })
        cal(pro_id);
        location.reload()

    }
</script>


<script>
  function select_all(elem){
    var data=document.getElementsByClassName("chk_box");
    for(i=0;i<data.length;i++){
      data[i].checked=elem.checked;
    }
    if(elem.checked){
      // document.getElementById("button").style.display="block";
      
    }
  }
</script>

<script>
    function cal(pro_id){
       $.ajax({
        url:'<?= base_url() ?>usercontroller/cal_total/'+pro_id,
        dataType:'json'
       }).done(function(res){
        console.log(res);
        $("#totalprice"+pro_id).html(res);
       })

        
    }
    cal()
</script>
