<!-- REFERENCES -->
<!-- https://www.youtube.com/watch?v=ShbHwaiyOps -->
<!-- https://www.youtube.com/watch?v=qjwc8ScTHnY -->

<?php include('server.php'); ?>

<html>
<head>
	<title>SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/content_page.css">
    <link rel="stylesheet" href="CSS/signup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
            <a href="index.php">Home</a>
            <a href="login.php">Sign In</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>


    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="signup.php">
        <!-- display validation errors here -->
        <?php include('errors.php'); ?>
        
        <div class="input-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php echo $first_name; ?>">
        </div>
        <div class="input-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php echo $last_name; ?>">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="password_confirm">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Log In</a>
        </p>

</form>

</body>

</html>
