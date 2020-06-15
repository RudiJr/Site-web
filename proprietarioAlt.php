<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
                $proprietario = $_POST['proprietario'];
                $cep = $_POST['cep'];
                $fone = $_POST['fone'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
		$sql = "UPDATE proprietario SET proprietario = '$proprietario', cod_proprietario = '$id',cep = '$cep', fone = '$fone', rg = '$rg', cpf = '$cpf' ;";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: proprietario.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: proprietario.php?ret=ERR');
		}
	}
?>
