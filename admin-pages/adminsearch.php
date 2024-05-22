<?php
include("../init.php");         
?>
<div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search for alternatives</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a" action="../searchProcess.php" method="post" >
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Food name</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="name" name="foodName" required>
            </div>
          </div>
          
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Category">Category</label>
             
              <select class="form-control form-select form-control-a" id="Category" name="Category">
              <option>Any</option>
                <?php
                 $query = "SELECT DISTINCT CategoryName FROM Category";
                 $result2 = mysqli_query($link, $query);
                while ($row = mysqli_fetch_assoc($result2)) {
                  ?>
                <option> <?php echo $row['CategoryName'] ; ?> </option>;
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="brand_name">Brand name</label>
              <select class="form-control form-select form-control-a" id="brand_name" name="brand_name">
                <option>Any</option>

                <?php
                 $query = "SELECT DISTINCT BrandName FROM brand";
                 $result3 = mysqli_query($link, $query);
                while ($row = mysqli_fetch_assoc($result3)) {
                  ?>
                <option> <?php echo $row['BrandName']; ?> </option>;
                <?php
                }
                ?>
              </select>
            </div>
          </div>
         
            <h3 class="title-d">filters</h3>

            <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="country">country</label>
              <select class="form-control form-select form-control-a" id="country" name="country">
              <option>All</option>
              <?php
                 $query = "SELECT DISTINCT CountryName FROM country";
                 $result4 = mysqli_query($link, $query);
                while ($row = mysqli_fetch_assoc($result4)) {
                echo '<option>' . $row['CountryName'] . '</option>';
                }
                ?>
              </select>
            </div>
          </div>

            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Calories</label>
                <select class="form-control form-select form-control-a" name="Calories">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
          
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">fat</label>
                <select class="form-control form-select form-control-a" name="Fat">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Carbohydrate</label>
                <select class="form-control form-select form-control-a" id="Carbohydrate" name="Carbohydrate">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Protein</label>
                <select class="form-control form-select form-control-a" id="protein" name="Protein">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Fiber</label>
                <select class="form-control form-select form-control-a" id="fiber" name="Fiber">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Sugar</label>
                <select class="form-control form-select form-control-a" id="sugar" name="Sugar">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
            <div class="col-md-3 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2">Price</label>
                <select class="form-control form-select form-control-a" id="price" name="price">
                  <option>more</option>
                  <option>less</option>
                  <option selected>All</option>
                </select>
              </div>
            </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b" value="Find" name="findAlter">Find alternative</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->
