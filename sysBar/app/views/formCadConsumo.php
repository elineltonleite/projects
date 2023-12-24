<?php
$produto = new Produto();
$result = $produto->listarProdutosCadastrados();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$produtos [] = $row['descricao'];
	$id[] = $row['id'];
}
?>

<form method="GET" id="formCadConsumo">
	<input type="hidden" name="link" value="app/controllers/ControllerComandas">
	<input type="hidden" name="m" value="addConsumo">
	<input type="hidden" name="comanda" value="<?php echo $_REQUEST['id']?>">
	<input type="hidden" name="mesa" value="<?php echo $_REQUEST['mesa']?>">
	
	<div class="div-h2">
		<h2>Add Gasto</h2>
	</div>
	<div id="divProduto">
		<label for="txtProduto">Produto</label>
		<select name="txtProduto" id="txtProduto"  required autofocus>
			<option></option>
			<?php
				for($i=0; $i<count($produtos); $i++){
					echo '<option value="'.$id[$i].'">'.ucfirst($produtos[$i]).'</option>';
				}
			?>
		</select>
	</div>
	<div id="divQtd">
		<label for="txtQtd">qtd</label>
		<input type="number" name="txtQtd" id="txtQtd" autofocus min="1" required>
	</div>
	
	<div>
		<button>Add</button>
	</div>
</form>