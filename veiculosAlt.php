<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['alterar_dado']))
	{
		$id = $_POST['upd_id'];
		$ano = $_POST['ano'];
                $cor = $_POST['cor'];
                $valor = $_POST['valor'];
                $cod_marca = $_POST['cod_marca'];
                $tipo_veiculo = $_POST['tipo_veiculo'];
                $modelo_veiculo = $_POST['modelo_veiculo'];
                $marca_veiculo = $_POST['marca_veiculo'];
                $cod_proprietario = $_POST['cod_proprietario'];
		$sql = "UPDATE automoveis SET cod_veiculos = '$id',ano = '$ano',cor = '$cor',valor = '$valor',cod_marca = '$cod_marca',tipo_veiculo = '$tipo_veiculo',modelo_veiculo = '$modelo_veiculo',marca_veiculo = '$marca_veiculo',cod_proprietario = '$cod_proprietario';";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro alterado com sucesso!";
			header('location: automoveis.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser alterado!";
			header('location: automoveis.php?ret=ERR');
		}
	}
?>
