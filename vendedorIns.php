<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
                $nome = $_POST['nome'];
                $cep = $_POST['cep'];
		$telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO vendedor (nome,cep,telefone,id_cidade) VALUES ('$nome','$cep','$telefone','$id_cidade');";
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