<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$c_veiculos = $_POST['c_veiculos'];
		$cor = $_POST['cor'];
                $valor = $_POST['valor'];
                $mod_veiculo = $_POST['mod_veiculo'];
                $ano = $_POST['ano'];
                $m_veiculo = $_POST['m_veiculo'];
                $c_marca = $_POST['c_marca'];
                $t_veiculo = $_POST['t_veiculo'];
                $c_propriet = $_POST['c_propriet'];
                
		$sql = "INSERT INTO veiculos(cod_veiculos,cor,valor,modelo_veiculo,ano,marca_veiculo,cod_marca,tipo_veiculo,cod_proprietario) VALUES ('$c_veiculos', '$cor','$valor','$mod_veiculo','$ano','$m_veiculo','$c_marca','$t_veiculo','$c_propriet');";
		if ($mysqli->query($sql))
		{
			$_SESSION['msg'] = "Registro inserido com sucesso!";
			header('location: automoveis.php?ret=OK');
		}
		else
		{
			$_SESSION['msg'] = "Registro não pode ser inserido!";
			header('location: automoveis.php?ret=ERR');
		}
	}
?>