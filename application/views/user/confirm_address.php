<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?= $basic_info[0]['hotel_name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" />
  </head>
  <body>
        <!-- <div>
            <div class="container my-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <h2 class='text-center my-3'>Confirm Address</h2>
                    </div>
                    <div class="col-md-8 border p-5">
                        <form action="<?= base_url() ?>usercontroller/save_address" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Deliver To</span>
                                        <input type="text" class="form-control" placeholder="Enter Deliver Name" aria-label="Username" name="deliver_to" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">country</span>
                                        <input type="text" class="form-control" placeholder="Enter Country" aria-label="Username" name="country" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">State</span>
                                        <input type="text" class="form-control" placeholder="Enter State" aria-label="Username" name="state" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">District</span>
                                        <input type="text" class="form-control" placeholder="Enter District" aria-label="Username" name="dist" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Taluka</span>
                                        <input type="text" class="form-control" placeholder="Enter Taluka" aria-label="Username" name="tal" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Street</span>
                                        <input type="text" class="form-control" placeholder="Enter Street" aria-label="Username" name="street" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Pincode</span>
                                        <input type="number" class="form-control" placeholder="Enter Pincode" aria-label="Username" name="pincode" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <h3>Enter Bank Details</h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Bank Name</span>
                                        <input type="text" class="form-control" placeholder="Enter Bank Name" aria-label="Username" name="bank_name" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Bank Account Number</span>
                                        <input type="text" class="form-control" placeholder="Enter Bank Account Number" aria-label="Username" name="bank_account_number" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Bank IFSC Code</span>
                                        <input type="text" class="form-control" placeholder="Enter Bank Account Number" aria-label="Username" name="bank_ifsc" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Total Amount</span>
                                        <input type="text" class="form-control" placeholder="Enter Bank Account Number" aria-label="Username" name="amount" value="<?= number_format($total) ?> &#8377;" aria-describedby="basic-addon1" readonly>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class='btn btn-primary'>Confirm Address</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container py-3 min-vh-100 d-flex flex-column">
        <h1>
            <img src="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>" style="height:90px;width:90px;object-fit:cover" alt="">
            Confirm Your Address</h1>
            <div class="card shadow rounded-3 my-auto">
                <div class="card-header p-3 h2" style="background:linear-gradient(66deg,rgba(220,52,85),rgb(252,175,59))">
                    Address & Payment
                </div>
                <div class="card-body p-4">
                    <form role="form" action="<?= base_url() ?>usercontroller/checkFoodAddress" class="row" method="post">
                    <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Deliver To</span>
                                        <input type="text" class="form-control" placeholder="Enter Deliver Name" aria-label="Username" name="deliver_to" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">country</span>
                                        <input type="text" class="form-control" placeholder="Enter Country" aria-label="Username" name="country" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">State</span>
                                        <input type="text" class="form-control" placeholder="Enter State" aria-label="Username" name="state" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">District</span>
                                        <input type="text" class="form-control" placeholder="Enter District" aria-label="Username" name="dist" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Taluka</span>
                                        <input type="text" class="form-control" placeholder="Enter Taluka" aria-label="Username" name="tal" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Street</span>
                                        <input type="text" class="form-control" placeholder="Enter Street" aria-label="Username" name="street" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Pincode</span>
                                        <input type="number" class="form-control" placeholder="Enter Pincode" aria-label="Username" name="pincode" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <h3>Enter Payment Details</h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Deliverd Name</span>
                                        <input type="text" class="form-control" placeholder="Enter Delivered Name" aria-label="Username" name="user_order_name" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Delivered Mobile</span>
                                        <input type="number" class="form-control" placeholder="Enter Delivered mobile Number" aria-label="Username" name="user_order_mobile" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Delivered Email</span>
                                        <input type="email" class="form-control" placeholder="Enter Delivered Email" aria-label="Username" name="user_order_email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Total Amount</span>
                                        <input type="text" class="form-control" placeholder="Enter Bank Account Number" aria-label="Username" name="amount" value="<?= $total ?>" aria-describedby="basic-addon1" readonly>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button class='btn btn-primary'>Proceed To Pay</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
  </body>
</html>