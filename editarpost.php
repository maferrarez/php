<?php include 'lock.php'; 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Post</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="card-body">


	<?php include 'menu.php'; 
	
	$idpost = $_GET['idpost'];

	include 'conn.php';


	$sql = "SELECT * FROM posts WHERE id_post = $idpost";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{

		$posts = mysqli_fetch_assoc($result);

	?>

		<br><h1>Alterar post</h1>
		<form action="editado.php" method="post">
			
			<p>
				<label>Titulo</label><br>
				<input type="text" name="titulo"
				value="<?php echo $posts['titulo']; ?>">
			</p>

			<p>
				<label>Post</label><br>
				<input type="text" name="post"
				value="<?php echo $posts['post']; ?>">
			</p>

			<p>
				<label>Data</label><br>
				<input type="text" name="data"
				value="<?php echo $posts['data']; ?>">
			</p>

			<input type="hidden" name="id_user"
			value="<?php echo $posts['id_user'] ?>">

			<input type="hidden" name="id_post"
			value="<?php echo $posts['id_post'] ?>">

			<p>
				<button type="submit" class="btn btn-outline-info">
					Salvar
				</button>

				<button type="button" onclick="window.history.back()"
				class="btn btn-outline-dark">
					Cancelar
				</button>
			</p>

		</form>

	<?php
	}
	else
	{
		echo "<h3 class=\"alert alert-info\">Não foi possível carregar o formulário de edição deste post</h3>";
	}

	?>

</body>
</html>