<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$comissao = $_POST['comissao'];
		$valor_comissao = $_POST['valor'];
		$sql = "INSERT INTO comissao (comissao, valor,) VALUES ('$compra', '$valor);";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: comissao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: comissao.php?ret=ERR');
		}
	}
?>