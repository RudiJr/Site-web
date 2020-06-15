<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$revisao = $_POST['revisao'];
		$data_r = $_POST['data_revisao'];
                $r_feita = $_POST['revisao_feita'];
		$sql = "UPDATE revisao SET revisao = '$revisao',cod_revisao = '$id',data_revisao = '$data_r',revisao_feita = '$r_feita';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: revisao.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: revisao.php?ret=ERR');
		}
	}
?>
