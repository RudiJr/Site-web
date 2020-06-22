<?php
	include_once('sessao.php');
	include_once('conexao.php');
	if (isset($_POST['inserir_dado']))
	{
		
                $nome_proprietario = $_POST['nome_proprietario'];
                $rg = $_POST['rg'];
                $cpf = $_POST['cpf'];
                $telefone = $_POST['telefone'];
                $cep = $_POST['cep'];
                $id_cidade = $_POST['id_cidade'];
		$sql = "INSERT INTO proprietario(nome_proprietario,rg,cpf,telefone,cep,id_cidade) VALUES ('$nome_proprietario','$rg','$cpf','$telefone','$cep','$id_cidade');";
		
                  if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: proprietario.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: proprietario.php?ret=erro');
    }
	}
?>