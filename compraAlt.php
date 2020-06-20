<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$valor_compra = $_POST['valor_compra'];
                $data_compra = $_POST['data_compra'];
                $cod_veiculos = $_POST['cod_veiculos'];
                $cod_proprietario = $_POST['cod_proprietario'];
		$sql = "UPDATE compra SET cod_compra = '$id',valor_compra = '$valor_compra',data_compra = '$data_compra',cod_veiculos = '$cod_veiculos',cod_proprietario = '$cod_proprietario' ;";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: compra.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: compra.php?ret=ERR');
		}
	}
?>
