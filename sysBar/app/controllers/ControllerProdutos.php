<?php

class ControllerProdutos{
	
	public function menuProdutos(){
		$menu = New MenuProdutos();
		$menu->montaMenu();
	}
	
	
	public function formCadastrarProduto(){
		include_once'./app/views/formCadProduto.php';
	}
	
	public function listaProdutosCadastrados(){
		
	}
	public function teste(){echo'ok';}
	
}




$p = New ControllerProdutos();
//$p->menuProdutos();

$p->formCadastrarProduto();
$p->listaProdutosCadastrados();


// chama o methodo dinamicamente

if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	$p->$m();
}

