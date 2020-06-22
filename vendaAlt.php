 <?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$data_venda = $_POST['data_venda'];
		$valor_venda = $_POST['valor_venda'];
                $comissao_vend = $_POST['comissao_vend'];
                $cod_vendedor = $_POST['cod_vendedor'];
                $cod_cliente = $_POST['cod_cliente'];
		$sql = "UPDATE venda SET data_venda = '$data_venda', valor_venda = '$valor_venda',comissao_vend = '$comissao_vend',cod_vendedor = '$cod_vendedor',cod_cliente = '$cod_cliente' WHERE cod_venda = '$id';";


		           if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: venda.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: venda.php?ret=erro');
    }
	}
?>