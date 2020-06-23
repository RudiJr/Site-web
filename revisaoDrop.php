<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM revisao WHERE cod_revisao = '$id';";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro excluir com Sucesso";
        header('location: revisao.php?ret=OK');
    } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        
        header('location: revisao.php?ret=erro');
    }
	}
?>