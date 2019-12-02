<?php include 'lock.php'; 
	include 'conn.php';

if(empty($_GET['idpost'])){
	// se estiver vazio o campo 'id' enviado via GET:
	// redireciona usuário para gerenciar
	header('location:index.php');
}else{

	//receber id:
	$id = $_GET['idpost'];

	//incluir arq de conexão

	$sql = "DELETE FROM posts WHERE id_post = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=delSuccess');
	}
	else
	{
		header('location:index.php?msg=delError');
	}

}

?>