<?php
include("check_logged.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../assets/js/script.js"></script>


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
              <h1 class="title-single">Validate proposed products</h1>
            </div>
           
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  validate products
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

        <div class="row menu-container justify-content-between" data-aos="fade-up" data-aos-delay="200">

        <?php include('../init.php'); 

        $query = "SELECT * FROM proposedproducts";

        if ($result=mysqli_query($link,$query))
        {
        // Fetch one and one row
        while ($row=mysqli_fetch_row($result))
        {
          $proid = $row[0];
          $proname = $row[1];
          $probrand =  $row[2];
          $procountry = $row[3];
          $proUderid = $row[4];
          $proCatgname = $row[5];
          $proPrice = $row[6];
          $proPic = $row[13];

          // get user email
          $query2= "SELECT * FROM users  WHERE user_id = $proUderid";
          if ($result2=mysqli_query($link,$query2))
          {
            while ($row2=mysqli_fetch_row($result2))
            {   
              $proUserEmail = $row2[3];  
           ?>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="../assets/img/proposedImg/<?php echo $proPic; ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="more-proposed-info.php?id=<?php echo $proid; ?>"><?php echo htmlspecialchars($proname); ?>, <?php echo htmlspecialchars($probrand); ?></a><span> <?php echo htmlspecialchars($proUserEmail); ?></span>
            </div>
            <div class="menu-ingredients d-flex justify-content-between">
            <?php echo htmlspecialchars($proPrice); ?>,  <?php echo htmlspecialchars( $procountry); ?>,  <?php echo htmlspecialchars( $proCatgname); ?>
              <!-- <li class="nav-item dropdown"> -->
              <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <b> options</b>
               </a>
               <div class="dropdown-menu" aria-labelledby="productDropdown">
               <a class="dropdown-item" href="more-proposed-info.php?id=<?php echo $proid; ?>">See more...</a>
                <a class="dropdown-item" href="#" onclick="ValidateItemInbox('<?php echo $proid; ?>')">Validate</a>
                 <a class="dropdown-item" href="#" onclick="DeleteItemInbox('<?php echo $proid; ?>')">Delete</a>
                
               </div>    
            </div>
          </div>
          <?php
       
      
      }//end inner while
                           
       mysqli_free_result($result2);
      }// end inner if 
        
         
        }//end big while
        mysqli_free_result($result);
      }//end if
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
