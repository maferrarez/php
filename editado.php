<?php  
if(empty($_POST['id_post']) || empty($_POST['titulo']) || 
	empty($_POST['post']) || empty($_POST['data']) || empty($_POST['id_user']))
{
	header('location:login.php?msg=empty');
}
else
{
	$id_post = $_POST['id_post'];
	$titulo	= $_POST['titulo'];
	$post	= $_POST['post'];
	$data	= $_POST['data'];
	$id_user= $_POST['id_user'];

	include 'conn.php';

	$sql = "UPDATE posts SET 
	titulo  = '$titulo',
	post  = '$post',
	data = '$data'
	WHERE id_post = $id_post";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) >= 0)
	{
		header('location:index.php?msg=edtSuccess');
	}
	else
	{
		header('location:editarpost.php?msg=edtError');
	}
}

?>