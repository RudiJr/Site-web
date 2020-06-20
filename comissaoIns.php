<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$valor = $_POST['valor'];
                $cod_vendedor = $_POST['cod_vendedor'];
		$sql = "INSERT INTO comissao (valor,cod_vendedor) VALUES ('$valor','$cod_vendedor');";
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