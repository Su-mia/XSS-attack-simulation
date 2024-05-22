<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include('../init.php'); 
    if (isset($_POST['review_content']) && !empty(trim($_POST['review_content']))) {
        $review_content = mysqli_real_escape_string($link, trim($_POST['review_content']));

        $query = "INSERT INTO reviews (review_content) VALUES ('$review_content')";
        if (mysqli_query($link, $query)) {
            echo "Review added successfully.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($link);
        }
    } else {
        echo "Please enter a review.";
    }
} else {
    echo "Invalid request method.";
}

mysqli_close($link);
?>
