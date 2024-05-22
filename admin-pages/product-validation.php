<?php
include("check_logged.php");


include("../init.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] == 'ValidateItemInbox') {
        $productID = $_GET['proid'];
        $selectProduct = "SELECT * FROM proposedproducts WHERE proProduct_id = '$productID'";
        $resultProduct = mysqli_query($link, $selectProduct);
        $row = mysqli_fetch_row($resultProduct);

        $proname = $row[1];
        $probrand = $row[2];
        $procountry = $row[3];
        $proCatgname = $row[5];
        $proPrice = $row[6];
        $proFat = $row[7];
        $proSugar = $row[8];
        $proCalories = $row[9];
        $proCarbohydrate = $row[10];
        $proProtein = $row[11];
        $proFiber = $row[12];
        $productPic = $row[13];

        // Check if the country exists
        $selectCountry = "SELECT * FROM Country WHERE CountryName = '$procountry'";
        $resultCountry = mysqli_query($link, $selectCountry);

        if (mysqli_num_rows($resultCountry) == 0) {
            // Insert the country if it doesn't exist
            $insertCountry = "INSERT INTO Country (CountryName) VALUES ('$procountry')";
            mysqli_query($link, $insertCountry);
        }

        // Check if the category exists
        $selectCategory = "SELECT * FROM Category WHERE CategoryName = '$proCatgname'";
        $resultCategory = mysqli_query($link, $selectCategory);

        if (mysqli_num_rows($resultCategory) == 0) {
            // Insert the category if it doesn't exist
            $insertCategory = "INSERT INTO Category (CategoryName) VALUES ('$proCatgname')";
            mysqli_query($link, $insertCategory);
        }

        // Insert the brand
        $selectBrand = "SELECT * FROM Brand WHERE BrandName = '$probrand'";
        $resultBrand = mysqli_query($link, $selectBrand);

        if (mysqli_num_rows($resultBrand) == 0) {
            $insertBrand = "INSERT INTO Brand (BrandName, CountryName) VALUES ('$probrand', '$procountry')";
            mysqli_query($link, $insertBrand);
        }

        // Insert the product
        $insertProduct = "INSERT INTO Products (product_name, BrandName, CategoryName, price, Fat, Sugar, Calories, Carbohydrate, Protein, Fiber, product_pic) VALUES ('$proname', '$probrand', '$proCatgname', '$proPrice', '$proFat', '$proSugar', '$proCalories', '$proCarbohydrate', '$proProtein', '$proFiber', '$productPic')";
        mysqli_query($link, $insertProduct);

        $newProductID = mysqli_insert_id($link); // Get the auto-generated product ID

        $source = "../assets/img/proposedImg/" . $productPic;
        $destination = "../assets/img/" . $productPic;

        if (file_exists($source)) {
            if (rename($source, $destination)) {
                // File moved successfully
                $updateImagePath = "UPDATE Products SET product_pic = '$productPic' WHERE product_id = '$newProductID'";
                mysqli_query($link, $updateImagePath);
            }
        }

        $deletepro = "DELETE FROM proposedproducts WHERE proProduct_id = '$productID'";
        mysqli_query($link, $deletepro);

        header('location: admin.php');
        exit();
    }
    if ($_GET['action'] == 'DeleteItemInbox') {

        $productID = $_GET['proid'];
        $deletepro = "DELETE FROM proposedproducts WHERE proProduct_id = '$productID'";
        mysqli_query($link, $deletepro);
        // header('location: admin.php');
        
        exit();

    }
}
