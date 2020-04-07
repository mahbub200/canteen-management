<?php
  include 'config.php';
?>

<!tutorial>
<html>
	<head>
	<link rel="stylesheet" href="style.css"></link>
	<title>WEB</title>
	<h2 align="center" class="h">Welcome to LOGIN</h2>
	</head>
	<body id="b">
	<center>
	<div id="d">

	<center><form action="login.php" method="POST">

	<b><label>Email</br></label>
	<input name="email" type="email" id="form" placeholder="Enter your email" required>
	</input></br>
	<b><label>Password</br></label>
	<input name="pass" type="password" id="form" placeholder="Enter your Password" required>
	</input>

	<!button work>

	<input name="login" type="submit" id="button" value="LOGIN">
	</input>
	<a href="reg.php"><input name="reg" type="button" id="button" value="REGISTER">
	</input>
	</form>
	</center>

	</center>
	</div>
	</body>
	</html>