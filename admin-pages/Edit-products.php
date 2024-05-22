<?php 
// session_start();
include("../init.php");
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {

//   if($_GET['action'] == 'updateProduct') {
//   $product_Id = $_GET['product_Id'];
//   }
// }
  $product_Id = $_GET['product_Id'];
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
  <script src="../assets/js/formHandler.js"></script>

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
              <h1 class="title-single">Edit Product </h1>
            </div>
           
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Edit product
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
    <div class="card-body" id="editproduct-container">
      <form action="editProcess.php?id=<?php echo $product_Id;?>" method="POST" enctype="multipart/form-data" id="editproduct-form">
        <?php
        $query = "SELECT * from Products where product_Id='$product_Id'";
        if($results = mysqli_query($link, $query)){
          $result = mysqli_fetch_assoc($results);
        ?>
        <div class="row">
          <div class="col-sm-3">
            <label for="productname">Product Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="productname" name="productname" class="form-control" placeholder="<?php echo $result['product_name'];?>" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="BrandName">Brand Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="BrandName" name="BrandName" class="form-control" placeholder="<?php echo $result['BrandName'];?>" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Category">Category Name:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Category" name="Category" class="form-control" placeholder="<?php echo $result['CategoryName'];?>" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Calories">Calories:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Calories" name="Calories" class="form-control" placeholder="<?php echo $result['Calories'];?>" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Sugar">Sugar:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Sugar" name="Sugar" class="form-control" placeholder="<?php echo $result['Sugar'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Price">Price:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Price" name="Price" class="form-control" placeholder="<?php echo $result['price'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Country">Country:</label>
          </div>
          <div class="col-sm-9">
            <?php 
            $brand = $result['BrandName'];
            $query = "SELECT CountryName from Brand where BrandName = '$brand'";
            if($result_country = mysqli_query($link, $query)){
              $country = mysqli_fetch_assoc($result_country);
              $country = $country['CountryName'];
            }
            else{
              $country = "country";
            }
            
            ?>
            <input type="text" id="Country" name="Country" class="form-control" placeholder="<?php echo $country;?>" value="<?php echo $country;?>" >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Fiber">Fiber:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Fiber" name="Fiber" class="form-control" placeholder="<?php echo $result['Fiber'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Fats">Fats:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Fats" name="Fats" class="form-control" placeholder="<?php echo $result['Fat'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Carbohydrate">Carbohydrate:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Carbohydrate" name="Carbohydrate" class="form-control" placeholder="<?php echo $result['Carbohydrate'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="Protein">Protein:</label>
          </div>
          <div class="col-sm-9">
            <input type="text" id="Protein" name="Protein" class="form-control" placeholder="<?php echo $result['Protein'];?>"  >
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <label for="productPic">Product Picture:</label>
          </div>
          <div class="col-sm-9">
            <input type="file" id="productPic" name="productPic" class="form-control-file"  >
          </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-12">
         <button type="submit" name="edit" class="btn btn-primary" style="background-color: #E7B10A; border-color: #E7B10A;">save</button>
        </div>
        </div>
        <?php }?>
      </form>
      <script>
            $(function() {
              $('#editproduct-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                  url: 'editProcess.php',
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
