<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>Form Processing</title>
</head>
<body>
	<?php
	// set initial values
	$fname = "";				
	$lname = "";
	$pw = "";
	$pwconfirm = "";
	$email = "";
	$message = "The form was not submitted.";
	
	// detect form submission
	if (isset($_POST["submit"])) {

		if ($_POST['pw']!= $_POST['pwconfirm'])
		{
			echo("Oops! Password did not match! Try again. ");
		} else {
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$pw = $_POST['pw'];
			$email = $_POST['email'];
			echo "The form was submitted successfully.<br />";
		}
		
		$message = "";
	} 
	?>

	<?php
	$file = 'logininfo.txt';

	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pw = $_POST['pw'];
		$email = $_POST['email'];
		$text = $fname . " " . $lname . " " . $pw . " " . $email . "\n";
		$fp = fopen('logininfo.txt', 'a+');

		if(fwrite($fp, $text))  {
			// echo 'Information was saved to logininfo.txt';

		}
		fclose ($fp);    
	}
	?>

	<?php
	echo $message;
	echo "<br />";
	echo "Welcome ".$fname." " .$lname."!"; 

	echo "<br />";
	echo "Your email is ".$email.".";
	echo "<br />";
	?>

</body>
</html>
