<?php
include_once 'sessao.php';
include_once 'conexao.php';

if(isset($_POST['alterarDado'])){
    $id = $_POST['upd_id'];
    $nome = $_POST['nome_alt'];
    $login = $_POST['login_alt'];
    $senha = md5($_POST['senha_alt']);
    $nivel = $_POST['nivel_alt'];
    
    //Se senha não for digitada, não altera a mesma
    if($senha != ''){
        $sql = "UPDATE usuario SET "
                . "nome = '$nome', "
                . "login = '$login', "
                . "senha = '$senha', "
                . "nivel = '$nivel' "
                . "WHERE cod_usuario = '$id';";    
    } else {
        $sql = "UPDATE usuario SET "
                . "nome = '$nome', "
                . "login = '$login', "
                . "nivel = '$nivel' "
                . "WHERE cod_usuario = '$id';";    
    }

    if($mysqli->query($sql)){
       $_SESSION['msg'] = "Registro Alterado com Sucesso";
       header('location: usuarios.php?ret=OK');
   } else {
       if($mysqli->errno == 1062){
           $_SESSION['msg'] = "Registro Duplicado! <br> Login já existente";
       } else {
           $_SESSION['msg'] = "Erro ao Alterar este registro: <br> ERRO:, $mysqli->error";
       }       
       header('location: usuarios.php?ret=erro');
   }
}
