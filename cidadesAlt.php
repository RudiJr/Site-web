<?php

include_once('sessao.php');
include_once('conexao.php');
if (isset($_POST['alterar_dado'])) {
    $id = $_POST['upd_id'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $sql = "UPDATE revenda.cidade SET cidade = '$cidade', uf = '$uf' WHERE id_cidade = '$id';";


    if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Alterado com Sucesso";
        header('location: cidades.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: cidades.php?ret=erro');
    }
}
?>