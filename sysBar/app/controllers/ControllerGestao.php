<?php

class ControllerGestao{
	public function vendas(){
		$gestao = new Gestao();
		$result = $gestao->retornaVendas();
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			echo $row['id'].'--';
			echo $row['mesa_cliente'].'--';
			echo $row['data_inicio'].'--';
			echo $row['data_fim'].'--';
			echo $row['status'].'--';
			echo $row['total'].'<br>';
			
		}
		
		
	}
}

$c = new ControllerGestao();
$c->vendas();