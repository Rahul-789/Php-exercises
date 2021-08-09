<?php
session_start();
require("exercise4p1login_info.php");

if (is_logged_in()) { ?>

	Welcome, <?php echo $_SESSION['user']; ?><br />
	<a href="exercise4p1logout.php">Logout</a>

<?php } else { ?>

	You are not logged in.<br />
	<a href="exercise4p1login.php">Login</a><br />
	<a href="exercise4p1register.php">Register</a><br />

<?php } ?>