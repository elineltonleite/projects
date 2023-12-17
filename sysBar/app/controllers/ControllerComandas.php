<?php

class ControllerComandas{
	
	public function mostraComandas(){
		$comandas = new Comandas();
		$comandas->ComandasAbertas();
		
	}
	public function menu(){
		$menu= new MenuComanda();
		$menu->montaMenu();
	}
	public function abrirComanda(){
		
	}
}

$c = new ControllerComandas();
$c->menu();
$c->mostraComandas();