<?php

include ('server.php'); 


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

            <!-- if the user IS NOT LOGGED IN (backup checker) -->
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

         <!-- IMAGES SECTION -->
         <div class="images_section center">
          <div class="main_image">


           <?php

			//$LISTING_ID WILL NEED TO TAKE IN THE INPUT FROM THE HOME SCREEN
           $listing_id = '';
           $listing_id = $_GET['varname'];
           $_SESSION['listing_id'] = $listing_id;
			// $listing_id = "R2515566";

			//test
           $file_path = "Images/";
           $file_path .= "{$listing_id}/";
           $file_path .= "{$listing_id}_1.jpg";

			// '{$listing_id}'

			// \Images\R2515047

           echo "<a href=" . $file_path . " target=\"blank\">" . "<img src=\"".$file_path."\" alt=\"error\"></a>";
           ?>

           <!-- HTML CODE -->
           <!-- <a href= Images/house_1.jpg target="blank"><img src="Images/house_1.jpg" alt="House 1"></a> -->

         </div>

         <div class="side_image">

           <?php

           $file_path = "Images/";
           $file_path .= "{$listing_id}/";
           $file_path .= "{$listing_id}_2.jpg";

           echo "<a href=" . $file_path . " target=\"blank\">" . "<img src=\"".$file_path."\" alt=\"error\"></a>";

           $file_path = "Images/";
           $file_path .= "{$listing_id}/";
           $file_path .= "{$listing_id}_3.jpg";
           echo "<a href=" . $file_path . " target=\"blank\">" . "<img src=\"".$file_path."\" alt=\"error\"></a>";

           $file_path = "Images/";
           $file_path .= "{$listing_id}/";
           $file_path .= "{$listing_id}_4.jpg";
           echo "<a href=" . $file_path . " target=\"blank\">" . "<img src=\"".$file_path."\" alt=\"error\"></a>";
           ?>


           <!-- HTML CODE -->
           <!-- <a href= Images/house_2.jpg target="blank"><img src="Images/house_2.jpg" alt="House 2"></a> -->
           <!-- <a href= Images/house_3.jpg target="blank"><img src="Images/house_3.jpg" alt="House 3"></a> -->
           <!-- <a href= Images/house_4.jpg target="blank"><img src="Images/house_4.jpg" alt="House 4"></a> -->
         </div>
       </div>


       <!-- MAIN INFORMATION -->
       <div class="main_info center">
       	<div class="main_info_left">

       		<?php 
					//2. Perform database query
       		$query  = "SELECT * ";
       		$query .= "FROM property ";
				//PROPERTY.LISTING_ID WILL NEED TO BE PASSED IN
       		$query .= "WHERE property.listing_id = '{$listing_id}'";
				// $query .= "WHERE 1";
       		$result = mysqli_query($db, $query);
					//Test if there was a query error
       		if (!$result) {
       			die("Database query failed.");
       		}
       		?>

       		<?php
				//3. Display all of the orderNumbers as options
       		while ($row = mysqli_fetch_assoc($result)) {
					// grabs the orderNumber row from the database
       			echo "<h2>$" .$row['price']. "</h2>";
       			echo "<h4>" .$row['address'] . " | " . $row['city'] . "</h4>";
       			echo "<h4>" .$row['baths'] . " baths | " . $row['beds'] . " beds</h4>";
       			echo "<h4>" .$row['sqft'] . " SQFT | " .$row['type'] . "</h4>";
       		}
       		?>
       	</div>
       	<div class="main_info_right">
       		<ul>


       			<!-- ALERT MESSAGE FOR FAVORITING -->
       			<script>
       				function myFunction() {
       					alert("Listing has been added to your favorites!");
       				}
       			</script>

       			<!-- if the user is logged in -->
       			<?php if (isset($_SESSION['email'])) : ?>
       				<!-- display a 'Add to Favorites' button -->
              <form method="post" id="add_to_favorites_form">
                <div class="input-group">
                  <button onclick="myFunction()" type="submit" name="add_to_favorites">Add to Favorites</button>
                </div>

                <?php
                  $_GET['varname'] = $listing_id;
                ?>

              </form>






            <?php endif ?>
          </ul>
        </div>
      </div>


      <!-- DETAILS + INSIDE + OUTSIDE -->
      <div class="details_container center">
        <div class="details">
         <h2>DETAILS</h2>
         <ul>
          <li>Property Type: Single Family</li>
          <li>Property Tax: $5,396 (2020)</li>
          <li>Last Updated: Wed, October 07, 2020</li>
          <li>Location: Urban</li>
          <li>Property Subtype: Freehold</li>
          <li>MLS® #: H4090358</li>
        </ul>
      </div>

      <div class="inside">
       <h2>INSIDE</h2>
       <ul>
        <li>Property Type: Single Family</li>
        <li>Property Tax: $5,396 (2020)</li>
        <li>Last Updated: Wed, October 07, 2020</li>
        <li>Location: Urban</li>
        <li>Property Subtype: Freehold</li>
        <li>MLS® #: H4090358</li>
      </ul>
    </div>

    <div class="outside">
     <h2>OUTSIDE</h2>
     <ul>
      <li>Property Type: Single Family</li>
      <li>Property Tax: $5,396 (2020)</li>
      <li>Last Updated: Wed, October 07, 2020</li>
      <li>Location: Urban</li>
      <li>Property Subtype: Freehold</li>
      <li>MLS® #: H4090358</li>
    </ul>
  </div>
</div>

<hr class="hr">

<!-- MORE INFORMATION -->
<div class="more_information center">
  <h2>SINGLE FAMILY IN DUNDAS</h2>
  <p>A property like this does not come along very often! Very special location, private cul-de-sac and a beautiful setting, this home is situated up high with incredible views of Dundas and the escarpment. Gorgeous setting and treed lot, you will feel like you’re at the cottage or living in a treehouse. Fabulous wraparound deck to enjoy the views, sip your morning coffee or dine outdoors. Home offers charm and character, spacious rooms and abundance of windows. Entertainers kitchen with sitting area or dinette. Large living room and separate den/home office. Don’t overlook the screened in porch! Not only is this a lovely place to enjoy the property but it also serves as perfect private entrance to the den/home office – great space to work from home! Upper level features three spacious bedrooms – notice that the master bedroom features ensuite bathroom. The lower level is currently used as a guest suite and offers a full walk out, separate entrance and patio. This space is fully finished and features completely separate living quarters with kitchen, living room, bedroom, in-suite laundry and full bath. Explore this tranquil property featuring mature gardens, exterior lighting and pathways, hot tub and cedar gazebo. Lots of parking - long interlock driveway leads to attached garage plus separate double driveway. Located close to the Rail Trail, shops, restaurants, schools and McMaster University & Hospital. Don’t be TOO LATE*! *REG TM. RSA
  </p>
</div>


<!-- REALTOR INFORMATION -->
<div class="realtor center">
  <img src="Images/realtor_1.jpg" alt="Realtor headshot" width="500" height="600">

  <div class="realtor_info">

   <?php 
					//2. Perform database query
   $query  = "SELECT * ";
   $query .= "FROM agents ";
   $query .= "INNER JOIN property ";

				//PROPERTY.LISTING_ID WILL NEED TO BE PASSED IN
   $query .= "WHERE agents.agent_ID = property.property_agent_ID ";
   $query .= "AND property.listing_id = '{$listing_id}'";
				// $query .= "WHERE 1";
   $result = mysqli_query($db, $query);
					//Test if there was a query error
   if (!$result) {
    die("Database query failed.");
  }
  ?>

  <?php
				//3. Display all of the orderNumbers as options
  while ($row = mysqli_fetch_assoc($result)) {
					// grabs the orderNumber row from the database
    echo "<h3>" .$row['name']. "</h3>";
    echo "<h5>" .$row['ph_no']. "</h5>";
    echo "<h5>" .$row['email']. "</h5>";
  }
  ?>
</div>
</div>


<!-- FOOTER -->
<footer class="footer">
  <p>Team: $teamname</p>
  <p>Justin Lau, Eric Lee, Lucy Huang</p>
</footer>

<script src="JS/content_page.js"></script>

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