<?php 

include_once("serve/conn.php");

$email = $_POST ['email'];
$senha = $_POST ['senha'];

$sql = "SELECT * FROM user WHERE email='$email' AND senha='$senha'";
$result = mysql_query($sql);

$row = mysql_fetch_assoc($result);

$_SESSION ['nome'] = $row ['nome'];
$_SESSION ['sobrenome'] = $row ['sobrenome'];


echo $_SESSION['nome'];

header("location: home.php");

?>