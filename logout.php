<?php session_start();
unset($_SESSION['id_user']);
unset($_SESSION['nome_user']);
unset($_SESSION['senha_user']);
unset($_SESSION['email_user']) ;
session_destroy();
header('location:login.php');
?>