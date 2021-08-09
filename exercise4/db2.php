
<?php
include_once('./../exercise3/dummy2.php');

$db = mysql_connect("localhost", "root", '') or die(mysql_error());

mysql_select_db("6470exercise", $db) or die(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS users (USERNAME VARCHAR(20) NOT NULL, PASSWORD VARCHAR(20) NOT NULL, PHONE VARCHAR(10) NOT NULL, UNIQUE (USERNAME))") or die(mysql_error());
?>