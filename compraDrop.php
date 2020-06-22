<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM compra WHERE cod_compra = '$id';";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: compra.php?ret=OK');
    } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        
        header('location: compra.php?ret=erro');
    }
	}
?>