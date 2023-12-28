<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Controle de comandas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="icon" href="./imgs/notas.png">
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
		<li><a href="?link=app/controllers/ControllerGestao"><img src="./imgs/money.png" width="45px">Gestão</a></li>
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
				echo'<div id="divTopoAside">';
					echo 'Nº Comanda: '.$_REQUEST['id'].'<br>';
					echo 'Mesa / Cliente : '.$_REQUEST['mesa'];
				echo'</div>';
				if($_REQUEST['status']=='pendente'){
					include_once'./app/views/formCadConsumo.php';
				}	
				$c = new ControllerComandas();	
				$tot = $c->consultaComadaPorNumero($_REQUEST['id']);
				
				if($_REQUEST['status']=='pendente'){	
				echo'
					<a href="?link=./app/views/formFecharComanda&id='.$_REQUEST['id'].'&mesa='.$_REQUEST['mesa'].'&total='.$tot.'">
						<div id="divFecharComanda">
							Fechar Comanda
						</div>
					</a>
					';
				}	
			}
			
		?>
	</div>
</aside>
</body>
</html>