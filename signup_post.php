<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>Sign Up Form Processing</title>
</head>
<body>
	<?php

	session_start();

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "justin_lau";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//$db = db_connect();

	  // Test if connection succeeded
	if(mysqli_connect_errno()) {
	    // if connection failed, skip the rest of PHP code, and print an error
	    die("Database connection failed: " . 
	        mysqli_connect_error() . 
	        " (" . mysqli_connect_errno() . ")"
    );
}

	// set initial values
	$fname = "";				
	$lname = "";
	$pw = "";
	$pwconfirm = "";
	$email = "";
	$errors = array();

	// detect form submission for sign up
	if (isset($_POST["submit"])) {

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pw = $_POST['pw'];
		$pwconfirm = $_POST['pwconfirm'];
		$email = $_POST['email'];
		
/*
		if(empty($fname)) {
			array_push($errors, "First name is required");
		}
		if(empty($lname)) {
			array_push($errors, "Last name is required");
		}
		if(empty($pw)) {
			array_push($errors, "Password is required");
		}

		if(empty($email)) {
			array_push($errors, "Email is required");
		}

		*/

		
		if($pw != $pwconfirm) {
			array_push($errors, "The two passwords do not match");
			echo "The two passwords do not match<br />";
		}

		if (count($errors) == 0) {
			$password = md5($pw); // encrypts pw before storing into database
			$sql = "INSERT INTO members (fname, lname, password, email) VALUES ('$fname', '$lname', '$password', '$email')";
			mysql_query($connection, $sql);
			$_SESSION['fname'] = $fname;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); //redirects to home page after success
		}

	}




// logging in from sign in page
	if(isset($_POST['login'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email)) {
			array_push($errors, "Email is required");
		}
		if(empty($password)) {
			array_push($errors, "Password is required");
		}
		if (count($errors) == 0) {
			$password = md5($password); //encrypts password before comparing with the one in database
			$query = "SELECT * FROM members WHERE email='$email' AND password='$password'";
			$result = mysqli_query($db, $query);

			if (mysqli_num_rows($result) == 1) {
				//log user in
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php'); //redirects to home page after success
			} else {
				array_push($errors, "The email/password combination is incorrect");
			}
		}



			mysql_query($connection, $sql);
	}


	//log out
	if(isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['email']);
		header('location: signin.php');
	}

	 ?>




</body>
</html>
