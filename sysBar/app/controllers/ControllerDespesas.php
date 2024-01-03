<?php

class ControllerDespesas{
	
	public function formCadastrar(){
		include_once'./app/views/formCadDespesa.php';
	}
	
	public function cadastrarDespesa($descricao, $valor){
		$despesa =  new Despesa;
		$despesa->cadDespesa($descricao, $valor);
	}
	
	public function mostraDepesas(){
		$despesa =  new Despesa;
		$result = $despesa->retornaDepesasCadastradas();
		include_once'./app/views/listaDespesasCadastradas.php';
	}
	
	
}




$c = new ControllerDespesas;
$c->formCadastrar();
$c->mostraDepesas();


$metodosPermitidos = [
	'cadastrarDespesa'
];


if(isset($_REQUEST['m'])){
	$metodo = $_REQUEST['m'];
	
	if(in_array($metodo, $metodosPermitidos)){
		if($metodo == 'cadastrarDespesa'){
			$c->$metodo($_REQUEST['txtDescricao'],$_REQUEST['txtValor'] );
		}
	}
	
}else{
	
}