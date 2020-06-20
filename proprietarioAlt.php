<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
                $nome_proprietario = $_POST['nome_proprietario'];
                $cep = $_POST['cep'];
                $telefone = $_POST['telefone'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "UPDATE proprietario SET nome_proprietario = '$nome_proprietario',cep = '$cep', telefone = '$telefone', rg = '$rg', cpf = '$cpf',id_cidade = '$id_cidade' where cod_proprietario = '$id' ;";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: proprietario.php?ret=OK');
		}
		else
		{
                        printf("Errormessage: %s\n", $mysqli->error);
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: proprietario.php?ret=ERR');
		}
	}
?>
