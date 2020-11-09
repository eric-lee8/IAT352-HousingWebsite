<html>
<head>
<title>IAT352</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="CSS/content_page.css">

    </head>
    <body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
        <a href="#home">Home</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        </div>
    </div>

	<div class="header">
  		<h2>Sign In</h2>
 	</div>


<form action="signin_post.php" method="POST">

<!-- First Name: <input type="text" name="fname" > 
Last Name: <input type="text" name="lname" > -->

<label for="email"><b>E-mail: </b></label>
    <input type="text" name="email" required> 



<br><br>

<label for="pw"><b>Password</b></label>
	<input type="password" name="pw" required>


<input type="submit" name="submit" value="Submit">
</form>

<h3><a href="signup.php">Don't have an Account?</a></h3>

</body>
</html>
