<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
                $valor = $_POST['valor'];
                $cod_vendedor = $_POST['cod_vendedor'];
		$sql = "UPDATE comissao SET valor = '$valor',cod_vendedor =  '$cod_vendedor' WHERE cod_comissao = '$id' ;";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro alterado com Sucesso";
        header('location: comissao.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: comissao.php?ret=erro');
    }
	}
?>
