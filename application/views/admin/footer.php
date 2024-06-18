<div class="container">
  <div class="row">
    <?php
      if(isset($_SESSION['update_data'])){
        ?>
        <div class="col-md-3" id="msg1" style="position:absolute;top:100px;right:20px;z-index:999">
           <p class="text-center text-white py-2" style="background: linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59));"><?= $_SESSION['update_data'] ?></p>
        </div>
        <?php
      }
      ?>
  </div>
  <div class="row">
      <?php
      if(isset($_SESSION['delete_data'])){
        ?>
        <div class="col-md-3" id="msg2" style="position:absolute;top:100px;right:20px;z-index:999">
           <p class="text-center text-white py-2" style="background: linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59));"><?= $_SESSION['delete_data'] ?></p>
        </div>
        <?php
      }
      ?>
  </div>
  <div class="row">
      <?php
      if(isset($_SESSION['save_data'])){
        ?>
        <div class="col-md-3" id="msg3" style="position:absolute;top:100px;right:20px;z-index:999">
           <p class="text-center text-white py-2" style="background: linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59));"><?= $_SESSION['save_data'] ?></p>
        </div>
        <?php
      }
      ?>
  </div>
  <div class="row">
      <?php
      if(isset($_SESSION['login_data'])){
        ?>
        <div class="col-md-3" id="msg4" style="position:absolute;top:100px;right:20px;z-index:999">
           <p class="text-center text-white py-2" style="background: linear-gradient(66deg, rgba(220, 52, 85), rgb(252, 175, 59));"><?= $_SESSION['login_data'] ?></p>
        </div>
        <?php
      }
      ?>
      
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#msg1").fadeOut(2000);
        },2000)
    })
   
</script>
<?php
unset($_SESSION['update_data']);
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#msg4").fadeOut(2000);
        },2000)
    })
   
</script>
<?php
unset($_SESSION['login_data']);
?>

<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#msg2").fadeOut(2000);
        },2000)
    })
   
</script>
<?php
unset($_SESSION['delete_data']);
?>

<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#msg3").fadeOut(2000);
        },2000)
    })
   
</script>
<?php
unset($_SESSION['save_data']);
?>

</div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url() ?>public/admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url() ?>public/admin_assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>public/admin_assets/js/off-canvas.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/misc.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/settings.js"></script>
    <script src="<?= base_url() ?>public/admin_assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url() ?>public/admin_assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>