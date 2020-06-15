<?php
    session_start();
    if($_SESSION['us_sessao'] != session_id()){
        header("location: login.php?msg=erro_sessao");
    }else {
        $_SESSION['us_sessao'];
        $_SESSION['us_id'];
        $_SESSION['us_nome'];
    }