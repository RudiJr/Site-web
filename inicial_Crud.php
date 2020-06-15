<?php
	require_once('conexao.php');
	$localDate = date('d/m/y');
?>
<div class="container border my-3 text-center">
    <h1>Thiago Motos e Automóveis</h1>
    <p>Seja Bem Vindo...</p>	
    <p>Usuário: <?= $_SESSION['us_name']; ?> 
    	<br>
			<?= $localDate; ?>
    </p>
</div>

