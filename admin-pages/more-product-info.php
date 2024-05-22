<?php
include("check_logged.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AlterFoodz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
  include('adminsearch.php');
  ?>
  <!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <!-- ======= Header/Navbar ======= -->

  <?php 
  include('adminheader.php');
  ?>
  <!-- End Header/Navbar -->

  <?php

include("../init.php");
$Product_id = $_GET['id'];               
$query = "SELECT * FROM products WHERE Product_id = $Product_id";
$result = mysqli_query($link, $query);
 $row = mysqli_fetch_assoc($result);
?>

  <main id="main">


  <section class="intro-single">
      <div class="container">
      <button type="button" class="btn btn-primary" style="background-color: #E7B10A; border-color: #E7B10A;" onclick="location='all-products.php'">
            <i class="bi bi-arrow-left-short"></i>
            <span class="tf-icons bx bxs-left-arrow-alt"></span> 
          </button>
           <br><br>
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Results</h1>
              <span class="color-text-a">more information</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Validate products</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  More information
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
           
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>
    <div class="row">
                   

    <div class="card-header-c d-flex">
    <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
          
                  <img src="../assets/img/<?php echo $row['product_pic']; ?>" alt="" class="img-a img-fluid"
                    alt="user-avatar"
                    class="d-block rounded"
                    height="100"
                    width="100"
                    id="uploaddedAvatar"
                   />
                  
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d"><?php echo $row['BrandName']; ?> <?php echo $row['product_name']; ?> </h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Calories:</strong>
                        <span><?php echo $row['Calories']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Sugar:</strong>
                        <span><?php echo $row['Sugar']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>price:</strong>
                        <span><?php echo $row['price']; ?></span>
                      </li>
                      <!-- <li class="d-flex justify-content-between">
                        <strong>country:</strong>
                        <span><?php //echo $row['Country']; ?></span>
                      </li> -->
                      <li class="d-flex justify-content-between">
                        <strong>Fiber:</strong>
                        <span>
                        <?php echo $row['Fiber']; ?>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Fats:</strong>
                        <span><?php echo $row['Fat']; ?></span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Carbohydrate:</strong>
                        <span><?php echo $row['Carbohydrate'] ; ?> </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Protein:</strong>
                        <span><?php echo $row['Protein']; ?></span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
             
</div>

            
   </main><!-- End #main -->

  <?php
   include("adminfooter.html");
  ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
