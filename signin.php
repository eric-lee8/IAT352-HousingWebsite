<html>
<head>
<title>IAT352</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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



<div class="form_container"> 
<form id="signup" action="signin_post.php" method="POST">

<h2>Sign In</h2>


    <fieldset>
    <input type="email" name="email" placeholder="Email" required> 



    </fieldset>
    <fieldset>


	<input type="password" name="pw" placeholder="Password" required>

	</fieldset>
    <fieldset>


	<button name="submit" type="submit" id="signup-submit" >Sign In</button>
    </fieldset>

     <fieldset>
     	<h3><a href="signup.php">Don't have an Account?</a></h3>
     </fieldset>
</form>


</body>
</html>
