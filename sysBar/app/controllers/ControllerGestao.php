<?php

class ControllerGestao{
	
	public function retornaTodasComandas($cliente, $data){
		$gestao = new Gestao();
		$result = $gestao->retornaComandasComFiltro($cliente, $data);
		include_once'./app/views/listaTodasComandas.php';
	}
	public function mostraFormulario(){
		include_once'./app/views/formGestaoComandas.php';	
	}
	
	public function menuGestao(){
		$menu = new MenuGestao();
		$menu->montaMenu();
	}
	
}




$c = new ControllerGestao();



$metodosPermitidos=[
	'retornaTodasComandas',
	'mostraFormulario'
];

if(isset($_REQUEST['m'])){
	$metodo = $_REQUEST['m'];
	
	if(in_array($metodo, $metodosPermitidos)){
		if($metodo == 'retornaTodasComandas'){
			$c->mostraFormulario();
			$c->$metodo($_REQUEST['txtCliente'], $_REQUEST['txtData']);
		}else{
			$c->$metodo();
		}
	}
	
}else{
	$c->menuGestao();
}
