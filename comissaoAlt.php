<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
                $valor = $_POST['valor'];
                $cod_vendedor = $_POST['cod_vendedor'];
		$sql = "UPDATE comissao SET cod_comissao = '$id',valor = '$valor',cod_vendedor =  '$cod_vendedor';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: comissao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: comissao.php?ret=ERR');
		}
	}
?>
