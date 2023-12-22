<?php

class ControllerComandas{
	
	public function msg($mensagem, $bg){
		echo '<div class="divMsg '.$bg.'">'.$mensagem.'</div>';
	}
	
	
	public function mostraComandas(){
		$comandas = new Comandas();
		$result = $comandas->comandasAbertas();
		include_once'./app/views/listaComandasAbertas.php';	
	}
	
	public function consultaComadaPorNumero($idComanda){
		$comandas = new Comandas();
		$result = $comandas->consultaComanda($idComanda);
		include_once'./app/views/listaConsumoPorIdComanda.php';
		
	}
	
	
	public function menu(){
		$menu= new MenuComanda();
		$menu->montaMenu();
	}
	public function abrirComanda($nomeComanda){
		$comanda =  new Comandas();
		$msg = $comanda->abrirComanda($nomeComanda);
		if($msg == 'ok'){
			$this->msg('Sucesso!! Comanda aberta.','color-blue');
		}else{
			$this->msg('Erro!! Não foi possível abrir a comanda, refaça a operação.','color-red');
		}
		$menu= new MenuComanda();
		$menu->montaMenu();
		
		
	}
	public function addConsumo($idComanda,$mesa,$idProduto, $qtd){
		$comandas = new Comandas();
		$comandas->cadastraConsumo($idComanda,$idProduto, $qtd);
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&id='.$idComanda.'&mesa='.$mesa.'&aside=true');
	}
}




$c = new ControllerComandas();

$metodosPemitidos = [
		'abrirComanda',
		'mostraComandas',
		'addConsumo'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	if(in_array($m,$metodosPemitidos)){
		
		if($m == 'abrirComanda') {
			$c->$m($_REQUEST['txtNomeComanda']);
		}else if($m == 'addConsumo') {
			$c->$m($_REQUEST['comanda'], $_REQUEST['mesa'],$_REQUEST['txtProduto'], $_REQUEST['txtQtd']);
		}else{
			$c->$m();
		}		
	}
}else{
	$c->menu();
	//$c->mostraComandas();
}
