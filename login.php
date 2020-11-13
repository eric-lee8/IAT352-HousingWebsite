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
            <a href="index.php#home">Home</a>
            <a href="signup.php">Sign Up</a>
            <a href="#">Log In</a>
        </div>
    </div>


    <div class="header">
        <h2>Log In</h2>
    </div>

    <form method="post" action="login.php">
        <!-- display validation errors here -->
        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Log In</button>
        </div>
        <p>
            Not yet a member? <a href="signup.php">Sign up</a>
        </p>

</body>

</html>
