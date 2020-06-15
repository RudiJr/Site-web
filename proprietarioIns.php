<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$proprietario = $_POST['proprietario'];
		$cod_proprietario = $_POST['cod_proprietario'];
                $nome_proprietario = $_POST['nome_proprietario'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $cep = $_POST['cep'];
                $cidade = $_POST['cidade'];
		$sql = "INSERT INTO proprietario(cod_proprietario,nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('$proprietario','$nome','$rg','$cpf','$telefone','$cep','$cidade');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: proprietario.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: proprietario.php?ret=ERR');
		}
	}
?>