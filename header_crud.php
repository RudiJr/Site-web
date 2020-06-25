<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thiago Motos e Automóveis</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/datatables.min.css">
        <link rel="stylesheet" href="css/buttons.dataTables.css">
        <link rel="stylesheet" href="css/stilos.css">
        <link rel="shortcut icon" href="img/07.jpg">
    </head>
    <body>
      <?php
        include_once('conexao.php');
      ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicial <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cidades.php">Cidades</a>
          <a class="dropdown-item" href="proprietario.php">Proprietario</a>
          <a class="dropdown-item" href="veiculos.php">Veiculos</a>
          <a class="dropdown-item" href="revisao.php">Revisão</a>
          <a class="dropdown-item" href="compra.php">Compra</a>
          <a class="dropdown-item" href="vendedor.php">Vendedor</a>
          <a class="dropdown-item" href="cliente.php">Clientes</a>
          <a class="dropdown-item" href="comissao.php">Comissão</a>
          <a class="dropdown-item" href="venda.php">Venda</a>
          <a class="dropdown-item" href="item_venda.php">Item da venda</a>
          <a class="dropdown-item" href="contato.php">Contatos</a>
          <a class="dropdown-item" href="mensagens.php">Mensagens</a>
          <div class="dropdown-divider"></div>
          <?php
                            //CASO SEJA USUÁRIO MASTER, MOSTRA CADASTRO DE USUÁRIOS
                            include_once 'sessao.php';
                            if($_SESSION['us_nivel'] == 1){
                            ?> 
          <a class="dropdown-item" href="usuarios.php">Usuários</a>
          <?php
                            }
                            ?>
          <a class="dropdown-item" href="logout.php">Sair</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
