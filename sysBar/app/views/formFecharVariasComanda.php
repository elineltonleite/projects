	<div>
	<?php 
	echo 'Cliente  : '.ucfirst($_REQUEST['mesa']).'<br>';
	echo 'Comandas : '.$_REQUEST['comandas'].'<br>';
	echo 'Total: R$ '.number_format($_REQUEST['total'], 2, ',', '.').'<br><br>';
	?>
	</div>
	
<form method="GET" action=""id="formCadProd">
	<div class="div-h2">
		<h2>Encerrar Pendência</h2>
	</div>
	<input type="hidden" name="link" value="app/controllers/ControllerComandas">
	<input type="hidden" name="m" value="fecharVariasComanda">
	
	<input type="hidden" name="comandas" value="<?php echo $_REQUEST['comandas'];?>">
	<input type="hidden" name="total" value="<?php echo $_REQUEST['total'];?>">
	

	<div id="divDescricao">
		<label for="txtDescricao">Descrição:</labeL>
		<select id="txtDescricao" name="txtDescricao"autofocus required>
			<option></option>
			<option>A Receber</option>
			<option>Pagamento Cart. Credito</option>
			<option>Pagamento Cart. Debito</option>
			<option>Pagamento Dinheiro</option>
			<option>Pagamento Pix</option>
		</select>
	</div>
	<div>
		<button>Finalizar</button>
	</div>
</form>