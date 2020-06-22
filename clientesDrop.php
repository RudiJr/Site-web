<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['excluir_dado']))
	{
		$id = $_POST['del_id'];
		$sql = "DELETE FROM cliente WHERE cod_cliente = '$id';";
		
       if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro deletado com Sucesso";
        header('location: clientes.php?ret=OK');
    } 
        else {
            $_SESSION['msg'] = "Erro ao deletar este registro: <br> ERRO:, $mysqli->error";
        
        header('location: clientes.php?ret=erro');
    }
	}
?>