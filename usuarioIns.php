<?php
include_once 'sessao.php';
include_once 'conexao.php';

if(isset($_POST['inserirDado'])){
    $nome = $_POST['nome_ins'];
    $login = $_POST['login_ins'];
    $senha = md5($_POST['senha_ins']);
    $nivel = $_POST['nivel_ins'];
    
    $sql = "INSERT INTO usuario (nome, login, senha, nivel) VALUES ('$nome','$login','$senha','$nivel');";
    
    if($mysqli->query($sql)){
       $_SESSION['msg'] = "Registro Salvo com Sucesso";
       header('location: usuarios.php?ret=OK');
   } else {
       if($mysqli->errno == 1062){
           $_SESSION['msg'] = "Registro Duplicado! <br> Login já existente";
       } else {
           $_SESSION['msg'] = "Erro ao Salvar este registro: <br> ERRO:, $mysqli->error";
       }       
       header('location: usuarios.php?ret=erro');
   }
}