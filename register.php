<?php
	require 'dbconfig/config.php'
?>

<!DOCTYPE html>
<html>

<head>

<title>Registration Page</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color:#95a5a6">
		<div id="main-wrapper">
			<center>
				<h2>Registration Form</h2>	
				<img src="images/avatar.png" class="avatar"/>
			</center>

			<form class="myform" action="register.php" method="post">
				<label>Username: </label><br>
				<input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
				<label>Password: </label><br>
				<input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
				<label>Confirm Password: </label><br>
				<input name="cpassword"type="password" class="inputvalues" placeholder="Confirm password" required /><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
				<input type="button" id="back_btn" value="Back"/>
			</form>

			<?php
				if(isset($_POST['submit_btn']))
				{
					echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';
				}

			?>

		</div>
</body>

</html>