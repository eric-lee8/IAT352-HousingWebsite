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

        $user_details[3] = trim($user_details[3]); 
        $user_details[2] = trim($user_details[2]); 
        
        if (strcmp($user_details[3], $email) == 0 && strcmp($user_details[2], $pw) == 0) {
            $success = true;
            $fname = $user_details[0];
            $lname = $user_details[1];
            break;
        }
        else 
        $success=false;
    }

    if ($success) {
        echo "<br> Welcome $fname $lname You have been logged in. <br>";
        echo "<br>  <a href=\"index_logged.php\"> Return to Home</a> <br>";
    } else {
        echo "<br> You have entered the wrong username or password. Please try again. <br>";
        echo "<br>  <a href=\"signin.php\"> Return to Sign In</a> <br>";
    }
    
    
    $file = 'profile.txt';
    
    $text = $fname . " " . $lname;
    $fp = fopen('profile.txt', 'a+');

    if(fwrite($fp, $text))  {
        // echo 'Information was saved to logininfo.txt';

    }
    fclose ($fp); 
	?>
    
    
</body>
</html>
