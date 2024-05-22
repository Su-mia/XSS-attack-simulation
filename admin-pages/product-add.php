<?php

include("../init.php");

if(isset($_POST['add']))
{
    $productname = $_POST['productname'];
    $BrandName = $_POST['BrandName'];
    $Category = $_POST['Category'];
    $Calories = $_POST['Calories'];
    $Sugar = $_POST['Sugar'];
    $Price = $_POST['Price'];
    $Country = $_POST['Country'];
    $Fiber = $_POST['Fiber'];
    $Fats = $_POST['Fats'];
    $Carbohydrate = $_POST['Carbohydrate'];
    $productPic = $_FILES['productPic']['name'];
    $Protein = $_POST['Protein'];
   
    $target = "../assets/img/" . basename($productPic);
    $succ = [];
    $error = [];
    
    // Check if the country exists
    $selectCountry = "SELECT * FROM Country WHERE CountryName = '$Country'";
    $resultCountry = mysqli_query($link, $selectCountry);
    
    if (mysqli_num_rows($resultCountry) == 0) {
        // Insert the country if it doesn't exist
        $insertCountry = "INSERT INTO Country (CountryName) VALUES ('$Country')";
        mysqli_query($link, $insertCountry);
    }
    
    // Check if the category exists
    $selectCategory = "SELECT * FROM Category WHERE CategoryName = '$Category'";
    $resultCategory = mysqli_query($link, $selectCategory);
    
    if (mysqli_num_rows($resultCategory) == 0) {
        // Insert the category if it doesn't exist
        $insertCategory = "INSERT INTO Category (CategoryName) VALUES ('$Category')";
        mysqli_query($link, $insertCategory);
    }

    // Insert the brand
    
    $selectCountry = "SELECT * FROM Country WHERE CountryName = ?";
    $stmtCountry = mysqli_prepare($link, $selectCountry);
    mysqli_stmt_bind_param($stmtCountry, "s", $Country);
    mysqli_stmt_execute($stmtCountry);
    $resultCountry = mysqli_stmt_get_result($stmtCountry);

    if (mysqli_num_rows($resultCountry) == 0) {
        // Insert the country if it doesn't exist
        $insertCountry = "INSERT INTO Country (CountryName) VALUES (?)";
        $stmtInsertCountry = mysqli_prepare($link, $insertCountry);
        mysqli_stmt_bind_param($stmtInsertCountry, "s", $Country);
        mysqli_stmt_execute($stmtInsertCountry);
    }

    // Insert the brand
    $selectBrand = "SELECT * FROM Brand WHERE BrandName = ?";
    $stmtBrand = mysqli_prepare($link, $selectBrand);
    mysqli_stmt_bind_param($stmtBrand, "s", $BrandName);
    mysqli_stmt_execute($stmtBrand);
    $resultBrand = mysqli_stmt_get_result($stmtBrand);

    if (mysqli_num_rows($resultBrand) == 0) {
        $insertBrand = "INSERT INTO Brand (BrandName, CountryName) VALUES (?, ?)";
        $stmtInsertBrand = mysqli_prepare($link, $insertBrand);
        mysqli_stmt_bind_param($stmtInsertBrand, "ss", $BrandName, $Country);
        mysqli_stmt_execute($stmtInsertBrand);
}

    $selectb = "SELECT * FROM ProductS WHERE BrandName = '$BrandName' AND product_name = '$productname' ";
    $resultb = mysqli_query($link, $selectb);
    $check = mysqli_fetch_all($resultb, MYSQLI_ASSOC);

    if(count($check))
    {
        $error['error']="this product already exists in our system , please check it there!";
    
    }

    // Insert the product
    else{

    // Insert the product
    $insertProduct = "INSERT INTO Products VALUES ('', '$productname','$BrandName', '$Category', '$Price', '$Fats', '$Sugar', '$Calories', '$Carbohydrate', '$Protein', '$Fiber', '$productPic')";
    mysqli_query($link, $insertProduct);
    
    move_uploaded_file($_FILES['productPic']['tmp_name'], $target);
    $succ['succ']=  "Product added successfuly ";
   
    }
    
    include("add-products.php");
    exit();
}

?><?php

include("check_logged.php");

include("../init.php");

if(isset($_POST['add']))
{
    $productname = $_POST['productname'];
    $BrandName = $_POST['BrandName'];
    $Category = $_POST['Category'];
    $Calories = $_POST['Calories'];
    $Sugar = $_POST['Sugar'];
    $Price = $_POST['Price'];
    $Country = $_POST['Country'];
    $Fiber = $_POST['Fiber'];
    $Fats = $_POST['Fats'];
    $Carbohydrate = $_POST['Carbohydrate'];
    $productPic = $_FILES['productPic']['name'];
    $Protein = $_POST['Protein'];
   
    $target = "../assets/img/" . basename($productPic);
    $succ = [];
    $error = [];
    
    // Check if the country exists
    $selectCountry = "SELECT * FROM Country WHERE CountryName = '$Country'";
    $resultCountry = mysqli_query($link, $selectCountry);
    
    if (mysqli_num_rows($resultCountry) == 0) {
        // Insert the country if it doesn't exist
        $insertCountry = "INSERT INTO Country (CountryName) VALUES ('$Country')";
        mysqli_query($link, $insertCountry);
    }
    
    // Check if the category exists
    $selectCategory = "SELECT * FROM Category WHERE CategoryName = '$Category'";
    $resultCategory = mysqli_query($link, $selectCategory);
    
    if (mysqli_num_rows($resultCategory) == 0) {
        // Insert the category if it doesn't exist
        $insertCategory = "INSERT INTO Category (CategoryName) VALUES ('$Category')";
        mysqli_query($link, $insertCategory);
    }

    // Insert the brand
    
    $selectCountry = "SELECT * FROM Country WHERE CountryName = ?";
    $stmtCountry = mysqli_prepare($link, $selectCountry);
    mysqli_stmt_bind_param($stmtCountry, "s", $Country);
    mysqli_stmt_execute($stmtCountry);
    $resultCountry = mysqli_stmt_get_result($stmtCountry);

    if (mysqli_num_rows($resultCountry) == 0) {
        // Insert the country if it doesn't exist
        $insertCountry = "INSERT INTO Country (CountryName) VALUES (?)";
        $stmtInsertCountry = mysqli_prepare($link, $insertCountry);
        mysqli_stmt_bind_param($stmtInsertCountry, "s", $Country);
        mysqli_stmt_execute($stmtInsertCountry);
    }

    // Insert the brand
    $selectBrand = "SELECT * FROM Brand WHERE BrandName = ?";
    $stmtBrand = mysqli_prepare($link, $selectBrand);
    mysqli_stmt_bind_param($stmtBrand, "s", $BrandName);
    mysqli_stmt_execute($stmtBrand);
    $resultBrand = mysqli_stmt_get_result($stmtBrand);

    if (mysqli_num_rows($resultBrand) == 0) {
        $insertBrand = "INSERT INTO Brand (BrandName, CountryName) VALUES (?, ?)";
        $stmtInsertBrand = mysqli_prepare($link, $insertBrand);
        mysqli_stmt_bind_param($stmtInsertBrand, "ss", $BrandName, $Country);
        mysqli_stmt_execute($stmtInsertBrand);
}

    $selectb = "SELECT * FROM ProductS WHERE BrandName = '$BrandName' AND product_name = '$productname' ";
    $resultb = mysqli_query($link, $selectb);
    $check = mysqli_fetch_all($resultb, MYSQLI_ASSOC);

    if(count($check))
    {
        $error['error']="this product already exists in our system , please check it there!";
    
    }

    // Insert the product
    else{

    // Insert the product
    $insertProduct = "INSERT INTO Products VALUES ('', '$productname','$BrandName', '$Category', '$Price', '$Fats', '$Sugar', '$Calories', '$Carbohydrate', '$Protein', '$Fiber', '$productPic')";
    mysqli_query($link, $insertProduct);
    
    move_uploaded_file($_FILES['productPic']['tmp_name'], $target);
    $succ['succ']=  "Product added successfuly ";
   
    }
    
    include("add-products.php");
    exit();
}

?>