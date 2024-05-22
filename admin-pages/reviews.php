<?php
include("check_logged.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency - About</title>
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

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="./review.css">

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
              <h1 class="title-single">Add New Review</h1>
              <div id="message"></div>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Add Review
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
              <form action="review-add.php" method="POST" enctype="multipart/form-data" id="addreview-form">
                <div class="row">
                  <div class="col-sm-3">
                    <label for="BrandName">Comment:</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" id="BrandName" name="review_content" class="form-control" required>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit"  name="add" class="btn btn-primary" style="background-color: #E7B10A; border-color: #E7B10A;">Add</button>
                  </div>
                </div>
              </form>
              <script>
              $(function() {
                $('#addreview-form').submit(function(event) {
                  event.preventDefault();
                  var formData = $(this).serialize();

                  $.ajax({
                    url: 'review-add.php',
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                      $('#reviews').prepend('<div class="review"><p>' + $('input[name="review_content"]').val() + '</p></div>');
                      $('#addreview-form')[0].reset();
                    
                      setTimeout(function() {
                        location.reload();
                      }, 100);
                    }
                  });
                });
              });
            </script>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Display Reviews Section -->
    <div class="row">
        <div class="col-lg-8 reviews-container">
          <h2>Reviews</h2>
          <div id="reviews">
            <?php
            include('../init.php'); 
            $query = "SELECT * FROM reviews ORDER BY review_date DESC";
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="review">';
              echo '<p>  <b>review : </b>' . ($row['review_content']) . '</p>';
              echo '<div class="review-date"> <b>Date : </b>' . date('F j, Y, g:i a', strtotime($row['review_date'])) . '</div>';
              echo '</div>';
            }
            ?>
            
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
