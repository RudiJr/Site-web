<?php
include_once 'sessao.php';
include_once 'conexao.php';

if(isset($_POST['excluirDado'])){
    $id = $_POST['del_id'];
    
    $sql = "DELETE FROM usuario WHERE cod_usuario = '$id'; ";    
    
    if($mysqli->query($sql)){
        $_SESSION['msg'] = "Registro Excluído com Sucesso!";
        header('location: usuarios.php?ret=OK');
    } else {
       $_SESSION['msg'] = "Erro ao Excluir o Registro!";
       header('location: usuarios.php?ret=erro'); 
    }
}

