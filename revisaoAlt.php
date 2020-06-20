<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$data_revisao = $_POST['data_revisao'];
                $revisao_feita = $_POST['revisao_feita'];
                $cod_veiculos = $_POST['cod_veiculos'];
		$sql = "UPDATE revisao SET data_revisao = '$data_revisao',revisao_feita = '$revisao_feita',cod_veiculos = '$cod_veiculos' where cod_revisao = '$id';";
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
