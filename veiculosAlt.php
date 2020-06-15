<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$automoveis = $_POST['automoveis'];
		$ano = $_POST['ano'];
                $valor = $_POST['valor'];
                $c_marca = $_POST['c_marca'];
                $tipo = $_POST['tipo'];
                $modelo = $_POST['modelo'];
                $marca = $_POST['marca'];
		$sql = "UPDATE automoveis SET automoveis = '$automoveis',cod_veiculos = '$id',ano = '$ano',valor = '$valor',cod_marca = '$c_marca',tipo = '$tipo',modelo = '$modelo',marca = '$marca';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: automoveis.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: automoveis.php?ret=ERR');
		}
	}
?>
