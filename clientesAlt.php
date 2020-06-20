<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$nome_cliente = $_POST['nome_cliente'];
                $cpf = $_POST['cpf'];
                $cep = $_POST['cep'];
                $telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "UPDATE cliente SET cod_cliente = '$id',nome_cliente = '$nome_cliente','cpf = $cpf','cep = $cep',telefone = '$telefone',id_cidade = '$id_cidade';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: clientes.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: clientes.php?ret=ERR');
		}
	}
?>
