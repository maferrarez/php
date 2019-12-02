<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Postagens</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
	
	<body class="card-body">
	
	<?php include 'menu.php'; 
		include 'conn.php';?>
	
		<h1><br>Bem-vindo, <?php echo $_SESSION['nome_user']; ?>!</h1>
		
		<h4><br>Últimos posts</h4>
		
		<?php

		$id_user = $_SESSION['id_user'];
		
		// CRIANDO UM SELECT BUSCANDO DADOS DE DUAS TABELAS E RELACIONANDO-AS:
			
		$sql = "SELECT posts.titulo AS 'Título', posts.data AS 'Data', posts.post AS 'Post', user.nome_user AS 'Usuario', posts.id_post AS 'id_post'
			FROM posts INNER JOIN user ON
			posts.id_user = user.id_user 
			WHERE posts.id_user = $id_user
			ORDER BY posts.id_post DESC
			LIMIT 0, 10";
		
		$result = mysqli_query($conn, $sql);
			
		$linhas = mysqli_affected_rows($conn);
			
		if ($linhas > 0)
		{
			
			while ($retorno = mysqli_fetch_assoc($result))
			{
			
				// percorre o array associativo criado a partir da
				// linha atual da tabela e o exibe na tela:
				
				foreach ($retorno as $indice => $valor)
				{

					echo "<b>".$indice.":</b> " . $valor . "<br/>";

				}
				
				$idpost = $retorno['id_post'];

				echo "<br/><td><a href=\"editarpost.php?idpost=$idpost\" class=\"btn btn-warning\">Editar</a></td>";
				echo "<td><a href=\"deletar.php?idpost=$idpost\" class=\"btn btn-danger\"
				onclick=\"return confirm('Deseja excluir este contato?')\">Deletar</a></td><br/>";
				echo "</tr><br/>";

			}
		}


		else
		{
			echo "<h2>Não há posts feitos ainda</h2>";
		}
	
	?>
	
	</body>
</html>