<?php 

session_start();


?>
<html>
<head>
	<title>sistema de login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="nav">
	<a href="index.php" id="sitename">sistema de login</a>

	<P><?php echo $_SESSION['nome'] =  $row ['nome'];"".$_SESSION['sobrenome'] = "sobrenome"; ?></P>
</div>

</body>
</html>


