<?php 


error_reporting(0);

$serve = "localhost";
$user = "root";
$pass = "";
$db = "login";


$conn = mysql_connect($serve, $user, $pass);

mysql_select_db($db);




?>