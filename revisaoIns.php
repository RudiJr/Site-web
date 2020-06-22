<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$data_revisao = $_POST['data_revisao'];
                $revisao_feita = $_POST['revisao_feita'];
                $cod_veiculos = _POST['cod_veiculos'];
		$sql = "INSERT INTO revisao(data_revisao,revisao_feita,cod_veiculos) VALUES ('$data_revisao','$revisao_feita','$cod_veiculos');";
		
                  if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: revisao.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: revisao.php?ret=erro');
    }
	}
?>