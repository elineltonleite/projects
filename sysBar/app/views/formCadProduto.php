

<form method="GET" action=""id="formCadProd">
	<div class="div-h2">
		<h2>Cadastrar Produto</h2>
	</div>
	<input type="hidden" name="link" value="app/controllers/ControllerProdutos">
	<input type="hidden" name="m" value="cadastrarProduto">
	<div id="divDescricao">
		<label for="txtDescricao">Descrição:</labeL>
		<input type="text" id="txtDescricao" name="txtDescricao"autofocus required>
	</div>
	<div id="divPreco">
		<label for="txtPreco">Preço:</labeL>
		<input type="text" id="txtPreco" name="txtPreco" required>
	</div>
	<div>
		<button>Cadastrar</button>
	</div>
</form>