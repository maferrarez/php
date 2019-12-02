<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="card-body">

		<?php include 'msg.php'; ?>
	
	<br><p>
		<h2>Seja Bem-Vindo</h2>	


		<h3>Informe seu login para entrar no site:</h3>
	</p>
	
	<form method="post" action="validar_login.php">
		<p>
			<label>Usuário</label><br>
			<input type="text" name="user">
		</p>
		<p>
			<label>Senha</label><br>
			<input type="password" name="senha">
		</p>
		<p>
			<button type="submit" class="btn btn-outline-info">
				Entrar
			</button>
			<a href="cadastraruser.php">Cadastre-se</a>
		</p>	
	</form>

</body>
</html>