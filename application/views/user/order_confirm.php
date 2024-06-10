<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hotel Rose Gold</title>
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
    <style>
        body{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
            background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://images7.alphacoders.com/362/362619.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
            height:100vh;
            width:100%
        }
        .btn, .btn2 {
        width: 180px;
        height: 50px;
        font-size: 25px;
        text-align: center;
        /* line-height: 100px; */
        color: rgba(255,255,255,0.9);
        border-radius: 50px;
        background: linear-gradient(-45deg, #FFA63D, #FF3D77, #338AFF, #3CF0C5);
        background-size: 600%;
        animation: anime 16s linear infinite;
        line-height:40px;
        }

.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}

@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
    </style>
  </head>
  <body >
      <div>
        <div class="container d-flex justify-content-center align-item-center">
            <div class="row" style="margin:70px auto">
                <div class="col-md-12 text-center my-3">
                    <h4 class="text-white"> <img src="https://png.pngtree.com/png-vector/20221215/ourmid/pngtree-green-check-mark-png-image_6525691.png" style="height:80px;width:80px" alt=""> Done</h4>
                    <h1 class="text-white">
                        Your Order is confirmed !
                    </h1>
                    <p class="lead text-white">Thanks For Order</p>
                    <a href="<?= base_url() ?>usercontroller/">
                        <button class="btn">Done</button>
                    </a>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>