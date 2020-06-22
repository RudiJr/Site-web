<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$it_venda = $_POST['it_venda'];
		$cod_venda = $_POST['cod_venda'];
		$sql = "UPDATE item_venda SET it_venda = '$it_venda', cod_venda = '$cod_venda' WHERE cod_item = '$id';";


		if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: item_venda.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: item_venda.php?ret=erro');
    }
	}
?>