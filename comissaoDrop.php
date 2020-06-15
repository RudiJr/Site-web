<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM comissao WHERE cod_comissao = '$id';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro excluído com sucesso!";
			header('location: comissao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser excluído!";
			header('location: comissao.php?ret=ERR');
		}
	}
?>