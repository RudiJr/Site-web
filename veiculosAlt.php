<?php

include_once('sessao.php');
include_once('conexao.php');
if (isset($_POST['alterar_dado'])) {
    $id = $_POST['upd_id'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];
    $valor = $_POST['valor'];
    $cod_marca = $_POST['cod_marca'];
    $tipo_veiculo = $_POST['tipo_veiculo'];
    $modelo_veiculo = $_POST['modelo_veiculo'];
    $marca_veiculo = $_POST['marca_veiculo'];
    $cod_proprietario = $_POST['cod_proprietario'];
    $sql = "UPDATE veiculos SET ano = '$ano',cor = '$cor',valor = '$valor',cod_marca = '$cod_marca',tipo_veiculo = '$tipo_veiculo',modelo_veiculo = '$modelo_veiculo',marca_veiculo = '$marca_veiculo',cod_proprietario = '$cod_proprietario' where cod_veiculos = '$id';";
    
    if ($mysqli->query($sql)) {
        $_SESSION['msg'] = "Registro Salvo com Sucesso";
        header('location: veiculos.php?ret=OK');
    } else {
        if ($mysqli->errno == 1062) {
            $_SESSION['msg'] = "Registro Duplicado";
        } else {
            $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
        }
        header('location: veiculos.php?ret=erro');
    }
}
?>
