<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$comissao = $_POST['comissao'];
		$valor = $_POST['valor'];
		$sql = "UPDATE comissao SET comissao = '$comissao', cod_comissao = '$id',valor = '$valor';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: comissao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: comissao.php?ret=ERR');
		}
	}
?>
