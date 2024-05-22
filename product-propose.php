<?php
include("check_loggedUser.php");
include("init.php");

if(isset($_POST['add']))
{
    $productname = $_POST['productname'];
    $BrandName = $_POST['BrandName'];
    $Category = $_POST['Category'];
    $Calories = $_POST['Calories'];
    $Sugar = $_POST['Sugar'];
    $Price = $_POST['Price'];
    $Country = $_POST['countryName'];
    $Fiber = $_POST['Fiber'];
    $Fats = $_POST['Fats'];
    $Carbohydrate = $_POST['Carbohydrate'];
    $productPic = $_FILES['productPic']['name'];
    $Protein = $_POST['Protein'];
     // $proUser_id = $_SESSION['user_id'];
     $proUser_id = 1;
    $target = "assets/img/proposedImg/" . basename($productPic);
    
    $succ = [];
    $error = [];
    
    $selectb = "SELECT * FROM ProductS WHERE BrandName = '$BrandName' AND product_name = '$productname' ";
    $resultb = mysqli_query($link, $selectb);
    $check = mysqli_fetch_all($resultb, MYSQLI_ASSOC);
   
    if(count($check))
    {
        $error['error']="this product already exists in our system , please check it there!";
      
    }

    // Insert the product
    else{
        $insertProduct = "INSERT INTO proposedproducts VALUES ('', '$productname','$BrandName','$Country','$proUser_id', '$Category', '$Price', '$Fats', '$Sugar', '$Calories', '$Carbohydrate', '$Protein', '$Fiber', '$productPic')";
        mysqli_query($link, $insertProduct);
        
        move_uploaded_file($_FILES['productPic']['tmp_name'], $target);
        $succ['succ']=  "You product was sent to the admin successfully to validate it  ";

    }
   
 
    include("propose-products.php");
    unset($succ['succ']);
    exit();
}

?>
