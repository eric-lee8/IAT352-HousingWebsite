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