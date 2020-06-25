<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
		$sql = "UPDATE contato SET telefone = '$telefone',email =  '$email' ;";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro alterado com Sucesso";
        header('location: contato.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: contato.php?ret=erro');
    }
	}
?>
