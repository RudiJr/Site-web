<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		$nome_cliente = $_POST['nome_cliente'];
                $cpf = $_POST['cpf'];
                $cep = $_POST['cep'];
                $telefone = $_POST['telefone'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO cliente(nome_cliente,cpf,cep,telefone,id_cidade) VALUES ('$nome_cliente','$cpf','$cep','$telefone','$id_cidade');";
		
             if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: clientes.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: clientes.php?ret=erro');
    }
	}
?>