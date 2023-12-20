<?php

class ControllerProdutos{
	
	public function menuProdutos(){
		$menu = New MenuProdutos();
		$menu->montaMenu();
	}
	
	
	public function formCadastrarProduto(){
		include_once'./app/views/formCadProduto.php';
	}
	
	public function produtosCadastrados(){
			$produto = new Produto();
			$produto->listarProdutosCadastrados();
	}
	public function cadastrarProduto($desc, $preco){
			$produto = new Produto();
			$produto->cadastrar($desc, $preco);
		
		}
	
}




$p = New ControllerProdutos();



$metodosPemitidos = [
		'cadastrarProduto'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	if(in_array($m,$metodosPemitidos)){
		if($m == 'cadastrarProduto'){
			$p->$m($_REQUEST['txtDescricao'], $_REQUEST['txtPreco']);
		}else{
			$p->$m();
		}
		
	}
}


$p->formCadastrarProduto();
$p->produtosCadastrados();