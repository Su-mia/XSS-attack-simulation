<?php
   session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency   - Index</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  .error{
    color: red;
    font-weight: bold;
  }
  .suc{
    color: green;
    font-weight: bold;
  }
</style>
<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <?php 
  include('search.php');
  
  ?><!-- End Property Search Section -->>


  <!-- ======= Header/Navbar ======= -->
  <?php
    include('header.html');
  ?>
  <!-- End Header/Navbar -->

  <main id="main">
    <!-- ======= signup Single ======= -->
    <section class="signup-login-container">
    <form action="sign.php" method="post" role="form" id="FormId">
            <div class="col-sm-12 section-t8"></div>
            <fieldset class="signup-login-box">
                <legend>Sign Up</legend>

                    <div class="form-group">
                        <input id="fname" type="text" name="fname" class="form-control form-control-lg form-control-a"
                            placeholder="First Name" >
                    </div><br>

                    <div class="form-group">
                        <input id="lname" type="text" name="lname" class="form-control form-control-lg form-control-a"
                            placeholder="Last Name">
                    </div><br>

                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control form-control-lg form-control-a"
                            placeholder="Email">
                    </div><br>

                    <div class="form-group">
                        <input id="pass" name="password" type="password" class="form-control form-control-lg form-control-a"
                            placeholder="Password(6 or more characters)" >
                    </div><br>
                             <?php if(isset($errors['signup'])): ?>
                             <small class="error"><?php echo $errors['signup'] ?? '' ?></small>
                            <?php endif; ?>
                           
                            <?php if(!isset($errors['signup']) && !empty($errors) ): ?>
                             <small class="error"><?php 
                              foreach($errors as $k => $v)
                              {
                                echo $errors[$k]."<br>";

                              }
                               ?></small>
                            <?php endif; ?>
                            
                            <small id="suc" class="suc" >

                            <?php if(isset($suc)): ?>
                            <?php echo $suc ?? '' ?>
                            <?php endif; ?>
                              
                            </small>
                    <p class="para-2">
                        Already have an account? <a href="login.php">Login here</a>
                    </p>

                <div class="col-md-12 text-center">
                    <button onclick=" submitForm()" type="submit" name="signup" class="btn btn-a">Sign up</button>
                </div>
               

            </fieldset>
        </form>

    </section><!-- End signup Single-->

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
  <script src="assets/js/script.js"></script>

</body>

</html>