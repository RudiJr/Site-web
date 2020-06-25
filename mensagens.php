<?php
include_once 'sessao.php';
include_once 'header_crud.php';
 $mysqli->query("call ler_mensagens()");
?>
<br>

<!-- Janela modal de Exclusão -->
<div class="modal fade" id="dropForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
   	<div class="modal-content">
	      <div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel"> Excluir registro </h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         	<span aria-hidden="true">&times;</span>
	        	</button>
	      </div>
	      <!-- FORMULÁRIO DOS DADOS -->
	      <form action="mensagensDrop.php" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
	      		<input type="hidden" id="del_id" name="del_id">
	      		<h6> Tem certeza de que deseja excluir este registro? </h6>			  	
	      	</div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
		        	<button type="submit" name="excluir_dado" class="btn btn-primary"> Sim </button>
		      </div>
		   </form>
   	</div>
  	</div>
</div>



<div class="container">
	<div class="jumbotron">
		<div class="card text-center">
			<h2> Mensagens </h2>
		</div>
	

		<div class="card">
			<div class="card-body">
				<?php
					include_once('conexao.php');
					$sql = "SELECT * FROM mensagem;";
					$result = $mysqli->query($sql);
				?>
				<table class="table table-sm table-hover" id="minhaTabela">
					<thead>
						<tr>
							<th scope="col"> Código </th>
							<th scope="col"> Nome </th>
							<th scope="col"> Telefone </th>
                                                        <th scope="col"> Email </th>
                                                        <th scope="col"> Mensagem </th>
							<th scope="col" style="text-align: center;"> Ações </th>
						</tr>
					</thead>
					<tbody>
					<?php
						if ($result)
						{
							foreach ($result as $row) 
							{	
					?>
						<tr>
							<th scope="row"><?= $row['cod_mensagem']; ?></th>
							<td><?= $row['nome']; ?></td>
							<td><?= $row['telefone']; ?></td>
                                                        <td><?= $row['email']; ?></td>
                                                        <td><?= $row['mensagem']; ?></td>
							<td style="text-align: right; width: 20%;">
								<button type="button" class="btn btn-danger btnExcluir" id="<?= $row['cod_mensagem']; ?>"> Excluir </button>
							</td>
						</tr>
					<?php
							}
						}
						else
						{
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
	setTimeout(function()
	{
		$('.alert').fadeOut('fast');
	},2000);
</script>

<!-- Chama modal para excluir os dados -->
<script type="text/javascript">
	$(document).ready(function() 
	{
		$('.btnExcluir').on('click', function() 
		{
			$('#dropForm').modal('show');
			var id_del = $(this).attr('id');
			$('#del_id').val(id_del);
		});
	});
</script>
<script src="js/meuDataTable.js" type="text/javascript"></script>
