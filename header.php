<?php

include ('server.php'); 

  // 1. Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "justin_lau";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection succeeded
if(mysqli_connect_errno()) {
    // if connection failed, skip the rest of PHP code, and print an error
    die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
    );
}

// set initial values
$fname = "";
$lname = "";
$email = "";
$queryParameter = "";
if(isset($_SESSION['email'])){
    $session_email = $_SESSION['email'];
    //perform query to get the user's data from the database
    $query = "SELECT * ";
    $query .= "FROM members ";
    $query .= "WHERE members.email = '{$session_email}'";
    $query .= $queryParameter;

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Database query failed.");
  }

  while($row = mysqli_fetch_array($result))
  {
      $fname = $row['fname'];
      $lname = $row['lname'];
      $email = $row['email'];
  }
}

// close php tag
?>


<html lang="en">
<head>
    <title>IAT352</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/content_page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- NAVIGATION BAR -->
    <div class="topnav">
        <div class="topnav-right">
            <a href="index.php#home">Home</a>
           <!--  <a href="signup.php">Sign Up</a>
            <a href="login.php">Log In</a> -->
            
            <?php if (!isset($_SESSION['email'])) : ?>
                <div style="display: flex">
                 <a href="signup.php">Sign Up</a>
                 <a href="login.php">Log In</a>
             </div>

         <?php endif ?>

         <!-- if the user logs in print information about them -->
         <?php if (isset($_SESSION['email'])) : ?>
            <div style="display: flex">
                <p style="color:white">Welcome <strong><?php echo $fname; ?></strong></p>
                <a href="profile.php" style="color:white">Edit Profile</a>
                <a href="logout.php" style="color:red">Logout</a>
            </div>

        <?php endif ?>
    </div>
</div>