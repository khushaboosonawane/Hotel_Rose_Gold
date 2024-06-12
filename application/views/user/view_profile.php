<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
        .list-group-item.active {
    background: #06C167 !important;
}
.bg-warning {
    background: linear-gradient(66deg,rgba(220,52,85),rgb(252,175,59)) !important;
}
.modal-content {
        background-color: #fefefe;
        margin: 4% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 70%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
        /*transform: translateY(-100%);*/
    }
    .close {
        float: right;
        text-align: right;
        font-size: 30px;
    }
    .modal-content h2 {
        text-align: center;
        margin-top: -35px;
    }
    .button_div {
        justify-content: center;
        text-align: center;
    }
    .button_div button {
        margin-right: 10px;
        background: #06C167;
        border: 1px solid #06C167;
        padding: 5px 15px;
        color: #FFFFFF;
        border-radius: 2px;
    }
    #addAddressForm input {
        padding: 5px;
    }
    .nice-select {
        padding: 0px !important;
        height: 38px !important;
        line-height: 38px !important;
    }
    
    .add_address_button {
        background: #06C167;
        border: 1px solid #06C167;
        padding: 5px 15px;
        color: #FFFFFF;
        border-radius: 2px;
    }
    
    @media (max-width: 768px) {
        .main_flex_div {
            display: flex;
            flex-direction: column;
        }
        .inner_flex_div {
            min-width: 100% !important;
        }
        .modal-content {
            padding: 10px 0px !important;
            min-width: 95% !important;
            height: 700px;
            overflow: scroll;
        }
        .close {
            margin-right: 10px;
        }
    }
    .list-group-item.active {
    background: linear-gradient(66deg,rgba(220,52,85),rgb(252,175,59)) !important;
}
/* end common class */
.top-status ul {
    list-style: none;
    display: flex;
    justify-content: space-around;
    justify-content: center;
    flex-wrap: wrap;
    padding: 0;
    margin: 0;
}
.top-status ul li {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    background: #fff;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    border: 8px solid #ddd;
    box-shadow: 1px 1px 10px 1px #ddd inset;
    margin: 10px 5px;
}
.top-status ul li.active {
    border-color: #06C167;
    box-shadow: 1px 1px 20px 1px #ffc107 inset;
}
/* end top status */

ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 30px;
}
ul.timeline > li:before {
    content: '\2713';
    background: #fff;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 0;
    left: 5px;
    width: 50px;
    height: 50px;
    z-index: 400;
    text-align: center;
    line-height: 50px;
    color: #d4d9df;
    font-size: 24px;
    border: 2px solid var(--ogenix-primary);
}
ul.timeline > li.active:before {
    content: '\2713';
    background: #28a745;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 0;
    left: 5px;
    width: 50px;
    height: 50px;
    z-index: 400;
    text-align: center;
    line-height: 50px;
    color: #fff;
    font-size: 30px;
    border: 2px solid var(--ogenix-primary);
}
/* end timeline */
    
    
    
    </style>
 <!-- Header Banner -->
 <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="6" data-background="<?= base_url() ?>public/upload/banner_image/hotel_user.jpeg" style="background-position:center center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center caption mt-90">
                    <h5><?= $basic_info[0]['hotel_name'] ?></h5>
                    <h1><?= $user_info[0]['user_name'] ?></h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    if(isset($_SESSION['user_id'])){
    ?>
    <section class="my-5">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <?php
                                    if($user_info[0]['user_image']){
                                        ?>
                                        
                                        <img src="<?= base_url() ?>public/upload/user_image/<?= $user_info[0]['user_image'] ?>" alt="Admin"
                                        class="rounded-circle p-1 bg-warning" style="height:300px;width:300px;object-fit:cover">
                                        <?php

                                    }else{
                                        ?>
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Admin"
                                        class="rounded-circle p-1 bg-warning" style="height:300px;width:300px;object-fit:cover">
                                        <?php
                                    }
                                    ?>
                                    
                                    <div class="mt-3">
                                        <h4><?= $user_info[0]['user_name'] ?></h4>
                                        <p class="text-secondary mb-1">+91 <?= $user_info[0]['user_mobile'] ?></p>
                                    </div>
                                </div>
                                <div class="list-group list-group-flush text-center mt-4">
                                    <a href="#" class="list-group-item list-group-item-action border-0 " onclick="showProfileDetails()">
                                        Profile Informaton
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-0" onclick="showOrderDetails()">Orders</a>
                                    
                                    <a href="#" class="list-group-item list-group-item-action border-0 active d-none"
                                        onclick="showAddressBook()">
                                        <!-- Address Book -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div  id="orderDetails" class="order_card">
                        <div class="card">
                            <div class="card-body">
                                <div class="top-status p-5">
                                    <?php
                                    if(count($order_food)>0){
                                        ?>
                                         <h5>Your Ordered Food</h5>
                                    <ul>
                                        <?php
                                        foreach($order_food as $key=>$row){
                                            ?>
                                             <li>
                                                <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>" alt="" style="max-height:100px;max-width:100px;border-radius:50%;position:relative;top:0px">
                                          
                                             </li>
                                            <?php
                                        }
                                        ?>
                                        
                                    </ul>
                                        <?php
                                    }else{
                                        echo "no";
                                    }
                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-body p-0 table-responsive">
                                <h4 class="p-3 mb-0">Product Description</h4>
                                <table class="table mb-0 table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col"></th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(count($order_food)>0){
                                            $sub_total=0;
                                            foreach($order_food as $key=>$row){
                                                $sub_total += $row['food_price']*$row['order_qty'];
                                                ?>
                                                  <tr>
                                                    <th>
                                                        <img src="<?= base_url() ?>public/upload/food_image/<?= $row['food_image'] ?>"
                                                            alt="product" class="" style="max-height:200px;max-width:200px;border-radius:50%;">
                                                    </th>
                                                    <td><?= $row['food_desc'] ?></td>
                                                    <td>₹<?= number_format($row['food_price']) ?> X <?= $row['order_qty'] ?></td>
                                                    <td><strong>₹<?= number_format($row['food_price']*$row['order_qty']) ?></strong></td>
                                                    <td><span class="badge badge-warning"><?= $row['order_status'] ?></span></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                              <tr>
                                            <th colspan="3">
                                                <span>Status:</span>
                                                <span class="badge badge-success">PAID</span>
                                            </th>
                                            <td>
                                                <span class="text-muted">Total Price</span>
                                                <strong>₹<?= $sub_total ?></strong>
                                            </td>
                                            <td>
                                                <span class="text-muted">Total Paid</span>
                                                <strong>₹<?= $sub_total ?></strong>
                                            </td>
                                        
                                        </tr>
                                            <?php
                                        }else{
                                            ?>
                                            <tr>
                                                <td colspan="20" class="text-center">No Food Order</td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        
                        <div id="profileDetails" class="card" style="display: none;">
                        <div class="card-body">
                            <div class="profile-info">
                                <h5>Profile Information</h5>
                                <p><strong>Name:</strong> <?= $user_info[0]['user_name'] ?></p>
                                <p><strong>Email Address:</strong> <?= $user_info[0]['user_email'] ?></p>
                                <p><strong>Contact:</strong> +91 <?= $user_info[0]['user_mobile'] ?></p>
                                <p>
                                    <a href="<?= base_url() ?>usercontroller/logout_account/<?= $user_info[0]['user_id'] ?>">
                                        <button class="btn btn-primary" onclick='return confirm("Are You Sure To Logout From Your Account")'>Logout</button>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div id="addressBook" class="card" style="display: none;">
                        <div class="card-body">
                            <h5>Address Book</h5>
                            <button class="add_address_button" onclick="showAddAddressModal()">Add Address</button>
                            
                            <div id="addressList">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div id="addAddressModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeAddAddressModal()">&times;</span>
                            <h2>Add Address</h2>
                            <form id="addAddressForm" onsubmit="saveAddress(event)">
                                
                                <div class="col-12 d-flex main_flex_div">
                                <div class="col-4 d-flex flex-column inner_flex_div">
                                    <label for="name">Name:</label>
                                <input type="text" id="name" required><br>
                                </div>
                                <div class="col-4 d-flex flex-column inner_flex_div">
                                    <label for="mobile">Mobile No.:</label>
                                <input type="tel" id="mobile" required pattern="[0-9]{10}">
                                </div>
                                <div class="col-4 d-flex flex-column inner_flex_div">
                                    <label for="pincode">Pin code:</label>
                                <input type="text" id="pincode" required><br>

                                </div>
                                </div>
                                
                                
                                <div class="col-12 d-flex main_flex_div">
                                
                                <div class="col-4 d-flex flex-column inner_flex_div">
                                    <label for="locality">Locality:</label>
                                <input type="text" id="locality" required><br>
                                </div>

                                <div class="col-4 d-flex flex-column inner_flex_div">
                                    <label for="city">City/District/Town:</label>
                                    <input type="text" id="city" required><br>

                                </div>
                                
                                <div class="col-4 d-flex flex-column inner_flex_div">
                                <label for="state">State:</label>
                                <select id="state" required>
                                    <option value="">Select a state</option>
                                    <option value="State 1">State 1</option>
                                    <option value="State 2">State 2</option>
                                    <option value="State 3">State 3</option>
                                </select><br>
                                </div>
                                
                                </div>
                                
                                <div class="col-12 d-flex main_flex_div">
                                <div class="col-12 d-flex flex-column inner_flex_div">
                                    <label for="address">Address:</label>
                                <textarea id="address" required></textarea><br>
                                </div>
                            
                                </div>
                                
                                
                                <div class="col-12 d-flex main_flex_div">
                                <div class="col-6 d-flex flex-column inner_flex_div">
                                    <label for="landmark">Landmark (Optional):</label>
                                <input type="text" id="landmark"><br>

                                </div>
                                <div class="col-6 d-flex flex-column inner_flex_div">
                                <label for="alternatePhone">Alternate Phone (Optional):</label>
                                <input type="tel" id="alternatePhone" pattern="[0-9]{10}"><br>
                                </div>

                                
                                </div>
                                
                                <div class="col-12 d-flex button_div">
                                <button type="submit">Save</button>
                                <button type="button" onclick="closeAddAddressModal()">Cancel</button>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }else{
    ?>
    <section class="my-3">
        <h2 class="text-center">
            Create Account <br>
            <a href="<?= base_url() ?>usercontroller/registration">
                <button class="but-hover color-2">Create Account</button>
            </a>
        </h2>
    </section>
    <?php
    }
    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        
          <script>
          
           function showAddAddressModal() {
        const modal = document.getElementById('addAddressModal');
        modal.style.display = 'block';
        isFormVisible = true;
    }

    function closeAddAddressModal() {
        const modal = document.getElementById('addAddressModal');
        modal.style.display = 'none';
        isFormVisible = false;
    }
          
        function showProfileDetails() {
            hideAllSections();
            document.getElementById('profileDetails').style.display = 'block';
            setActiveLink(0);
        }

        function showOrderDetails() {
            hideAllSections();
            document.getElementById('orderDetails').style.display = 'block';
            setActiveLink(1);
        }

        function showAddressBook() {
            hideAllSections();
            document.getElementById('addressBook').style.display = 'block';
            setActiveLink(2);
        }

        function hideAllSections() {
            document.getElementById('orderDetails').style.display = 'none';
            document.getElementById('profileDetails').style.display = 'none';
            document.getElementById('addressBook').style.display = 'none';
        }

        function setActiveLink(index) {
            document.querySelector('.list-group-item.active').classList.remove('active');
            document.querySelectorAll('.list-group-item')[index].classList.add('active');
        }

        showProfileDetails();
    </script>