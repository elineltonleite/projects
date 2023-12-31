	<div>
	<?php 
	echo 'Nº Comanda : '.$_REQUEST['id'].'<br>';
	echo 'Mesa / Cliente : '.$_REQUEST['mesa'].'<br>';
	echo 'Total R$ : '.number_format($_REQUEST['total'],2, ',', '.').'<br><br>';
	?>
	</div>
<form method="GET" action=""id="formCadProd">
	<div class="div-h2">
		<h2>Deduzir Valor Comanda</h2>
	</div>
	
	<input type="hidden" name="link" value="app/controllers/ControllerComandas">
	<input type="hidden" name="m" value="deduzirValor">
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
	<input type="hidden" name="total" value="<?php echo $_REQUEST['total'];?>">
	
	<div id="divDescricao">
		<label for="txtDescricao">Descrição</labeL>
		<input type="text" name="txtDescricao" id="txtDescricao">
	</div>
	<div id="divPreco">
		<label for="txtValorDeduzir">Valor</labeL>
		<input type="text" name="txtValorDeduzir" id="txtValorDeduzir">
	</div>
	<div>
		<button>Finalizar</button>
	</div>
</form>