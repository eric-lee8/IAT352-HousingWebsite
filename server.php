<?php

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

	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password_confirm = mysql_real_escape_string($_POST['password_confirm']);
	
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
		array_push($errors, "The two passwords do not match");
	}

	// if there are no errors, save user to database
	if (count($errors) == 0) {
		$password = md5($password); // encrypt password before storing in database (security)
		$sql = "INSERT INTO `members` (`fname`, `lname`, `password`, `email`)
				VALUES ('$first_name', '$last_name', '$password', '$email')";
		mysqli_query($db, $sql);

	}

}



?>




</body>
</html>
