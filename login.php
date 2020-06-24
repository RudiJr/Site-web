<?php
    session_start();
    if ($_GET['acao'] == 'V') // Verificação do envio do formulário
    {
        $login = $_POST['login'];
        $senha = md5($_POST['senha']);
        include_once('conexao.php');
        $sql = "SELECT cod_usuario, nome, nivel FROM usuario WHERE login = '$login' AND senha = '$senha'";
        $result = $mysqli->query($sql);
        $register = $mysqli->affected_rows;
        if ($register == 1)
        {
            $dados = $result->fetch_array();
            $id_usuario = $dados['cod_usuario'];
            $us_name = $dados['nome'];
            $us_nivel = $dados['nivel'];
            
            $_SESSION['us_sessao'] = session_id();
            $_SESSION['us_id'] = $id_usuario;
            $_SESSION['us_name'] = $us_name;
            $_SESSION['us_nivel'] = $us_nivel;
            header('location: index.php');
        }
        else
        {
            unset($_SESSION['us_sessao']);
            unset($_SESSION['us_id']);
            unset($_SESSION['us_name']);
            unset($_SESSION['us_nivel']);
            $msg = 'erro_login';
        }
    }
?>


<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thiago Motos e Automóveis</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="img/07.jpg">
    </head>    
    <body>
        <form name="login" action="login.php?acao=V" method="POST" enctype="multipart/form-data">

            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tela de Login</h3>
                            <!-- ICONES REDES SOCIAIS
                            <div class="d-flex justify-content-end social_icon">
                                <span><i class="fab fa-facebook-square"></i></span>
                                <span><i class="fab fa-google-plus-square"></i></span>
                                <span><i class="fab fa-twitter-square"></i></span>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="login" class="form-control" placeholder="login" autofocus="">

                                </div>
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="senha" class="form-control" placeholder="senha">
                                </div>
                                <div class="row align-items-center remember">
                                    <input type="checkbox">Lembre-me
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Login" class="btn float-right login_btn">
                                </div>
                            </form>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-center links text-center">
                                <?php
                                if (($_GET['msg']) || ($msg)) {
                                    if ($msg == 'erro_login')
                                        echo "Usuário/Senha Inválidos!!!";
                                    if ($_GET['msg'] == 'erro_sessao')
                                        echo "Necessário estar logado para <br>acessar o sistema!!!";
                                } else {
                                    echo "Informe suas credenciais acima para acessar o sistema";                                    
                                }                                
                                ?> 
                            </div>
                        </div>
                    </div>
                </div>
                  <a href="index.php" class="back" >Voltar a página principal sem fazer login</a>
            </div>
            <br>
        </form>
    </body>
</html>