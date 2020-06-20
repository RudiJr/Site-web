<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cod_venda = $_POST['cod_venda'];
                $data_venda = $_POST['data_venda'];
		$valor_venda = $_POST['valor_venda'];
                $comissao_vend = $_POST['comissao_vend'];
                $cod_vendedor = $_POST['cod_vendedor'];
                $cod_cliente = $_POST['cod_cliente'];
		$sql = "INSERT INTO cidade (cod_venda,data_venda,valor_venda,comissao_vend,cod_vendedor) VALUES ('$cod_venda','$data_venda', '$valor_venda','$comissao_vend','$cod_vendedor','$cod_cliente');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: venda.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: venda.php?ret=ERR');
		}
	}
?>