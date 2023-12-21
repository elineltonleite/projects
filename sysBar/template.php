<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Controle de comandas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<nav>
	<header>
		<!--<img src="./imgs/bar.png" width="45px">-->
		<h1>Bar do Shurek</h1>
	</header>
	
	<ul>
		<li><a href="?link=app/controllers/ControllerComandas"><img src="./imgs/documentos.png" width="45px">Comandas</a></li>
		<li><a href="?link=app/controllers/ControllerProdutos"><img src="./imgs/alcool.png" width="45px">Produtos</a></li>
	</ul>
</nav>
<main>
	<div class="divCotainer">
	<?php
		if(isset($_REQUEST['link'])){
			$dir = $_REQUEST['link'].'.php';
			if(file_exists($dir)){
				include_once $dir;
			}
		}
	?>
	</div>
</main>
<aside>
	<div class="divContainerAside">
		<?php 
			if(isset($_REQUEST['aside'])== 'true'){
				echo 'Nº : '.$_REQUEST['id'].'<br>';
				echo 'Mesa : '.$_REQUEST['mesa'];
				echo'
				<div id="menuComanda">
				<div class="div-h2">
					<h2>Add Gasto</h2>
				</div>
				<form>
					<div>
						<label for="">Item</label>
						<input type="text" name="" id="" autofocus>
					</div>
					<div>
						<label for="">qtd</label>
						<input type="number" name="" id="" autofocus>
					</div>
					<div>
						<button>Enviar<button>
					</div>	
				</form>
				<div class="div-h2">
					<h2>Comandas em aberto</h2>
				</div>
				</div>	
				';
			}
		?>
	</div>
</aside>
</body>
</html>