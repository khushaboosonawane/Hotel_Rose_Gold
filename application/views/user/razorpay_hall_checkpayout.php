<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>




<!doctype html>
<html lang="en">
  <head>
    <?php
    $basic_info=$this->db->query("Select * from basic_info")->result_array();
    ?>
    <title><?= $basic_info[0]['hotel_name'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info['0']['hotel_logo'] ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
      
    <div class="container">
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="text-center">Dont Press Back button payment is in processing</h1>
                <a href="<?= base_url() ?>usercontroller/">
                    <button class="btn btn-primary " onclick="return confirm('Are You Sure To Go Home Page')">Go To Back</button>
                </a>
            </div>
        </div>
    </div>


    <button id="rzp-button1" class="d-none">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form action="<?= base_url() ?>usercontroller/paymentstatus" method="post">
<script>
var options = {
    "key": "<?= $key ?>", // Enter the Key ID generated from the Dashboard
    "amount": "<?= $customerdata['hall_price'] * 100 ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Hotel Rose Gold", //your business name
    "description": "Test Transaction",
    "image": "<?= base_url() ?>public/upload/hotel_logo/<?= $basic_info[0]['hotel_logo'] ?>",
    "order_id": "<?= $order['id'] ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "<?= base_url() ?>usercontroller/paymenthallstatus",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "<?= $customerdata['user_name'] ?>", //your customer's name
        "email": "<?= $customerdata['user_mobile'] ?>",
        "contact": "<?= $customerdata['user_email'] ?>" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "246, Professor Chowk, Savedi, Ahmednagar, Maharashtra 414003"
    },
    "theme": {
        "color": "#ff5031 "
    }
};

var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
document.getElementById('rzp-button1').click();
</script>

</form>
  </body>
</html>