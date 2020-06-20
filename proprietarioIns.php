<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		
                $nome_proprietario = $_POST['nome_proprietario'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $cep = $_POST['cep'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO proprietario(nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('$nome_proprietario','$rg','$cpf','$telefone','$cep','$id_cidade');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: proprietario.php?ret=OK');
		}
		else
		{
                        echo "<script>alert($mysqli->error);</script>";
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: proprietario.php?ret=ERR');
		}
	}
?>