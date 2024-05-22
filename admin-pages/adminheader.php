<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="../index.php">Alter<span class="color-b">Foodz<style>  </style></span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <!-- <a class="nav-link active" href="index.php">Home</a> -->
            <a class="nav-link " href="../index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="../about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="../search-result.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin.php">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Monitor Products
            </a>
            <div class="dropdown-menu" aria-labelledby="productDropdown">
              <a class="dropdown-item" href="all-products.php">All Products</a>
              <a class="dropdown-item" href="add-products.php">Add Product</a>
              <a class="dropdown-item" href="validate-product.php">Validate Product</a>
            </div>
          </li>


          
          <?php
           
           if (@!$_SESSION['loggedin'] == true) {
            
          ?>
            
          <li class="nav-item">
            <a class="nav-link " href="login.php">Login</a>
          </li>
            
          <?php     
            }
          ?>
     
        </ul>
      </div>

      <button type="button" style="margin-right: 1rem;" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
      <?php
           
           if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            
      ?>
            
            <div class="btn-group " >
            <a class="  hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <button type="button" style="margin-right: 1rem;" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-person-circle"></i>
              </button>
            </a>
            <ul class="dropdown-menu   ">
            <li><a class="dropdown-item" href="#"><?php echo $_SESSION['fname']."<br>". $_SESSION['lname']."<br><b>".$_SESSION['type']."</b>"?></a></li>
            
             <li><hr class="dropdown-divider"></li>
            
             <li><a class="dropdown-item" href="../userAccount.php">My account</a></li>
             <li><hr class="dropdown-divider"></li>

             <li><a class="dropdown-item" href="../logout.php">logout</a> </li>
            </ul>
            </div>     
            
      <?php     
           }
      ?>
     
    
      

    </div>
  </nav><!-- End Header/Navbar -->