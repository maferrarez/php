<?php  
if(!empty($_GET['msg']))
{ // se recebeu o parâmetro 'msg' via GET

	$msg = $_GET['msg']; // armazena valor recebido

	// testa valor recebido:
	if($msg == 'delSuccess')
	{
		echo "<h3 class=\"alert alert-success\">
		Contato excluído com sucesso!</h3>";
	}
	else if($msg == 'delError')
	{
		echo "<h3 class=\"alert alert-danger\">
		Erro ao excluir contato...</h3>";
	}
	else if ($msg == 'empty') 
	{
		echo "<h5 class=\"alert alert-info\">
		Preencha todos os campos.</h5>";
	}
	else if($msg == 'edtSuccess')
	{
		echo "<h3 class=\"alert alert-success\">
		Alterações salvas com sucesso</h3>";
	}
	else if ($msg == 'edtError')
	{
		echo "<h3 class=\"alert alert-danger\">
		Erro ao editar dados do contato...</h3>";
	}
	else if ($msg == 'loginEmpty')
	{
		echo "<h3 class=\"alert alert-warning\">
		Preencha dados de usuário e senha</h3>";
	}
	else if ($msg == 'erroLogin') 
	{
		echo "<h5 class=\"alert alert-danger\">
		Login não autorizado, tente de novo.</h5>";
	}
	else if ($msg == 'userCad')
	{
		echo "<h3 class=\"alert alert-success\">
		Usuário Cadastrado!</h3>";
	}
	else if ($msg == 'errorCad')
	{
		echo "<h3 class=\"alert alert-danger\">
		Não foi possível cadastrar este usuário (usuário ou e-mail já em uso!)</h3>";
	}
	else if ($msg == 'userOk')
	{
		echo "<h3 class=\"alert alert-success\">
		Dados Atualizados!</h3>";
	}
	else if ($msg == 'userError')
	{
		echo "<h3 class=\"alert alert-danger\">
		Não foi possível atualizar seus dados (usuário ou e-mail já em uso!)</h3>";
	}

}
?>