<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$cliente = $_POST['cliente'];
		$nome = $_POST['nome'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
		$sql = "UPDATE cliente SET cliente = '$cliente', cod_cliente = '$id',nome = '$nome',rg = '$rg',cpf = '$cpf',telefone = '$telefone',email = '$email';";
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
