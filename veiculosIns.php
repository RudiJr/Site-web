<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$cod_veiculos = $_POST['cod_veiculos'];
		$ano = $_POST['ano'];
                $cor = $_POST['cor'];
                $valor = $_POST['valor'];
                $cod_marca = $_POST['cod_marca'];
                $tipo_veiculo = $_POST['tipo_veiculo'];
                $modelo_veiculo = $_POST['modelo_veiculo'];
                $marca_veiculo = $_POST['marca_veiculo'];
                $cod_proprietario = $_POST['cod_proprietario'];;
		$sql = "INSERT INTO veiculos(cod_veiculos,ano,cor,valor,cod_marca,tipo_veiculo,modelo_veiculo,marca_veiculo,cod_proprietario) VALUES ('$cod_veiculos','$ano','$cor','$valor','$cod_marca','$tipo_veiculo','$modelo_veiculo','$marca_veiculo','$cod_proprietario');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: veiculos.php?ret=OK');
		}
		else
		{
                        echo "<script>alert($mysqli->error);</script>";
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: veiculos.php?ret=ERR');
		}
	}
?>