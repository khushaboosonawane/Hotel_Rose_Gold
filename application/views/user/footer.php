<!-- ppopup design  -->
<style>
   
#card {
  position: fixed;
  top: 30%;
  left:50%;
  transform:translate(-50%,-50%);
  width: 320px;
  display: block;
  margin: auto;
  text-align: center;
  z-index:999;
  font-family: 'Source Sans Pro', sans-serif;
}
#card1 {
  position: fixed;
  top: 30%;
  left:50%;
  transform:translate(-50%,-50%);
  width: 320px;
  display: block;
  margin: auto;
  text-align: center;
  z-index:999;
  font-family: 'Source Sans Pro', sans-serif;
}

#upper-side {
  padding: 2em;
  /* background: linear-gradient(66deg,rgba(220,52,85),rgb(252,175,59)); */
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}

#checkmark {
  font-weight: lighter;
  fill: #fff;
  margin: -3.5em auto auto 20px;
}

#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}

#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: black;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}
</style>
<?php
if(isset($_SESSION['login_success'])){
?>
<div id='card' class="animated fadeIn">
  <div id='upper-side' style="background: linear-gradient(66deg,rgba(220,52,85,0.6),rgba(252,175,59,0.6));padding:50px">
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <i class="ri-check-double-line" style='font-size:50px;padding:10px;border:1px solid white;border-radius:50%'></i>
  </div>
  <div id='lower-side'>
    <?php
    if(isset($_SESSION['login_success'])){
    ?>
    <p id='message'>
        <?= $_SESSION['login_success'] ?>
    </p>
    <?php
    }
    ?>
    <a href="#" id="contBtn">Close</a>
  </div>
</div>
<?php
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#card").fadeOut(2000);
        },2000)
    })
   
</script>
<script>
    $(document).ready(function(){
        
        $("#contBtn").click(function(){
            $("#card").css({'display':'none'});
        })
    })
</script>
<?php
unset($_SESSION['login_success']);
?>

<?php
if(isset($_SESSION['login_fail'])){
?>
<div id='card1' class="animated fadeIn">
  <div id='upper-side' style="background: red;padding:50px">
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <i class="ri-close-line" style='font-size:50px;padding:10px;border:1px solid white;border-radius:50%'></i>
  </div>
  <div id='lower-side'>
    <?php
    if(isset($_SESSION['login_fail'])){
    ?>
    <p id='message'>
        <?= $_SESSION['login_fail'] ?>
    </p>
    <?php
    }
    ?>
    <a href="#" id="contBtn">Close</a>
  </div>
</div>
<?php
}
?>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#card1").fadeOut(2000);
        },2000)
    })
   
</script>
<script>
    $(document).ready(function(){
        
        $("#contBtn").click(function(){
            $("#card1").css({'display':'none'});
        })
    })
</script>
<?php
unset($_SESSION['login_fail']);
?>

<!-- ppopup design  -->


<!-- Footer -->
<footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-column footer-about">
                            <h3 class="footer-title">About Hotel</h3>
                            <p class="footer-about-text"><?= $basic_info[0]['hotel_information'] ?></p>

                            <div class="footer-language"> <i class="lni ti-world"></i>
                                    <select onchange="location = this.value;">
                                        <option value="#0">English</option>
                                        <option value="#0">German</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Explore</h3>
                            <ul class="footer-explore-list list-unstyled">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="rooms.html">Rooms & Suites</a></li>
                                <li><a href="restaurant.html">Restaurant</a></li>
                                <li><a href="spa-wellness.html">Spa & Wellness</a></li>
                                <li><a href="about.html">About Hotel</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text"><?= $basic_info[0]['hotel_address'] ?></p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone"><span class="flaticon-call"></span>+91 <?= $basic_info[0]['hotel_mobile'] ?></p>
                                <p class="footer-contact-mail"><?= $basic_info[0]['hotel_email'] ?></p>
                            </div>
                            <div class="footer-about-social-list">
                                <a href="<?= $basic_info[0]['instagram_link'] ?>"><i class="ti-instagram"></i></a>
                                <a href="<?= $basic_info[0]['twitter_link'] ?>"><i class="ti-twitter"></i></a>
                                <a href="<?= $basic_info[0]['youtube_link'] ?>"><i class="ti-youtube"></i></a>
                                <a href="<?= $basic_info[0]['facebook_link'] ?>"><i class="ti-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">© Copyright 2024 by <a href="#">DuruThemes.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="<?= base_url() ?>/public/user_assets/js/jquery-3.6.3.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/jquery.isotope.v3.0.2.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/pace.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/scrollIt.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/jquery.magnific-popup.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/YouTubePopUp.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/select2.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/datepicker.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/smooth-scroll.min.js"></script>
    <script src="<?= base_url() ?>/public/user_assets/js/custom.js"></script>
</body>

</html>