<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cod_cidade = $_POST['cod_cidade'];
                $cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$sql = "INSERT INTO cidade (cod_cidade, cidade, uf) VALUES ('$cod_cidade','$cidade', '$uf');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: cidades.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: cidades.php?ret=ERR');
		}
	}
?>