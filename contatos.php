<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/contatos_estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/mensagens.css" rel="stylesheet" type="text/css"/>
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
            <br> 
            <br>
            <h2>Formas de Contato:</h2>
            <br>
            <a href="https://www.facebook.com/thiagomotos.automoveis.1" alt="" target="_blank"><img src="img/face.png" alt="" width="110px" height="110px" title="Facebook"/></a>
            <a href="https://www.instagram.com/motos.thiago/?igshid=i7x0ozttcmfs" alt="" target="_blank"><img src="img/insta.png" alt="" width="110px" height="110px" title="Instagram"/></a>
            <h4>Fone: 3522-2371</h4>
            <h4>Email: Thiagobonescorrea@gmail.com</h4>
        
             <form class="formulario" action="mensagemIns.php" method="POST" enctype="multipart/form-data">
	      	<div>
				  	<div class="form-group">
				   	<label for="nome"> Seu Nome: </label>
				   	<input type="text" class="form-control" name="nome" placeholder="Informe o seu Nome" required="">
				  	</div>
				  	
                    <div class="form-group">
				   	<label for="email"> Seu Email: </label>
				   	<input type="text" class="form-control" name="email" placeholder="Informe seu Email" required="">
				  	</div>
                    <div class="form-group">
				   	<label for="telefone"> Seu Telefone: </label>
				   	<input type="text" class="form-control" name="telefone" placeholder="Informe seu Telefone" required="">
				  	</div>
                    <div class="form-group">
				   	<label for="mensagem"> Sua mensagem: </label>
				   	<input type="text" class="form-control"   name="mensagem" placeholder="Informe sua Mensagem" required="">
				  	</div>
	      	</div>
                 <br>     
                 <div >
		        	<button type="submit" class="msg" name="inserir_dado" class="btn btn-primary"> Enviar Mensagem </button>
		      </div>
		   </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div class="rodape">
                Copyright © Rudi Júnior
            </div>
        </div>
    </body>
</html>
