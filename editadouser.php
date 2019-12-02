<?php  
if(empty($_POST['id_user']) || empty($_POST['nome']) || 
	empty($_POST['senha']) || empty($_POST['email']))
{
	header('location:editarcadastro.php?msg=empty');
}
else
{
	$id_user	=  $_POST['id_user'];
	$nome_user	= $_POST['nome'];
	$senha_user	= $_POST['senha'];
	$email_user	= $_POST['email'];

	include 'conn.php';

	$sql = "UPDATE user SET 
	nome_user  = '$nome_user',
	senha_user  = '$senha_user',
	email_user = '$email_user'
	WHERE id_user = $id_user";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) >= 0)
	{
		header('location:editarcadastro.php?msg=edtSuccess');
	}
	else
	{
		header('location:editarcadastro.php?msg=edtError');
	}
}

?>