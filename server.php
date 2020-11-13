<?php

session_start();

//initialize variables
$first_name = "";
$last_name = "";
$email = "";
$password = "";
$password_confirm = "";
$errors = array();


//connect to the database
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "justin_lau";
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection succeeded
if(mysqli_connect_errno()) {
	// if connection failed, skip the rest of PHP code, and print an error
	die("Database connection failed: " . 
		mysqli_connect_error() . 
		" (" . mysqli_connect_errno() . ")"
	);
}

// if the register button is clicked
if (isset($_POST['register'])) {

	$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
	
	//ensure that form fields are filled properly
	if (empty($first_name)) {
		array_push($errors, "First name is required");
	}
	if (empty($last_name)) {
		array_push($errors, "Last name is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if ($password != $password_confirm) {
		array_push($errors, "The passwords do not match");
	}


	//check db for eisting user with same email
	$email_check_query = "SELECT * FROM members WHERE email = '$email' LIMIT 1";
	$result = mysqli_query($db, $email_check_query);
	$email_in_use = mysqli_fetch_assoc($result);

	if($email_in_use) {
		if($email_in_use['email'] === $email) {
			array_push($errors, "Email is already in use");
		}
	}

	// if there are no errors, save user to database
	if (count($errors) == 0) {
		$encrypt_password = md5($password); // encrypt password before storing in database (security)
		$sql = "INSERT INTO `members` (`fname`, `lname`, `password`, `email`)
				VALUES ('$first_name', '$last_name', '$encrypt_password', '$email')";
		mysqli_query($db, $sql);
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now logged in.";

		header ('location: index.php');
	}
}


//log user in from login page
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	
	//ensure that form fields are filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0) {
		$password = md5($password); //encrypt password before comparing with that from database
		$query = "SELECT * FROM members WHERE email='$email' AND password='$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1) {
			//log user in
			$_SESSION['first_name'] = $first_name;
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header("location: index.php"); //redirect to home page
		} else {
			array_push($errors, "The email/password combination is incorrect");
		}
	}

}

?>
