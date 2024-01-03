
<form id="formComanda" method="POST">
	<input type="hidden" name="link" value="app/controllers/ControllerComandas">	
	<input type="hidden" name="m" value="abrirComanda">	
	<div class="div-h2">
		<h2>Abrir Comandas</h2>
	</div>
	<div>
		<label for="txtxNomeComanda">Cliente / Mesa </label>
		<input type="text" name="txtNomeComanda" id="txtNomeComanda" autofocus required>
	</div>
	<div>
		<button>Abrir</button>
	</div>	
</form>