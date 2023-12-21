<?php

class ControllerComandas{
	
	public function msg($mensagem, $bg){
		echo '<div class="divMsg '.$bg.'">'.$mensagem.'</div>';
	}
	
	
	public function mostraComandas(){
		$comandas = new Comandas();
		$comandas->comandasAbertas();
		
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
}

$c = new ControllerComandas();

$metodosPemitidos = [
		'abrirComanda',
		'mostraComandas'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	if(in_array($m,$metodosPemitidos)){
		
		if($m == 'abrirComanda') {
			$c->$m($_REQUEST['txtNomeComanda']);
		}else{
			$c->$m();
		}		
	}
}else{
	$c->menu();
	//$c->mostraComandas();
}
