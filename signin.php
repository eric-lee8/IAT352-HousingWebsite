<html>
<body>
	<div class="header">
  		<h2>Sign In</h2>
 	</div>


<form action="signin_post.php" method="POST">

<!-- First Name: <input type="text" name="fname" > 
Last Name: <input type="text" name="lname" > -->

<label for="email"><b>E-mail: </b></label>
    <input type="text" name="email" required> 



<br><br>

<label for="pw"><b>Password</b></label>
	<input type="password" name="pw" required>


<input type="submit" name="submit" value="Submit">
</form>

<h3><a href="signup.php">Don't have an Account?</a></h3>

</body>
</html>
