<?php
    include_once('conexao.php');
    $sql = "SELECT telefone,email FROM contato where cod_contato = 1";
    $result = $mysqli->query($sql);
        $row = mysqli_fetch_array($result);
    echo json_encode ($row);
    
?>