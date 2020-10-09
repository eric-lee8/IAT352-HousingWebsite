<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
	<title>Form Processing</title>
</head>
<body>
	<?php
	// set initial values
	$email = $_POST['email'];
	$pw =  $_POST['pw'];
	$userlist = file ('logininfo.txt');

	$fname = "";
	$lname = "";


$success = false;
foreach ($userlist as $user) {
    $user_details = explode(' ', $user);
    if ($user_details[3] == $email && $user_details[2] == $pw) {
        $success = true;
        $fname = $user_details[0];
        $lname = $user_details[1];
        break;
    }
}

if ($success) {
    echo "<br> Welcome $fname $lname You have been logged in. <br>";
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
	?>

</body>
</html>
