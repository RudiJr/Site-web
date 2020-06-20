<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		
		$valor_compra = $_POST['valor_compra'];
                $data_compra = $_POST['data_compra'];
                $cod_veiculos = $_POST['cod_veiculos'];
                $cod_proprietario = $_POST['cod_proprietario'];
		$sql = "INSERT INTO compra (valor_compra, data_compra,cod_veiculos,cod_proprietario) VALUES ('$valor_compra','$data_compra','$cod_veiculos','$cod_proprietario');";
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