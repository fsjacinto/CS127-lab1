<!-- Login Page -->
<!DOCTYPE html>
<html>

<head>
		<title> Login Page </title>
		<link href="style3.css" rel="stylesheet" type= "text/css">
</head>
<body>
	<div class="all">
		<div class="title"> 
			<h1> Welcome Admin!</h1>
		</div>
		<div class ="content">
			<form name="loginForm" action="view.php" method="post">
				<p>Username: <input type="text" name="username" required></p> <br>
				<p>Password: <input type="password" name="password" required></p>
				<br><p>Username and Password is "admin"</p>

				<div class="button">
					<input type="submit" name="Submit" value="Log In">
				</div>
				<div class="button">
					<a href="Home.html">Cancel</a>
				</div>
			</form>
			<?php
				if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
					echo "Invalid Username/Password";
				}
			?>
		</div>
	</div>
	<div class="banner">
		<video autoplay muted loop id="bg">
			<source src="videos/bg.mp4" type="video/mp4">
			<script>
				document.getElementById("bg").play();
			</script>
		</video>
	</div>
</body>
</html>