<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$vendedor = $_POST['vendedor'];
		$telefone = $_POST['telefone'];
                $nome = $_POST['nome'];
		$sql = "INSERT INTO vendedor (vendedor, telefone, nome) VALUES ('$vendedor', '$telefone','$nome');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: vendedor.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: vendedor.php?ret=ERR');
		}
	}
?>