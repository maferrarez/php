<?php include 'lock.php'; 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Usuário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="card-body">

	<?php include 'msg.php';
	include 'menu.php'; 
	include 'conn.php';

	$iduser = $_SESSION['id_user'];

	$sql = "SELECT * FROM user WHERE id_user = $iduser";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{

		$user = mysqli_fetch_assoc($result);

	?>

		<br><h1>Alterar cadastro de usuario</h1>
		<form action="editadouser.php" method="post">

			<input type="hidden" name="id_user"
			value="<?php echo $user['id_user'] ?>">
			
			<p>
				<label>Nome</label><br>
				<input type="text" name="nome"
				value="<?php echo $user['nome_user']; ?>">
			</p>

			<p>
				<label>Senha</label><br>
				<input type="text" name="senha"
				value="<?php echo $user['senha_user']; ?>">
			</p>

			<p>
				<label>E-mail</label><br>
				<input type="email" name="email"
				value="<?php echo $user['email_user']; ?>">
			</p>

			<p>
				<button type="submit" class="btn btn-outline-info">
					Salvar
				</button>

			</p>

		</form>

	<?php
	}
	else
	{
		echo "<h3 class=\"alert alert-info\">Não foi possível carregar o formulário de edição deste usuario.</h3>";
	}

	?>

</body>
</html>