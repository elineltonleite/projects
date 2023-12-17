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
		<h1>Bar do Shurek</h1>
	</header>
	
	<ul>
		<li><a href="?link=app/controllers/ControllerComandas">Comandas</a></li>
		<li><a href="?link=app/controllers/ControllerProdutos">Produtos</a></li>
	</ul>
</nav>
<main>
	<div class="divComandas">
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
</body>
</html>