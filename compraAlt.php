<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$compra = $_POST['compra'];
		$valor_compra = $_POST['valor_compra'];
                $data_compra = $_POST['data_compra'];
		$sql = "UPDATE compra SET compra = '$compra', cod_compra = '$id',valor_compra = '$valor_compra',data_compra = '$data_compra';";
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
