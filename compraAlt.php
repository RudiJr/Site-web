<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$valor_compra = $_POST['valor_compra'];
                $data_compra = $_POST['data_compra'];
                $cod_veiculos = $_POST['cod_veiculos'];
                $cod_proprietario = $_POST['cod_proprietario'];
		$sql = "UPDATE compra SET cod_compra = '$id',valor_compra = '$valor_compra',data_compra = '$data_compra',cod_veiculos = '$cod_veiculos',cod_proprietario = '$cod_proprietario' ;";
		
                if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: compra.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: compra.php?ret=erro');
    }
	}
?>
