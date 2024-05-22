<?php
include("check_loggedUser.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency   - About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <?php 
  include('search.php');
  ?>
  <!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <?php
  include('header.html');
   ?>
  <!-- End Header/Navbar -->

  <main id="main" style="margin-top:3rem ;">

  <section style="background-color: #eee; height:100vh;">
  <div class="container py-5">
   

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="assets/img/add-user.png" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h5>
           
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">First Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['fname'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo  $_SESSION['lname'] ;?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['email'];?></p>
              </div>
            </div>
            <hr>
           
           
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Account type</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['type'];?></p>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <?php
    if($_SESSION['type']=="User")
    {
    ?>
    <div class="row">

    <div class="col-lg-4">
                    <div class="card mb-4" style="background-color: #FFF8D9;">
                    <div class="card-body text-center">
                        <img src="assets/img/illustrations/add.product.svg" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><strong>Propose A New Product</strong></h5>
                        <p class="text-muted mb-1">Dear ALTERFOOD USER you can propose a product to add in our system</p>
                        <p class="text-muted mb-4"></p>
                        <div class="d-flex justify-content-center mb-2">
                        <a href="propose-products.php">
                        <button type="button" class="btn btn-primary">Propose</button>
                        </a>
                        
                        </div>
                    </div>
                    </div>
                    
                </div> 
    </div>
    <?php
    }
    ?>
  </div>
</section>
  </main><!-- End #main -->

  <?php
   include("footer.html");
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
