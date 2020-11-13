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
            <a href="signup.php">Sign Up</a>
            <a href="login.php">Log In</a>
            <!-- if the user logs in print information about them -->
            <?php if (isset($_SESSION['email'])) : ?>
                <!-- <h3>Welcome <strong><?php echo $_SESSION['email']; ?></strong></h3> -->
                <div style="display: block">
                    <p style="color:white">Welcome <strong><?php echo $_SESSION['email']; ?></strong> <a href="logout.php" style="color:red">Logout</a></p>
                </div>
            <?php endif ?>
        </div>
    </div>

	<!-- IMAGES SECTION -->
	<div class="images_section center">
		<div class="main_image">

			
			<?php

			//$LISTING_ID WILL NEED TO TAKE IN THE INPUT FROM THE HOME SCREEN
			$listing_id = $_SESSION['listing_id']; //hard coded
			// $listing_id = "R2515566";

			//this works
			// $file_path = "Images/R2515047/R2515047_1.jpg";

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
				$result = mysqli_query($connection, $query);
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
				<li><a href="#">Add to Favorites</a></li>
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
			<h3>John Doe</h3>
			<ul>
				<li>Languages: English</li>
				<li>Contact: (604) 111-1111</li>
			</ul>
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
mysqli_close($connection);
?>