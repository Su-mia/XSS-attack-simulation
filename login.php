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
    <!-- ======= login Single ======= -->
    <section class="signup-login-container">
        <form  action="loginprocess.php" method="post" >
            <div class="col-sm-12 section-t8"></div>
            <fieldset class="signup-login-box">
                <legend>Login</legend>
    
                    <div class="form-group">
                        <input name="userEmail" type="email" class="form-control form-control-lg form-control-a"
                            placeholder="Email">
                            <?php if(isset($errors['userEmail'])): ?>
                             <small class="error"><?php echo $errors['userEmail'] ?? '' ?></small>
                            <?php endif; ?>
                    </div><br>
    
                    <div class="form-group">
                        <input name="userpasswd" type="password" class="form-control form-control-lg form-control-a"
                        placeholder="Password">
                            <?php if(isset($errors['userpasswd'])): ?>
                             <small class="error"><?php echo $errors['userpasswd'] ?? '' ?></small>
                            <?php endif; ?>
                    </div><br>
                    <div class="form-group">
                        
                        <input type="radio" name="userType" value="admin">
                        <label for="">Admin</label> <br>
                        
                        <input type="radio" name="userType" value="user" >
                        <label for="">User</label> <br>

                            <?php if(isset($errors['type'])): ?>
                             <small class="error"><?php echo $errors['type'] ?? '' ?></small>
                            <?php endif; ?>
                    </div><br>

                    
                    
                    <p class="para-2">
                        Don't have an account? <a href="signup.php">Sign Up Here</a>
                    </p>
     
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-a">Login</button>
                </div> 
    
            </fieldset>
            
        </form>


    </section><!-- End login Single-->






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




