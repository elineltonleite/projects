<?php 

$id =$_REQUEST['id'];
$desc =$_REQUEST['desc'];
$preco =$_REQUEST['preco'];

?>

<form method="GET" action=""id="formCadProd">
	<div class="div-h2 ">
		<h2>Editar Produto</h2>
	</div>
	<input type="hidden" name="link" value="app/controllers/ControllerProdutos">
	<input type="hidden" name="m" value="editarProduto">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	
	<div id="divDescricao">
		<label for="txtDescricao">Descrição:</labeL>
		<input type="text" id="txtDescricao" name="txtDescricao" value="<?php echo $desc;?>"autofocus required >
	</div>
	<div id="divPreco">
		<label for="txtPreco">Preço:</labeL>
		<input type="text" id="txtPreco" name="txtPreco" value="<?php echo $preco;?>"required>
	</div>
	<div>
		<button>Atualizar</button>
	</div>
</form>