<html>
<head><title> Login Page </title> </head>
<body>

<?php
session_start();
require("exercise4p1login_info.php");


if (is_logged_in()) {
	header("Location: exercise4p1index.php"); 
	exit(0);
}


if (isset($_POST["username"]) && isset($_POST["password"])) {
	require("./db2.php");	
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$query = "SELECT PASSWORD from users WHERE USERNAME='" . mysql_real_escape_string($user) . "'";
	$result = mysql_query($query, $db) or die(mysql_error());
	$row = mysql_fetch_assoc($result);
	if ($pass == $row["PASSWORD"]) {
		$_SESSION["user"] = mysql_real_escape_string($user);
		if (isset($_POST["remember"])) {
			setcookie("user", mysql_real_escape_string($user), time() + 60*60*24, "/");
		}
		header("Location: exercise4p1index.php");
	} else {
		echo "Invalid username or password <br />";
	}
}
?>


<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
	Username: <input type="text" name="username" /><br />
	Password: <input type="password" name="password" /><br />
	Remember me <input type="checkbox" name="remember" /><br />
	<input type="submit" />
</form>
<br />
<br />
<a href="index.php">Home</a><br />
<a href="exercise4p1register.php">Click here to register</a>
</body>
</html>