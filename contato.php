<?php
include_once 'sessao.php';
include_once 'header_crud.php';
?>
<br>

<!-- Janela modal de Alteração -->
<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Alterar registros </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- FORMULÁRIO DOS DADOS -->
            <form action="contatoAlt.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="telefone"> Telefone </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Informe o Telefone" required="">
                    </div>
                   <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Informe o Email" required="">
                    </div>
                </div>
                <input type="hidden" id="upd_id" name="upd_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
                    <button type="submit" name="alterar_dado" class="btn btn-primary"> Alterar Registro </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------- -->











<div class="container">
    <div class="jumbotron">
        <div class="card text-center">
            <h2> Contatos </h2>
        </div>


        <div class="card">
            <div class="card-body">
                <?php
                include_once('conexao.php');
                $sql = "SELECT telefone,email FROM contato;";
                $result = $mysqli->query($sql);
                ?>
                <table class="table table-sm table-hover" id="minhaTabela">
                    <thead>
                        <tr>
                            <th scope="col"> Telefone </th>
                            <th scope="col"> Email </th>
                            <th scope="col" style="text-align: center;"> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result) {
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <th scope="row"><?= $row['telefone']; ?></th>
                                    <td><?= $row['email']; ?></td>
                                    <td style="text-align: right; width: 20%;">
                                        <button type="button" class="btn btn-success btnEditar"> Alterar </button>

                                    </td>
                                </tr>
        <?php
    }
} else {
    echo "Nenhum registro encontrado!";
}
?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once('footer_crud.php');
?>
<script type="text/javascript">
    setTimeout(function ()
    {
        $('.alert').fadeOut('fast');
    }, 2000);
</script>
<!-- Chama modal para alterar os dados -->
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '.btnEditar', function ()
        {
           
            $.ajax({
                url: "contatoBusca.php",
                method: "POST",
                dataType: "json",
                success: function (data)
                {
                    console.log(data);
                    $('#telefone').val(data.telefone);
                    $('#email').val(data.email);
                    $('#editForm').modal('show');
                }
            });
        });
    });
</script>

<script src="js/meuDataTable.js" type="text/javascript"></script>
