
<form method="GET" action=""id="formCadProd">
	<div class="div-h2">
		<h2>Fechar Comanda</h2>
	</div>
	<input type="hidden" name="link" value="app/controllers/ControllerComandas">
	<input type="hidden" name="m" value="fecharComanda">
	<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>">
	
	<div id="divDescricao">
		<label for="txtDescricao">Descrição:</labeL>
		<select id="txtDescricao" name="txtDescricao"autofocus required>
			<option></option>
			<option>A Receber</option>
			<option>Pagamento Cart. Credito</option>
			<option>Pagamento Cart. Debito</option>
			<option>Pagamento Dinheiro</option>
			<option>Sem Consumo</option>
		</select>
	</div>
	<div>
		<button>Finalizar</button>
	</div>
</form>