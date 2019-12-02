<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Novo Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="card-body">

	<p>
		<h2><br>Novo Usuário</h2>
	</p>
	<form action="cadastraruser.php" method="post">
		<p>
			<label>Nome de usuário:</label><br>
			<input type="text" name="user">
		</p>
		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha">
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email">
		</p>
		<p>
			<button type="submit" class="btn btn-outline-info">
				Cadastrar
			</button>
			<button type="button" onclick="window.history.back()" class="btn btn-outline-dark">
				Cancelar
			</button>
		</p>
	</form>

	<?php 
	if(!empty($_POST['user']) && !empty($_POST['senha']) && !empty($_POST['email']))
	{
		$user = $_POST['user'];
		$senha 	 = $_POST['senha'];
		$email 	 = $_POST['email'];

		include 'conn.php';

		$sql = "INSERT INTO user (nome_user, senha_user, email_user) VALUES ('$user', '$senha', '$email')";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			header('location:login.php?msg=userCad');
		}
		else
		{
			header('location:cadastraruser.php?msg=errorCad');
		}

	}

	?>

</body>
</html>