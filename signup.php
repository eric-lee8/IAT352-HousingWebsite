<html>
<head>
	<title>SignUp</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/content_page.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
        <a href="index.php">Home</a>
        <a href="signin.php">Sign In</a>
        <a href="signup.php">Sign Up</a>
        </div>
    </div>



<div class="form_container"> 
<form id="signup" action="signup_post.php" method="POST">

<h2>Sign Up</h2>
<h5>*Easily manage your Favourite Listings</h5>
<h5>*Contact Realtors directly</h5>

 <?php include('errors.php'); ?> 

    <fieldset>
	
	<input type="fname"  name="fname" required placeholder="First Name" >

    </fieldset>
    <fieldset>

	<input type="lname"  name="lname" required placeholder="Last Name" > 

    </fieldset>
    <fieldset>

	<input type="password" name="pw" required placeholder="Password">

    </fieldset>
    <fieldset>

    <input type="password" name="pwconfirm" required placeholder="Repeat Password"> 

    </fieldset>
    <fieldset>

    <input type="email" name="email" required placeholder="Email" > 

    </fieldset>
    <fieldset>

	<button name="submit" type="submit" id="signup-submit" >Sign Up</button>
    </fieldset>

  <fieldset>
    <h3><a href="signin.php">Already a Member?</a></h3>
      </fieldset>
</form>

</div>

</body>

</html>
