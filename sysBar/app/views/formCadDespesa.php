

<form method="POST" action=""id="formCadProd">
	<div class="div-h2">
		<h2>Cadastrar Despesa</h2>
	</div>
	<input type="hidden" name="link" value="app/controllers/ControllerDespesas">
	<input type="hidden" name="m" value="cadastrarDespesa">
	<div id="divDescricao">
		<label for="txtDescricao">Descrição</labeL>
		<input type="text" id="txtDescricao" name="txtDescricao"autofocus required>
	</div>
	<div id="divPreco">
		<label for="txtValor">Valor</labeL>
		<input type="text" id="txtValor" name="txtValor" required>
	</div>
	<div>
		<button>Cadastrar</button>
	</div>
</form>