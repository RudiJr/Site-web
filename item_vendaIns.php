<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cod_item = $_POST['cod_item'];
                $it_venda = $_POST['it_venda'];
		$cod_venda = $_POST['uf'];
		$sql = "INSERT INTO item_venda (cod_item, it_venda, uf) VALUES ('$cod_item','$it_venda', '$cod_venda');";
		
               if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: item_venda.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: item_venda.php?ret=erro');
    }
	}
?>