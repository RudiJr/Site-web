<?php
require_once('conexao.php');
$localDate = date('d/m/y');

$sql = "SELECT total_mensagens FROM contato;";
$result = $mysqli->query($sql);
?>
<div class="container border my-3 text-center">
    <h1>Thiago Motos e Automóveis</h1>
    <p>Seja Bem Vindo...</p>	
    <p>Usuário: <?= $_SESSION['us_name']; ?> 
        <br>
        <?= $localDate; ?>
    </p>
    <?php
    if ($result) {
        foreach ($result as $row) {
            $total = $row['total_mensagens'];

            if ($total > 0) {
                ?>
                <h2> há <?= $total; ?> mensagens não lidas </h2>


                <?php
            }
        }
    }
    ?>
</div>

