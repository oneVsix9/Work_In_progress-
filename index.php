<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
		<form action="login.php" method="post">
			<center><img src="img/logo.png" width="105" height="112"></center>
			<h2>Sign in</h2>
			<input type="text" name = "ID" id="userField" placeholder="username" required="required">
			<input type="password" name = "password" id="Password" placeholder="password" >
			<div class="links">
				<a href="#" class="forgot-pass">Forgot Password ?</a>
			</div>
			<input type="submit" id="login" value="Login">
		</form>
	</div>
	<!-- <script src="/js/index.js"></script> -->
</body>
</html>