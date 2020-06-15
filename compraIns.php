<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$compra = $_POST['compra'];
		$valor_compra = $_POST['vCompra'];
                $data_compra = $_POST['dCompra'];
		$sql = "INSERT INTO compra (compra, valor_compra, data_compra) VALUES ('$compra', '$valor_compra','$data_compra');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: compra.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: compra.php?ret=ERR');
		}
	}
?>