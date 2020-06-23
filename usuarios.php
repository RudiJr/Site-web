<?php  
    include_once 'sessao.php';
    include_once 'header_crud.php'; 
?>
<br>
<!--====================================================================================================================-->
<!-- Janela Modal de Cadastro -->
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inserir novo Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- FORMULÁRIO DOS DADOS -->
            <form action="usuarioIns.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">               
                    <div class="form-group">
                        <label for="nome">Nome do Usuário</label>
                        <input type="text" class="form-control" name="nome_ins" placeholder="Nome completo do Usúario" required>       
                    </div>
                    <div class="form-group">
                        <label for="login">Login</label>
                         <input type="text" class="form-control" name="login_ins" placeholder="Informe o Login" required>    
                    </div>
                    <div class="form-group">
                        <label for="nivel">Nível Acesso</label>
                        <select class="form-control" name="nivel_ins" id="nivel_ins" required="">
                            <option value="">Selecione o Nível de Acesso</option>
                            <option value="1">Master</option>
                            <option value="2">Secundário</option>
                        </select>    
                    </div> 
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha_ins" id="senha_ins" placeholder="Digite a Senha" required>    
                    </div>
                    <div class="form-group">
                        <label for="conf_senha">Confirmar Senha</label>
                        <input type="password" class="form-control" name="conf_senha_ins" id="conf_senha_ins" placeholder="Digite novamente a Senha" required>    
                    </div>
                    <div id="erro_senhaIns" class="alert-warning"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="inserirDado" class="btn btn-primary" onclick="return validarSenhaIns();">Salvar Registro</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--========================================================================================================================-->
<!-- JANELA MODAL PARA ALTERAÇÃO -->
<div class="modal fade" id="editForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- FORMULÁRIO DOS DADOS -->
            <form action="usuarioAlt.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">               
                    <div class="form-group">
                        <label for="nome">Nome do Usuário</label>
                        <input type="text" class="form-control" name="nome_alt" id="nome_alt" placeholder="Nome completo do Usúario" required>       
                    </div>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login_alt" id="login_alt" placeholder="Informe o Login" required>    
                    </div> 
                    <div class="form-group">
                        <label for="nivel">Nível Acesso</label>
                        <select class="form-control" name="nivel_alt" id="nivel_alt" required="">
                            <option value="">Selecione o Nível de Acesso</option>
                            <option value="1">Master</option>
                            <option value="2">Secundário</option>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha_alt" id="senha_alt" placeholder="Digite a Senha">    
                    </div>
                    <div class="form-group">
                        <label for="conf_senha">Confirmar Senha</label>
                        <input type="password" class="form-control" name="conf_senha_alt" id="conf_senha_alt" placeholder="Digite novamente a Senha">    
                    </div>   
                    <div id="erro_senhaAlt" class="alert-warning"></div>
                </div>
                <input type="hidden" id="upd_id" name="upd_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="alterarDado" class="btn btn-primary" onclick="return validarSenhaAlt();">Alterar Registro</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--========================================================================================================================-->
<!-- JANELA MODAL PARA EXCLUSÃO -->
<div class="modal fade" id="delForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- FORMULÁRIO DOS DADOS -->
            <form action="usuarioDel.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">               
                    <input type="hidden" id="del_id" name="del_id">       
                    <h6>Tem certeza que deseja excluir esse registro?</h6>
                </div>                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    <button type="submit" name="excluirDado" class="btn btn-primary">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--======================================================================================================================-->
<!--BLOCO DE BOTÕES-->
    <div class="jumbotron">
        <div class="card" id="titulo">
            <h2> USUÁRIOS ADMINISTRATIVOS </h2>
        </div>

        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addForm">
                    Adicionar Usuário
                </button>
                <span id="botoesExportar" style="float: right;"></span>
            </div>
            <?php
            if (isset($_SESSION['msg'])) {
                switch ($_GET['ret']) {
                    case 'OK': $tpMsg = 'alert-success';
                        break;
                    case 'erro': $tpMsg = 'alert-danger';
                        break;
                }
                ?>
                <div id="mensagem">
                    <div class="alert <?= $tpMsg; ?>" role="alert"><?= $_SESSION['msg']; ?></div>
                </div>
                <?php
                unset($_SESSION['msg']);
            }
            ?>            
        </div>
 <!--==================================================================================================================================-->   
 
<!-- EXIBIR OS DADOS CADASTRAIS - TABELA-->
        <div class="card">
            <div class="card-body">
                <?php
                    include_once 'conexao.php';
                    $sql = "SELECT * FROM usuario;";
                    $result = $mysqli->query($sql);
                ?>
                <table class="table table-sm table-hover" id="minhaTabela">
                    <thead>
                        <tr>
                            <th scope="col">CÓD.</th>
                            <th scope="col">USUÁRIO</th>
                            <th scope="col">LOGIN</th>
                            <th scope="col" style="text-align: center; width: 20%">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($result){
                        foreach ($result as $row){
                    ?>
                        <tr>
                            <th scope="row"><?= $row['cod_usuario']; ?></th>
                            <td><?= $row['nome']; ?></td>
                            <td><?= $row['login']; ?></td>
                            <td style="text-align: right; width: 20%">
                                <button type="button" class="btn btn-success btnEditar" id="<?= $row['cod_usuario']; ?>">Editar</button>
                                <button type="button" class="btn btn-danger btnExcluir" id="<?php echo $row['cod_usuario']; ?>">Excluir</button>
                            </td>
                        </tr>                        
                    <?php
                        }
                   } else {
                       echo "Nenhum registro encontrado...";
                   }
                    ?>
                   </tbody>
                </table>
            </div>
        </div>
<!--==================================================================================================================================-->


</div> <!-- jumbotrom -->

<?php include_once 'footer.php'; ?>

<!--Fecha a tela de mensagem após determinado período-->
<script type="text/javascript">
    setTimeout(function () {
        $('.alert').fadeOut('fast');
    }, 2000);
</script>

<!--Chama form modal para alteração, buscando os dados dos campos -->
<script type="text/javascript">
$(document).ready(function(){
 $(document).on('click','.btnEditar',function(){
     var id_upd = $(this).attr('id');
     $.ajax({
        url: "usuarioBusca.php",
        method: "POST",
        data: {id:id_upd},
        dataType: "json",
        success: function(data){
            $('#upd_id').val(data.cod_usuario);
            $('#nome_alt').val(data.nome);
            $('#login_alt').val(data.login);
            $('#nivel_alt').val(data.nivel).change();
            
            $('#editForm').modal('show');
        }
     });   
 });   
});    
</script>
<!--Chama form modal para exclusão -->
<script type="text/javascript">
$(document).ready(function(){
    $('.btnExcluir').on('click', function(){
        $('#delForm').modal('show');
        var id_del = $(this).attr('id');
        $('#del_id').val(id_del);
    });
});

</script>
<script type="text/javascript">
function validarSenhaIns(){
   senha = document.getElementById('senha_ins').value;
   senha2 = document.getElementById('conf_senha_ins').value;
   if(senha!= senha2) {
       document.getElementById('erro_senhaIns').innerHTML = 'Senha e Confirmação de Senha divergentes';
       document.getElementById('senha_ins').focus();
       return false; 
   }
   return true;
}

function validarSenhaAlt(){
   senha = document.getElementById('senha_alt').value;
   senha2 = document.getElementById('conf_senha_alt').value;
   if(senha!= senha2) {
       document.getElementById('erro_senhaAlt').innerHTML = 'Senha e Confirmação de Senha divergentes';
       document.getElementById('senha_alt').focus();
       return false; 
   }
   return true;
}
</script>

<script src="js/meuDataTable.js" type="text/javascript"></script>