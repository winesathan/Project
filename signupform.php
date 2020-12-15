

<!DOCTYPE html>
<html>
<head>
	<title>Signup Form</title>
	<link rel="stylesheet" type="text/css" href="css/signupform.css">
	<link rel="icon" type="image/png" href="img/icon3.png" sizes="16x16">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
	<div class="signupform">
		<p class="signup">Sign up</p>
		<form action="register.php" method="POST">
			<table>
			<input type="text" name="username" id="firstname" class="" placeholder="Username"><br/><br/>
			<!-- <input type="text" name="lastname" id="lastname" class="" placeholder="Last Name"><br/><br/> -->
			<input type="email" name="email" id="email" class="" placeholder="Email"><br/><br/>
			<input type="password" name="pwd" id="pwd" class="" placeholder="Password"><br/><br/>
			<input type="password" name="con_pwd" id="firstname" class="" placeholder="Confirm Password"><br/><br/>
			<input type="date" name="date" id="date" class=""><br/><br/>
			<!-- <input type="radio" name="male" id="gender" class="" value="Male">Male
			<input type="radio" name="female" id="gender" class="" value="Female">Female
			<input type="radio" name="other" id="gender" class="" value="Other">Other<br/><br/> -->
			<input type="submit" name="signup" id="signup" class="" value="SIGN UP">
			</table>
		</form>
		<div>
			<p class="p2">Already have an account? <a href="materialdesign.html">Sign in</a></p>
		</div>
		<div>
			<p class="p3">
				By clicking Sign up agree to our Terms, Data Policy and Cookie Policy.You may receive SMS notifications from us and can opt out at any time
			</p>
		</div>
	</div>
</body>
</html>
