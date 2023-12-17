<?php


class ControllerProdutos{
	
	public function menuProdutos(){
		$menu = New MenuProdutos();
		$menu->montaMenu();
	}
	public function listaProdutosCadastrados(){
		
	}
}

$p = New ControllerProdutos();
$p->menuProdutos();
$p->listaProdutosCadastrados();
