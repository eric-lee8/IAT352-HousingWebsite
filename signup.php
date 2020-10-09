<html>
<body>
	<div class="header">
  		<h2>Sign Up</h2>
 	</div>

<form action="signup_post.php" method="POST">

<!-- First Name: <input type="text" name="fname" > 
Last Name: <input type="text" name="lname" > -->

<label for="fname"><b>First Name</b></label>
	<input type="firstName" name="fname" required>

<label for="lname"><b>Last Name</b></label>
    <input type="lastName" name="lname" required> 

<br><br>

<label for="pw"><b>Password</b></label>
	<input type="password" name="pw" required>

<label for="pwconfirm"><b>Repeat Password</b></label>
    <input type="password" name="pwconfirm" required> 

<br><br>

<label for="email"><b>E-mail: </b></label>
    <input type="text" name="email" required> 

<br><br>

<input type="submit" name="submit" value="Submit">
</form>

<h3><a href="signin.php">Already have an Account?</a></h3>
</body>
</html>
