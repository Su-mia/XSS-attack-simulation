<?php 

include("check_logged.php");

include("../init.php");

$query = "SELECT * FROM products";
$result = mysqli_query($link , $query);



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

  <!-- js -->
  <script src="../assets/js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
              <h1 class="title-single">All Products List  </h1>
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
    <div class="row"  style="background-color: #FFF8D9; border-radius:1rem; padding: 2rem;">

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
             
            </ul>
          </div>
        </div>
       


        
        <div class="row menu-container  justify-content-between" data-aos="fade-up" data-aos-delay="200 " > 
        <script src="../assets/js/script.js"></script>
       <?php
       
       while($row = mysqli_fetch_assoc($result))
       {
          $id = $row['product_id'];
          $productname = $row['product_name'];
          $brandname = $row['BrandName'];
          $catgname =  $row['CategoryName'];
          $price = $row['price'];
          $fat = $row['Fat'];
          $sugar =  $row['Sugar'];
          $calories = $row['Calories'];
          $pic = $row['product_pic'];
         
        
       ?>
         <!-- --------------------element-------------------------------- -->
          <div class="col-lg-5 menu-item filter-starters" >
            <img src="../assets/img/<?php echo $pic; ?>" class="menu-img" alt="">
            <div class="menu-content">
              
              <a href="#"><?php echo $productname." , ".$brandname; ?></a> <span>   <?php echo $price ?> dzd </span>
            </div>
            <div class="menu-ingredients d-flex justify-content-between">
            <?php echo $catgname." , ".$calories." kcal";?> 
              <!-- <li class="nav-item dropdown"> -->
              <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <b> options</b>
               </a>
               <div class="dropdown-menu" aria-labelledby="productDropdown">
               <a class="dropdown-item" href="Edit-products.php?product_Id=<?php echo $id;?>">Edit </a> 
                <a class="dropdown-item" onclick="deleteProduct(<?php echo $id;?>)" href="javascript:void(0);">Delete</a>
                <a class="dropdown-item" href="more-product-info.php?id=<?php echo $id; ?>">See more...</a>
               </div>
               <!-- </li> -->

            </div>
            
          </div>
            <!-- --------------------element-------------------------------- -->

            <?php
        
              }
              ?>

        </div>
       
      

      </div>
    </section><!-- End Menu Section -->

                      
   

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
