<?php

session_start();

// if(isset($_SESSION['email'])) {

// 	$_SESSION['message'] = "You must log in first to view this page.";
// 	header("location: login.php");

// }

if(empty($_SESSION['email'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>

<body>
	<h1>This is the homepage</h1>
	<?php
		if(isset($_SESSION['success'])) : ?>

	<div>
		<h3>
			<?php

			echo $_SESSION['success'];
			unset($_SESSION['success']);
		
			?>
		</h3>
	</div>
<?php endif ?>

<!-- if the user logs in print information about them -->
<?php if (isset($_SESSION['email'])) : ?>
	<h3>Welcome <strong><?php echo $_SESSION['email']; ?></strong></h3>

    <p><a href="logout.php" style="color:red">Logout</a></p>

<?php endif ?>

</body>
</html>