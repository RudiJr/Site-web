<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM comissao WHERE cod_comissao = '$id';";
		if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro excluido com Sucesso";
        header('location: comissao.php?ret=OK');
    }  else {
            $_SESSION['msg'] = "Erro ao excluir este registro: <br> ERRO:, $mysqli->error";
        
        header('location: comissao.php?ret=erro');
    }
	}
?>