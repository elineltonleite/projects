<?php

class ControllerGestao{
	
	public function retornaTodasComandas($cliente, $data){
		$gestao = new Gestao();
		$result = $gestao->retornaComandasComFiltro($cliente, $data);
		include_once'./app/views/listaTodasComandas.php';
	}
	
}


include_once'./app/views/formGestaoComandas.php';	

$c = new ControllerGestao();

$metodosPermitidos=[
	'retornaTodasComandas'
];

if(isset($_REQUEST['m'])){
	$metodo = $_REQUEST['m'];
	
	if(in_array($metodo, $metodosPermitidos)){
		if($metodo == 'retornaTodasComandas'){
			$c->$metodo($_REQUEST['txtCliente'], $_REQUEST['txtData']);
		}
	}
	
}

