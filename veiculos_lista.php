<?php
    include_once('conexao.php');
    $sql = "SELECT ano,tipo_veiculo,modelo_veiculo,marca_veiculo FROM veiculos";
    $result = $mysqli->query($sql);
        $rows = mysqli_fetch_all($result);
    echo json_encode ($rows);
?>