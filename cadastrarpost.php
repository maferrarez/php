<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="card-body">
	
	<?php include 'menu.php'; ?>


	<h1>Novo post:</h1>

	<form action="cadastrarpost.php" method="post">
		

		<p>
			<label>Titulo:</label><br>
			<input type="text" name="titulo">
		</p>

		<p>
			<label>Post:</label><br>
			<input type="text" name="post">
		</p>

		<p>
			<label>Data:</label><br>
			<input type="text" name="data">
		</p>

		<p>
			<button type="submit" class="btn btn-outline-info">Salvar</button>
		</p>

	</form>

	<?php  

	// verificar se os dados do form foram preenchidos
	if(!empty($_POST['titulo']) && !empty($_POST['post']) && !empty($_POST['data']))
	{
		// armazenar dados em variaveis
		$titulo = $_POST['titulo'];
		$post 	= $_POST['post'];
		$data 	= $_POST['data'];

		// incluir arquivo de conexão
		include 'conn.php';

		$user = $_SESSION['id_user'];

		// criar o comando sql para executar no bd
		$sql = "INSERT INTO posts 
		(titulo, post, data, id_user)
		VALUES ('$titulo', '$post', '$data', '$user')";

		// executar no banco de dados conectado, o
		// comando sql criado acima
		$result = mysqli_query($conn, $sql);

		// verificar se o comando sql foi bem sucedido
		// (se foi, ele 'afetou linhas no mysql')
		if(mysqli_affected_rows($conn) > 0)
		{
			echo "<h3 class=\"alert alert-success\">Post cadastrado com sucesso!</h3>";
		}
		else
		{
			echo '<h3 class="alert alert-danger">Erro ao cadastrar o post: ' . mysqli_error($conn) . '</h3>';
		}

	}
	?>

</body>
</html>