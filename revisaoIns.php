<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$data_revisao = $_POST['data_revisao'];
                $revisao_feita = $_POST['revisao_feita'];
                $cod_veiculos = _POST['cod_veiculos'];
		$sql = "INSERT INTO revisao(data_revisao,revisao_feita,cod_veiculos) VALUES ('$data_revisao','$revisao_feita','$cod_veiculos');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: revisao.php?ret=OK');
		}
		else
		{
                        echo "<script>alert($mysqli->error);</script>";
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: revisao.php?ret=ERR');
		}
	}
?>