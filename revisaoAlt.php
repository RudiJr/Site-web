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
		
                           if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: revisao.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: revisao.php?ret=erro');
    }
	}
?>
