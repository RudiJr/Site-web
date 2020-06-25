<?php

include_once('conexao.php');
if (isset($_POST['inserir_dado'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $sql = "insert into mensagem(nome,telefone,email,mensagem) values ('$nome', '$telefone','$email','$mensagem');";

    if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: mensagens.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: mensagens.php?ret=erro');
    }
}
?>