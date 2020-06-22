<?php

include_once('sessao.php');
include_once('conexao.php');
if (isset($_POST['inserir_dado'])) {
    $id_cidade = $_POST['id_cidade'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $sql = "INSERT INTO cidade (id_cidade, cidade, uf) VALUES ('$id_cidade','$cidade', '$uf');";

    if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: cidades.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: cidades.php?ret=erro');
    }
}
?>