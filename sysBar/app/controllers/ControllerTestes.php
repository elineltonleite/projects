<?php

class ControllerTestes{
	
	public function teste($q){
		
		$arComandas = explode(' ',trim($q));
		foreach($arComandas as $comanda){
			$sql ="UPDATE SET `` id=".$comanda;
		}
		/*echo'<pre>';
		print_r($ar);*/
	}
}

$c = new ControllerTestes();

if($_REQUEST['m']){
	$metodo = $_REQUEST['m'];
	$c->$metodo($_REQUEST['comandas']);
}