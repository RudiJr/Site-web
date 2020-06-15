<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$cidade = $_POST['cidades'];
		$uf = $_POST['uf'];
		$sql = "UPDATE cidade SET cidade = '$cidade', uf = '$uf' WHERE cod_cidade = '$id';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: cidades.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: cidades.php?ret=ERR');
		}
	}
?>