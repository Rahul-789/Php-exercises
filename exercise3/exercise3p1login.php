<html>
<head><title> Login Page </title> </head>
<body>

<?php
$success = false;


if (isset($_POST["username"]) && isset($_POST["password"])) {
    require "./db.php"; 
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $query = "SELECT PASSWORD from users WHERE USERNAME='" . mysql_real_escape_string($user) . "'";
    $result = mysql_query($query, $db) or die(mysql_error());
    $row = mysql_fetch_assoc($result);
    if ($pass == $row["PASSWORD"]) {
        $success = true;
        echo "$user successfully logged in.";
    } else {
        echo "Invalid username or password <br />";
    }
}


if (!$success) { 
    ?>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		<input type="submit" />
	</form>
	<br />
	<br />
	<a href="exercise3p2register.php">Click here to register</a>
<?php }?>
</body>
</html>