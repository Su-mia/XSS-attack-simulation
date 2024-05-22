<?php
session_start();
include("../init.php");
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {

//     if($_GET['action'] == 'submitUpdate') {
//     $product_Id = $_GET['product_Id'];
//     }}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Get the product ID from the query string parameter
//     $product_Id = $_GET['id'];
// }

if(isset($_POST['edit']))
{
    $product_Id = $_GET['id'];

    if (!empty($_POST['productname'])) {
        $product = $_POST['productname']; 
        $update = "UPDATE Products SET product_name = '$product' WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Calories'])) {
        $calories = $_POST['Calories'];
        $update = "UPDATE Products SET Calories = $calories WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Sugar'])) {
        $sugar = $_POST['Sugar'] ;
        $update = "UPDATE Products SET Sugar = $sugar WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Price'])) {
        $price = $_POST['Price'];
        $update = "UPDATE Products SET price = $price WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Fiber'])) {
        $fiber = $_POST['Fiber'];
        $update = "UPDATE Products SET Fiber = $fiber WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Fats'])) {
        $fats = $_POST['Fats'];
        $update = "UPDATE Products SET Fat = $fats WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Carbohydrate'])) {
        $carbohydrate = $_POST['Carbohydrate'];
        $update = "UPDATE Products SET Carbohydrate = $carbohydrate WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Protein'])) {
        $protein = $_POST['Protein'];
        $update = "UPDATE Products SET Protein = $protein $productname WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Country'])) {
    $country = $_POST['Country'];
    $selectCountry = "SELECT * FROM Country WHERE CountryName = '$country'";
    $resultCountry = mysqli_query($link, $selectCountry);
    
    if (mysqli_num_rows($resultCountry) == 0) {
        // Insert the country if it doesn't exist
        $insertCountry = "INSERT INTO Country (CountryName) VALUES ('$country')";
        mysqli_query($link, $insertCountry);
    }
    $brandName_query = "SELECT * FROM Products WHERE product_id = $product_Id";
    $result = mysqli_query($link, $brandName_query);
    $row = mysqli_fetch_assoc($result);
    $brandName = $row['BrandName'];

    $update = "UPDATE Brand SET CountryName = '$country' WHERE BrandName = '$brandName'";
    $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['BrandName'])) {
    $brandName = $_POST['BrandName'];
    $selectb = "SELECT * FROM Brand WHERE BrandName = ?";
    $stmt = mysqli_prepare($link, $selectb);
    mysqli_stmt_bind_param($stmt, "s", $brandName);
    mysqli_stmt_execute($stmt);
    $resultb = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultb) == 0) {
        $insertBrand = "INSERT INTO Brand (BrandName, CountryName) VALUES (?, ?)";
        $stmt = mysqli_prepare($link, $insertBrand);
        mysqli_stmt_bind_param($stmt, "ss", $brandName, $country);
        mysqli_stmt_execute($stmt);
    }

    $update = "UPDATE Products SET BrandName = '$brandName' WHERE product_id = '$product_Id'";
    $sql = mysqli_query($link, $update);
    }

    if (!empty($_POST['Category'])) {
        $category = $_POST['Category'];
        // Check if the category exists
        $selectCategory = "SELECT * FROM Category WHERE CategoryName = '$category'";
        $resultCategory = mysqli_query($link, $selectCategory);
    
        if (mysqli_num_rows($resultCategory) == 0) {
            // Insert the category if it doesn't exist
            $insertCategory = "INSERT INTO Category (CategoryName) VALUES ('$category')";
            mysqli_query($link, $insertCategory);
        }

        $update = "UPDATE Products SET CategoryName = '$category' WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
    }

    if (isset($_FILES['productPic']) && $_FILES['productPic']['error'] !== UPLOAD_ERR_NO_FILE) {
        $productPic = $_FILES['productPic']['name'];
        $target = "../assets/img/" . basename($productPic);
        $update = "UPDATE Products SET product_pic = '$productPic' WHERE product_id = '$product_Id'";
        $sql = mysqli_query($link, $update);
        move_uploaded_file($_FILES['productPic']['tmp_name'], $target);
    }
    
    header('location:all-products.php');
    exit();
}

?>
