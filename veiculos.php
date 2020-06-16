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
	      <form action="veiculosIns.php" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
                    <div class="form-group">
				   	<label for="ano"> Ano </label>
				   	<input type="text" class="form-control" name="Ano" placeholder="Informe o Ano do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="cor"> Cor </label>
				   	<input type="text" class="form-control" name="Cor" placeholder="Informe a Cor do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="valor"> Valor </label>
				   	<input type="text" class="form-control" name="Valor" placeholder="Informe o Valor do Veículo" required="">
                    </div>
                    
                    <div class="form-group">
				   	<label for="cod_marca"> Código da marca </label>
				   	<input type="text" class="form-control" name="Código" placeholder="Informe o Código da Marca" required="">
                    </div>
                    <div class="form-group">
				   	<label for="tipo_veiculo"> Tipo do veículo </label>
				   	<input type="text" class="form-control" name="Tipo" placeholder="Informe o Tipo do Veículo (Moto ou Carro) " required="">
                    </div>
                    <div class="form-group">
				   	<label for="modelo_veiculo"> Modelo do Veículo </label>
				   	<input type="text" class="form-control" name="Modelo" placeholder="Informe o Modelo do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="marca_veiculo"> Marcas (Carros e Motos) </label>
				   	<select class="custom-select" name="uf" required>
						  	<option value="" selected> Selecionar uma Marca (Moto) </option>
						  	<option value="SC"> Outros </option>
						  	<option value="PR"> Honda </option>
						  	<option value="RS"> Yamaha </option>
                                                        <option value="" selected> Selecionar uma Marca (Carro) </option>
						  	<option value="SP"> Outros </option>
                                                        <option value="SP"> Ford </option>
						  	<option value="RJ"> Chevrolet </option>
                                                        <option value="RJ"> Fiat </option>
                                                        <option value="RJ"> volkswagen </option>
					</select>
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
	      <form action="veiculosAlt.php" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
                    <div class="form-group">
				   	<label for="ano"> Ano </label>
				   	<input type="text" class="form-control" name="Ano" placeholder="Informe o Ano do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="cor"> Cor </label>
				   	<input type="text" class="form-control" name="Cor" placeholder="Informe a Cor do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="valor"> Valor </label>
				   	<input type="text" class="form-control" name="Valor" placeholder="Informe o Valor do Veículo" required="">
                    </div>
                    
                    <div class="form-group">
				   	<label for="cod_marca"> Código da marca </label>
				   	<input type="text" class="form-control" name="Código" placeholder="Informe o Código da Marca" required="">
                    </div>
                    <div class="form-group">
				   	<label for="tipo_veiculo"> Tipo do veículo </label>
				   	<input type="text" class="form-control" name="Tipo" placeholder="Informe o Tipo do Veículo (Moto ou Carro) " required="">
                    </div>
                    <div class="form-group">
				   	<label for="modelo_veiculo"> Modelo do Veículo </label>
				   	<input type="text" class="form-control" name="Modelo" placeholder="Informe o Modelo do Veículo" required="">
                    </div>
                    <div class="form-group">
				   	<label for="marca_veiculo"> Marcas (Carros e Motos) </label>
				   	<select class="custom-select" name="uf" required>
						  	<option value="" selected> Selecionar uma Marca (Moto) </option>
						  	<option value="SC"> Outros </option>
						  	<option value="PR"> Honda </option>
						  	<option value="RS"> Yamaha </option>
                                                        <option value="" selected> Selecionar uma Marca (Carro) </option>
						  	<option value="SP"> Outros </option>
                                                        <option value="SP"> Ford </option>
						  	<option value="RJ"> Chevrolet </option>
                                                        <option value="RJ"> Fiat </option>
                                                        <option value="RJ"> volkswagen </option>
					</select>
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
	      <form action="veiculosDrop.php" method="POST" enctype="multipart/form-data">
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
			<h2> Veículos </h2>
		</div>
		<div class="card">
			<div class="card-body">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addForm"> Adicionar Veículos </button>
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
					$sql = "SELECT * FROM veiculos;";
					$result = $mysqli->query($sql);
				?>
				<table class="table table-sm table-hover" id="minhaTabela">
					<thead>
						<tr>
							<th scope="col"> Código </th>
							<th scope="col"> Ano </th>
                                                        <th scope="col"> Cor </th>
							<th scope="col"> Valor </th>
                                                        <th scope="col"> Código Marca </th>
                                                        <th scope="col"> Tipo Veiculo </th>
                                                        <th scope="col"> Modelo Veículo </th>
                                                        <th scope="col"> Marca Veículo</th>
                                                        <th scope="col"> Proprietário</th>
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
							<th scope="row"><?= $row['cod_veiculos']; ?></th>
							<td><?= $row['ano']; ?></td>
							<td><?= $row['cor']; ?></td>
                                                        <td><?= $row['valor']; ?></td>
                                                        <td><?= $row['cod_marca']; ?></td>
                                                        <td><?= $row['tipo_veiculo']; ?></td>
                                                        <td><?= $row['modelo_veiculo']; ?></td>
                                                        <td><?= $row['marca_veiculo']; ?></td>
                                                        <td><?= $row['cod_proprietario']; ?></td>
							<td style="text-align: right; width: 20%;">
								<button type="button" class="btn btn-success btnEditar" id="<?= $row['cod_veiculos']; ?>"> Alterar </button>
								<button type="button" class="btn btn-danger btnExcluir" id="<?= $row['cod_veiculos']; ?>"> Excluir </button>
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
				url: "veiculosBusca.php",
				method: "POST",
				data: {id: id_upd},
				dataType: "json",
				success: function(data)
				{
					$('#upd_id').val(data.cod_veiculos);
					$('#ano').val(data.veiculos);
					$('#cor').val(data.veiculos);
                                        $('#valor').val(data.veiculos);
                                        $('#cod_marca').val(data.veiculos);
                                        $('#tipo_veiculo').val(data.veiculos);
                                        $('#modelo_veiculo').val(data.veiculos);
                                        $('#marca_veiculo').val(data.veiculos);
                                        $('#cod_proprietario').val(data.veiculos);
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
