<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cod_item = $_POST['cod_item'];
                $it_venda = $_POST['it_venda'];
		$cod_venda = $_POST['uf'];
		$sql = "INSERT INTO item_venda (cod_item, it_venda, uf) VALUES ('$cod_item','$it_venda', '$cod_venda');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: item_venda.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: item_venda.php?ret=ERR');
		}
	}
?>