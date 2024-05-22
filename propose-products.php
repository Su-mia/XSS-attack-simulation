<?php 
// session_start();
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
  <!-- ======= Header/Navbar ======= -->

  <?php 
  include('header.html');
  ?>
  <!-- End Header/Navbar -->

  <main id="main">
  <section class="intro-single">
      <div class="container">
          <button type="button" class="btn btn-primary" style="background-color: #E7B10A; border-color: #E7B10A;" onclick="location='admin.php'">
            <i class="bi bi-arrow-left-short"></i>
            <span class="tf-icons bx bxs-left-arrow-alt"></span> 
          </button>
           <br><br>

        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Propose a new Product </h1>

            
              <?php if(!isset($succ['succ']) && !isset($error['error']) ): ?>
                <h3 style="color: green ;">We are happy for your collaboration ! </h3>
              <?php endif; ?>
              <?php if(isset($succ['succ'])): ?>
                             <h2 style="color: green ;"><?php echo $succ['succ'] ?? '' ?></h2>
               <?php endif; ?>
               <?php if(isset($error['error'])): ?>
                             <h5 style="color:red ;"><?php echo $error['error'] ?? '' ?></h5>
               <?php endif; ?>

              
            </div>
           
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Add product
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    
  <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
           
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>
    <div class="row">
                   

<div class="card-header-c d-flex">
<div class="col-lg-8">
  <div class="card mb-4">
    <div class="card-body">
      <form action="product-propose.php" method="POST" enctype="multipart/form-data" id="proposeproduct-form">
        <div class="row">
          <div class="col-sm-3">
            <label for="productname">Product Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="productname" name="productname" class="form-control" required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="BrandName">Product's country Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="BrandName" name="countryName" class="form-control" required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="BrandName">Brand Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="BrandName" name="BrandName" class="form-control" required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Category">Category Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Category" name="Category" class="form-control" required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Calories">Calories:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Calories" name="Calories" class="form-control" required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Sugar">Sugar:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Sugar" name="Sugar" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Price">Price:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Price" name="Price" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Fiber">Fiber:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Fiber" name="Fiber" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Fats">Fats:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Fats" name="Fats" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Carbohydrate">Carbohydrate:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Carbohydrate" name="Carbohydrate" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Protein">Protein:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Protein" name="Protein" class="form-control"  required>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="productPic">Product Picture:</label>
          </div>
          <div class="col-sm-9">
            <input type="file" id="productPic" name="productPic" class="form-control-file"  required>
          </div>
        </div>
        <hr>
        <!-- ERROR -->
        
       
        <div class="row">
        <div class="col-sm-12">
         <button type="submit" name="add" class="btn btn-primary" style="background-color: #E7B10A; border-color: #E7B10A;">Submit</button>
        </div>

        </div>
      </form>
      <script>
            $(function() {
              $('#proposeproduct-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                  url: 'product-propose.php',
                  method: 'POST',
                  data: formData,
                  success: function(response) {
                    alert(response);
                  }
                });
              });
            });

      </script>
    </div>
  </div>
</div>

       
      </div>

  
            
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
