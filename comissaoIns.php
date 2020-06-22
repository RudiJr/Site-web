<?php

include_once('sessao.php');
include_once('conexao.php');
if (isset($_POST['inserir_dado'])) {
    $valor = $_POST['valor'];
    $cod_vendedor = $_POST['cod_vendedor'];
    $sql = "INSERT INTO comissao (valor,cod_vendedor) VALUES ('$valor','$cod_vendedor');";

    if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: comissao.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: comissao.php?ret=erro');
    }
}
?>