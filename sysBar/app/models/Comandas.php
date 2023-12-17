<?php

class Comandas{
	
	public function  ComandasAbertas(){
		$mesas = ['mesa-01','Mesa-02'];
		foreach($mesas as $k){
			echo $k.'<br>';
		}
	}
}