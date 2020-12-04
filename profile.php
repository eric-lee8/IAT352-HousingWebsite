<?php

include ('server.php'); 

if(empty($_SESSION['email'])) {
  header('location: login.php');
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

  $result = mysqli_query($db, $query);

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

?>

<html lang="en">
<head>
	<title>Edit Profile</title>
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
           <!--  <a href="signup.php">Sign Up</a>
           	<a href="login.php">Log In</a> -->

            <!-- if the user IS NOT logged in (backup checker)-->
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
            <a href="profile.php#" style="color:white">Edit Profile</a>
            <a href="logout.php" style="color:red">Logout</a>
          </div>

        <?php endif ?>
      </div>
    </div>

    <div class="profile_table">


      <div class="header">
        <h2>Edit Profile</h2>
      </div>
      
      <form method="post" action="profile.php"  id="signup">

        <?php
        echo "<h2>Welcome " . $fname . "</h2>";
       		//echo "<h2>" . $_POST['fname'] . "</h2>";
       		//echo "<h2>" . $_POST['lname'] . "</h2>";
        ?>

        <!-- display validation errors here -->
        <?php include('errors.php'); ?>

        <div class="input-group">
          <label>First name</label>
          <input type="text" name="fname" value="<?php echo $fname; ?>">
        </div>

        <div class="input-group">
          <label>Last name</label>
          <input type="text" name="lname" value="<?php echo $lname; ?>">
        </div>

        <div class="input-group">
          <button type="submit" name="edit_profile" class="btn">Save Edits</button>
        </div>

      </form>

    </div>

    <?php
  // 4. Release returned data
    mysqli_free_result($result);
    ?>

  </body>
  </html>

  <?php
  // 5. Close database connection
  mysqli_close($db);
  ?>