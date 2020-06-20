<?php 
	include_once('sessao.php');
	include_once('header_crud.php');
?>
<br>
<!-- Janela modal de Cadastro -->
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
   	<div class="modal-content">
	      <div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel"> Inserir novo registro </h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	         	<span aria-hidden="true">&times;</span>
	        	</button>
	      </div>
	      <!-- FORMULÁRIO DOS DADOS -->
	      <form action="vendaIns.php" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
			<div class="form-group">
				   	<label for="data_venda"> Data venda </label>
				   	<input type="text" class="form-control" name="data_venda" placeholder="Informe a Data venda" required="">
				  	</div>	  	
                            <div class="form-group">
				   	<label for="valor_venda"> Valor venda </label>
				   	<input type="text" class="form-control" name="valor_venda" placeholder="Informe o Valor venda" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="comissao_vend"> Comissão Vendedor </label>
				   	<input type="text" class="form-control" name="comissao_vend" placeholder="Informe a Comissão Vendedor" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="cod_vendedor"> Cód Vendedor </label>
				   	<input type="text" class="form-control" name="cod_vendedor" placeholder="Informe o Cód Vendedor" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="cod_cliente"> Cód Cliente </label>
				   	<input type="text" class="form-control" name="cod_cliente" placeholder="Informe o Cód Cliente" required="">
				  	</div>
                    
				  	
	      	</div>
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
		        	<button type="submit" name="inserir_dado" class="btn btn-primary"> Salvar registros </button>
		      </div>
		   </form>
   	</div>
  	</div>
</div>
<!-- ------------------------------------------------------------------------ -->





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
	      <form action="vendaAlt.php" method="POST" enctype="multipart/form-data">
	      	  	<div class="modal-body">
			<div class="form-group">
				   	<label for="data_venda"> Data venda </label>
				   	<input type="text" class="form-control" name="data_venda" placeholder="Informe a Data venda" required="">
				  	</div>	  	
                            <div class="form-group">
				   	<label for="valor_venda"> Valor venda </label>
				   	<input type="text" class="form-control" name="valor_venda" placeholder="Informe o Valor venda" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="comissao_vend"> Comissão Vendedor </label>
				   	<input type="text" class="form-control" name="comissao_vend" placeholder="Informe a Comissão Vendedor" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="cod_vendedor"> Cód Vendedor </label>
				   	<input type="text" class="form-control" name="cod_vendedor" placeholder="Informe o Cód Vendedor" required="">
				  	</div>
                            <div class="form-group">
				   	<label for="cod_cliente"> Cód Cliente </label>
				   	<input type="text" class="form-control" name="cod_cliente" placeholder="Informe o Cód Cliente" required="">
				  	</div>
                    
				  	
	      	</div>
	      	<input type="hidden" id="upd_id" name="upd_id">
		      <div class="modal-footer">
		      	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
		        	<button type="submit" name="alterar_dado" class="btn btn-primary"> Salvar registros </button>
		      </div>
		   </form>
   	</div>
  	</div>
</div>
<!-- ------------------------------------------------------- -->







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
	      <form action="vendaDrop.php" method="POST" enctype="multipart/form-data">
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
			<h2> Vendas </h2>
		</div>
		<div class="card">
			<div class="card-body">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addForm"> Adicionar Venda </button>
				<span id="botoesExportar" style="float: right;"></span>
			</div>
			<?php
				if (isset($_SESSION['msg']))
				{
					switch ($_GET['ret']) 
					{
						case 'OK':
							$tpMsg = 'alert-success'; 
							break;
						case 'ERR':
							$tpMsg = 'alert-danger'; 
							break;
					}
					?>
					<div id="mensagem">
						<div class="alert <?= $tpMsg; ?>" role="alert">
			  				<?= $_SESSION['msg']; ?>
						</div>
					</div>
				<?php
					unset($_SESSION['msg']);
					}
				?>
		</div>

		<!-- ----------------------------------------- -->

		<div class="card">
			<div class="card-body">
				<?php
					include_once('conexao.php');
					$sql = "SELECT * FROM venda;";
					$result = $mysqli->query($sql);
				?>
				<table class="table table-sm table-hover" id="minhaTabela">
					<thead>
						<tr>
							<th scope="col"> Código </th>
							<th scope="col"> Data </th>
                                                        <th scope="col"> Valor </th>
							<th scope="col"> Comissão Vendedor </th>
                                                        <th scope="col"> Cód Vendedor </th>
                                                        <th scope="col"> Cód Cliente </th>
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
							<th scope="row"><?= $row['cod_venda']; ?></th>
							<td><?= $row['data_venda']; ?></td>
                                                        <td><?= $row['valor_venda']; ?></td>
                                                        <td><?= $row['comissao_vend']; ?></td>
                                                        <td><?= $row['cod_vendedor']; ?></td>
                                                        <td><?= $row['cod_cliente']; ?></td>
							<td style="text-align: right; width: 20%;">
								<button type="button" class="btn btn-success btnEditar" id="<?= $row['cod_venda']; ?>"> Alterar </button>
								<button type="button" class="btn btn-danger btnExcluir" id="<?= $row['cod_venda']; ?>"> Excluir </button>
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
<!-- Chama modal para alterar os dados -->
<script type="text/javascript">
	$(document).ready(function() {
		$(document).on('click', '.btnEditar', function() 
		{
			var id_upd = $(this).attr('id');
			$.ajax({
				url: "vendaBusca.php",
				method: "POST",
				data: {id: id_upd},
				dataType: "json",
				success: function(data)
				{
					$('#upd_id').val(data.cod_venda);
                                        $('#data_venda').val(data.data_venda);
					$('#valor_venda').val(data.valor_venda);
                                        $('#comissao_vend').val(data.comissao_vend);
                                        $('#cod_vendedor').val(data.cod_vendedor);
                                        $('#cod_cliente').val(data.cod_cliente);
					$('#editForm').modal('show');
				}
			});
		});
	});
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
