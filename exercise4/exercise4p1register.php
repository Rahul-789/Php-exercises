<html>
<head><title>Registration</title></head>
<body>

<?php

require("exercise4p1login_info.php");


if (is_logged_in()) {
	header("Location: exercise4p1index.php"); 
	exit(0);
}

$success = false;

if (isset($_POST["username"]) && isset($_POST["password"])) {
	require("./db2.php");
	$user = mysql_real_escape_string($_POST["username"]);
	$query = "SELECT COUNT(*) FROM users WHERE USERNAME='$user'";
	$result = mysql_query($query, $db);
	$row = mysql_fetch_array($result);
	if ($row["COUNT(*)"] != 0) {
		echo "The user already exists!<br />";
	}
	else {
		$pass = mysql_real_escape_string($_POST["password"]);
		$phone = mysql_real_escape_string($_POST["phone"]);
		$query = "INSERT INTO users VALUES ('$user', '$pass', '$phone')";
		mysql_query($query, $db) or die(mysql_error());
		echo "Registration for $user was successful <br /><br />";
		$success = true;
	}
}
if (!$success) {
?>
	<h1>Registration</h1><br />
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		Phone: <input type="text" name="phone" /><br />
		<input type="submit" />
	</form>
<?php } ?>

<a href="exercise4p1index.php">Home</a><br />
<a href="exercise4p1login.php">Click here to login</a>
</body>
</html>