<?php session_start(); 
	
	$user  = $_POST['user'];
	$senha = $_POST['senha'];
	
	include 'conn.php';
	
	$sql = "SELECT * FROM user WHERE nome_user = '$user'  
	AND senha_user = '$senha' ";

	$result = mysqli_query($conn, $sql);
	
	$linhas = mysqli_affected_rows($conn);
	
	if ( $linhas > 0 ) 
	{
		$usuario = mysqli_fetch_assoc($result);
		$_SESSION['id_user']		= $usuario['id_user'];
		$_SESSION['nome_user'] 		= $usuario['nome_user'];
		$_SESSION['senha_user']  	= $usuario['senha_user'];
		$_SESSION['email_user']		= $usuario['email_user'];
		
		header('location:index.php');
	}
	else 
	{
		
		header ('location:login.php?msg=erroLogin');
		echo $sql;
	}
?>