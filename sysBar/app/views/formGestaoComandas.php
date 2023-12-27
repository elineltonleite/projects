<?php
	

?>

<form method="GET">
	<!-- 
		criado botões hidden para passar valores na URL
		e evitar usar o action do form, porque o conteúdo
		está sendo carregado dinamicamente pela URL
	-->
	
	<input type="hidden" name="link" value="app/controllers/ControllerGestao">
	<input type="hidden" name="m" value="retornaTodasComandas">
	
	
	<div class="div-h2">
			<h2>Gestão de Comandas</h2>
	</div>
	<div id="">
		<label for="txtCliente">Cliente</label>
		<input type="text" name="txtCliente" id="txtCliente">
	</div>
	<div id="">
		<label for="txtData">Data</label>
		<input type="date" name="txtData" id="txtData">
	</div>
	
	
	
	
<div id="divProduto">
		<label for="txtStatus">Status</label>
		<select name="txtStatus" id="txtStatus">
			<option></option>
			<?php
				for($i=0; $i<count($status); $i++){
					echo '<option>'.ucfirst($status).'</option>';
				}
			?>
		</select>
	</div>
<div>
		<button>Consultar</button>
	</div>
</form>