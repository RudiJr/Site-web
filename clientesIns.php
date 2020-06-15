<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cliente = $_POST['cliente'];
		$nome = $_POST['nome'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
		$sql = "INSERT INTO cliente (cliente,nome,rg,cpf,telefone,email) VALUES ('$cliente', '$nome','$rg','$cpf','$telefone','$email');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: clientes.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: clientes.php?ret=ERR');
		}
	}
?>