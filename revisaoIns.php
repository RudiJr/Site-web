<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$revisao = $_POST['revisao'];
		$data_r = $_POST['data_revisao'];
                $r_feita = $_POST['revisao_feita'];
		$sql = "INSERT INTO revisao (cidade, data_revisao,revisao_feita) VALUES ('$revisao', '$data_r','$r_feita');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: revisao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: revisao.php?ret=ERR');
		}
	}
?>