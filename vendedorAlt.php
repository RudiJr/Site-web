<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$nome = $_POST['nome'];
                $cep = $_POST['cep'];
		$telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "UPDATE vendedor SET cod_vendedor = '$id',nome = '$nome',cep = '$cep',telefone = '$telefone',id_cidade = '$id_cidade';";
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
