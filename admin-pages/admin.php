<?php
include("check_logged.php");
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
  include("../init.php");
  ?>
  <!-- End Header/Navbar -->

  <main id="main">
  <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Admin Dashboard </h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Dashboard
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

  
  <div class="content-wrapper">
            <!-- Content -->
   

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
             
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card" style="background-color: #FFF8D9;" >
                  <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="m-0 me-2"> Welcome To Your Dashboard! </h5><br>
                          <p class="mb-4">
                            check statistics of <span class="fw-bold">users, products and transactions</span>. 
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img src="../assets/img/illustrations/man-with-laptop-light.svg" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.svg" data-app-light-img="illustrations/man-with-laptop-light.svg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 
               
              </div>

                  
               
                <!-- Transactions -->
              <div class="row">
                <?php 

                //all products
                $sql1 ="SELECT COUNT(*) FROM Products";
               
                //all brands
                $sql2="SELECT COUNT(*) FROM Brand";
               
                
                //all categories
                $sql3="SELECT COUNT(*) FROM Category";
                

                //all countries
                $sql4="SELECT COUNT(*) FROM Country";
                
                // all users
                $sql5="SELECT COUNT(*) FROM users";


                // the final numbers 
                $totalProductsResult = mysqli_query($link, $sql1);
                $totalProductsRow = mysqli_fetch_row($totalProductsResult);
                $totalProducts = $totalProductsRow[0];

                $totalBrandsResult = mysqli_query($link, $sql2);
                $totalBrandsRow = mysqli_fetch_row($totalBrandsResult);
                $totalBrands = $totalBrandsRow[0];

                $totalCategoryResult = mysqli_query($link, $sql3);
                $totalCategoryRow = mysqli_fetch_row($totalCategoryResult);
                $totalCategory = $totalCategoryRow[0];

                $totalCountryResult = mysqli_query($link, $sql4);
                $totalCountryRow = mysqli_fetch_row($totalCountryResult);
                $totalCountry = $totalCountryRow[0];

                
                $totalUsersResult = mysqli_query($link, $sql5);
                $totalUsersRow = mysqli_fetch_row($totalUsersResult);
                $totalUsers =  $totalUsersRow[0];

                ?>
                
                <div class="col-md-6 col-lg-4 order-2 mb-4" >
                  <div class="card h-100" style="background-color: #FFF8D9;">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Products Statistics</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">All products</small>
                              <h6 class="mb-0">Products</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0"><?php echo htmlspecialchars($totalProducts);?></h6>
                              <span class="text-muted">product</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">All Brands</small>
                              <h6 class="mb-0">Brands</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0"><?php echo htmlspecialchars($totalBrands);?></h6>
                              <span class="text-muted">Brand</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">All Countries</small>
                              <h6 class="mb-0">countries</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0"><?php echo htmlspecialchars($totalCountry);?></h6>
                              <span class="text-muted">country</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3">
                            <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">All Categories</small>
                              <h6 class="mb-0">Categories</h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h6 class="mb-0"><?php echo htmlspecialchars($totalCategory);?></h6>
                              <span class="text-muted">Category</span>
                            </div>
                          </div>
                        </li>
                       
                        
                      </ul>
                    </div>
                  </div>
                </div>
               <!--/ Transactions -->

              
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                  <div class="card h-100" style="background-color: #FFF8D9;">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Users Statistics</h5>
                        
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-1">
                        <img src="../assets/img/icons/unicons/users-alt.svg" alt="User" class="rounded" style="width: 40px; height: 40px;" />
                        <h2 class="mb-2" style="margin-left: 10px;"><?php echo htmlspecialchars($totalUsers);?> Users</h2>
                      </div>


                    <div id="orderStatisticsChart"></div>
                  </div>
                  <span>The Most wanted Products</span><br>
  
                      <ul class="p-0 m-0"><br>
                      <?php
                        // Retrieve the most searched products
                        $query = "SELECT product_id, COUNT(*) AS search_count FROM search_tracking GROUP BY product_id ORDER BY search_count DESC LIMIT 5";
                        $result = mysqli_query($link, $query);

                        // Display the results
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $product_id = $row['product_id'];
                                $search_count = $row['search_count'];

                                // Get the product details
                                $product_query = "SELECT * FROM Products WHERE product_id = $product_id";
                                $product_result = mysqli_query($link, $product_query);
                                $product = mysqli_fetch_assoc($product_result);
                                ?>
                                <li class="d-flex mb-4 pb-1">
                                  <div class="avatar flex-shrink-0 me-3">
                                    <span class="avatar-initial rounded bg-label-primary">
                                      <i class="bx bx-mobile-alt"></i>
                                    </span>
                                  </div>
                                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                      <h6 class="mb-0"><?php echo $product['product_name'];   ?></h6>
                                      
                                    </div>
                                    <div class="user-progress">
                                      <small class="fw-semibold"><?php echo $search_count; ?> users</small>
                                    </div>
                                  </div>
                                </li>
                                <?php
                            }
                        } else {
                            echo "No search tracking data available.";
                        }
                        ?>

                        
                      </ul>
                    </div>
                  </div>
                </div>
              

                
             
              </div>
              
              </div>
              
           </div>
           </div>
</main>
<!-- End #main -->

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
