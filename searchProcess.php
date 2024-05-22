<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {

  echo "<script>
  alert('You have to login first, please');
  window.location.href='login.php';
  </script>";

}


include("init.php");

	if(isset($_POST["findAlter"]))
	{
		$foodName = $_POST["foodName"];
		$Category = $_POST["Category"];
		$brand_name = $_POST["brand_name"];
        $country = $_POST["country"];

		// prepare the mysql query statement and bind parameters
        $query = "SELECT * from Products where product_name='$foodName'";

        if($Category != "Any")
        {$query .= " AND CategoryName='$Category'";}
        if($brand_name!="Any")
        {$query .= " AND BrandName='$brand_name'";}

        $query = mysqli_query($link,$query,);
        $results = mysqli_fetch_assoc($query);
        if(!$results){
            if($_SESSION['type'] == "User"){
                echo "<script>
            alert('Our database does not have this product, \\n add it in the suggestions section!');
            window.location.href='propose-products.php';
            </script>";
            }if($_SESSION['type'] == "Admin"){
            echo "<script>
            alert('The database does not have this product, \\n add it in the Add product section!');
            window.location.href='admin-pages/add-products.php';
            </script>";}}

            //to track the most searched 
            $product_id = $results['product_id'];

            // Insert the product_id into the search_tracking table
            $insert_query = "INSERT INTO search_tracking (product_id) VALUES ('$product_id')";
            mysqli_query($link, $insert_query);
            
        // Define an array to hold the filter names
        $filters = array("price", "Fat", "Sugar", "Calories", "Carbohydrate", "Protein", "Fiber");

        // Loop through the filter names and create a new array with the filter values as the values
        $filter_values = array();
        foreach ($filters as $filter) {
        $filter_values[$filter] = $results[$filter];
        }
  
        // Start building the SQL query
        $sql = "SELECT * FROM Products WHERE 1=1";

        if($Category != "Any")
        {$sql .= " AND CategoryName='$Category'";}
       
        if($country != "All")
        {
            $query_3= "SELECT Brand.BrandName FROM Brand JOIN Products ON Brand.BrandName = Products.BrandName WHERE CountryName ='$country'";
            $result_3 = mysqli_query($link, $query_3);

            $brandNames = array(); // Create an empty array to store the brand names
            while ($row_3 = mysqli_fetch_assoc($result_3)) {
                $brandNames[] = "'" . $row_3['BrandName'] . "'"; // Store each brand name in the array
            }
            if (!empty($brandNames)) {
                $sql .= " AND BrandName IN (" . implode(",", $brandNames) . ")"; // Construct the SQL query with the brand names
            }
            else{
                // echo "the country: $country does not have the alternative that you want";
                echo "<script>
                alert('the country: '$country' does not have the alternative that you want');
                </script>";
                }
        }
        
        // Loop through the filter options and add the corresponding SQL clauses
        foreach ($filter_values as $filter_name => $value) {
            $selected_option = $_POST[$filter_name];
            if ($selected_option != "All") {
            $sql .= " AND $filter_name ";
            if ($selected_option == "less") {
                $sql .= "<= $value";
            } else {
                $sql .= ">= $value";
            }
            }
        }
        
        // Prepare the query
        $result_search = mysqli_query($link, $sql);
        $_SESSION['searched'] = true;

        $rows = array();
        while ($row = mysqli_fetch_assoc($result_search)) {
            $rows[] = $row;
        }
        $_SESSION['rows'] = $rows;

        mysqli_close($link);

		
	}
	else
	{
		print "<a href='index.php'> Go to home page </a>";
        die();
	}

header("location:search-result.php");
exit();


?>