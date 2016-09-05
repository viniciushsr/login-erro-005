<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	

	<script type="text/javascript" scr="js/bootstrap.js"></script>


</head>
<body>
	<div class="nav">
		<a href="" id="sitename" >Sistema de Login</a>
	</div>



<!-- login painel -->
	<div class="login">
		<div class="title-login" align="center">
			<h1>Faça o Login</h1>
			<a href="">ou <b>Cadastre-se</b></a>
 
		</div>
		<form method="POST" action="login.php">
		<input type="email" placeholder="email" name="email">
		<input type="password" placeholder="senha" name="senha">
		<p>Esqueceu sua Senha ? <a href="">Recupere-a</a></p>
		<input type="submit" value="Entrar">

	</form>


	</div>



</body>
</html>