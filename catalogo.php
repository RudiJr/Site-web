<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/catalogo.css" rel="stylesheet" type="text/css"/>
        <link href="css/tb_veiculos.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="img/07.jpg">
        <title>Thiago Motos e Automóveis</title>
    </head>
    <body>
        <div class="container">
            <div class="cabecalho">
                
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php"> HOME </a></li>
                    <li><a href="catalogo.php"> CATÁLOGO </a></li>
                    <li><a href="financiamento.php"> FINANCIAMENTO </a></li>
                    <li><a href="contatos.php"> CONTATO </a></li>
                    
                </ul>
            </div>
            <div class="conteudo">
                <script > $.ajax({
  url: "veiculos_lista.php",
  method: "GET",
  dataType: "json",
  success: function(data) {
   const table = $("#table-veiculos tbody");
      data.map(value => {
        const [ano, tipo, modelo, marca] = value;
        table.append(`
        <tr>
          <td>${tipo}</td>
          <td>${modelo}</td>
          <td>${marca}</td>
          <td>${ano}</td>
        </tr>
      `);
      });
  }
});
                </script>
                <br>
                <br>
                <br>
                <br>
                <table id="table-veiculos" width="827" height="545" border="1"> 
                    <thead>
                        <tr>
                            <th> TIPO </th>
                            <th> MODELO </th>
                            <th> MARCA </th>
                            <th> ANO </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

             
            </div>
              
               
            <br> 
           <div class="rodape">
                Copyright © Rudi Júnior
            </div>
        </div>
    </body>
</html>
