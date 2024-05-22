<?php
include("check_logged.php");
include("../init.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if($_GET['action'] == 'deleteProduct') {
        $product_Id =$_GET['product_Id'];
        $delete = "DELETE FROM `Products` WHERE product_id = '$product_Id'";
        mysqli_query($link, $delete);
        header('location:all-products.php');
        exit();
    }

}


?>