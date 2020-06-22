<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM proprietario WHERE cod_proprietario = '$id';";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: proprietario.php?ret=OK');
    } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        
        header('location: proprietario.php?ret=erro');
    }
	}
?>