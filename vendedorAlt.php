<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$nome = $_POST['nome'];
                $cep = $_POST['cep'];
		$telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "UPDATE vendedor SET nome = '$nome',cep = '$cep',telefone = '$telefone',id_cidade = '$id_cidade' WHERE cod_vendedor = '$id' ;";
		
                          if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: vendedor.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: vendedor.php?ret=erro');
    }
	}
?>
