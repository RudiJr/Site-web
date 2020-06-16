<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$id = $_POST['upd_id'];
                $nome_proprietario = $_POST['nome_proprietario'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $fone = $_POST['fone'];
                $cep = $_POST['cep'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO proprietario(cod_proprietario,nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('$proprietario','$nome_proprietario','$rg','$cpf','$fone','$cep','$id_cidade');";
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