<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform form validation
    $errors = array();
	// include("signup.php");
     
    // Validate fname and lname (without special characters and non-empty)
    if (!preg_match('/^[a-zA-Z ]+$/', $fname)) {
        
		array_push($errors ,  "First name should only contain letters and spaces.");
    }
    if (!preg_match('/^[a-zA-Z ]+$/', $lname)) {
		array_push($errors ,  "Last name should only contain letters and spaces.");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($errors ,  "Invalid email address.");
    
    }

    // Validate password (8 or more characters and contains special character)
    if (strlen($password) < 8 || !preg_match('/[!@#$%^&*]/', $password)) {
		array_push($errors ,  "Password should be 8 or more characters and contain a special character.");
    }
	if (!empty($errors)) {
		include("signup.php");
	}
	

	// unset($errors);

    // Check if there are any errors
    if (empty($errors)) {
        include("init.php");

        $stmt = mysqli_prepare($link, "SELECT * FROM users WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $errors["signup"] = "This account already exists. Please try again.";
			include("signup.php");
		  

        } else {
            $pwd_hash = md5($password);
            $stmt = mysqli_prepare($link, "INSERT INTO users (fname, lname, email, pass) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $pwd_hash);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            

		   if(!isset($_POST['action']))
		   {
			$suc = "Sign up successfully !";

		   }
          

			include("signup.php");
      echo "success";
			mysqli_close($link);
            exit();
        }
    }

    // Return validation errors
      echo implode("\n", $errors);
}

?>
