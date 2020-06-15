<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$vendedor = $_POST['vendedor'];
		$telefone = $_POST['telefone'];
                $nome = $_POST['nome'];
		$sql = "UPDATE vendedor SET vendedor = '$vendedor', cod_vendedor = '$id',telefone = '$telefone',nome = '$nome';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: vendedor.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: vendedor.php?ret=ERR');
		}
	}
?>
