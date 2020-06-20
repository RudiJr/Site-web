<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$nome_cliente = $_POST['nome_cliente'];
                $cpf = $_POST['cpf'];
                $cep = $_POST['cep'];
                $telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO cliente(nome_cliente,cpf,cep,telefone,id_cidade) VALUES ('$nome_cliente','$cpf','$cep','$telefone','$id_cidade');";
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