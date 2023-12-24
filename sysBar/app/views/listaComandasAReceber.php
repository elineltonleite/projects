<div class="div-h2">
		<h2>A receber</h2>
	</div>

<?php
	$comandas = [];
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$comandas[$row['mesa_cliente']][$row['id']][$row['total']] = $row['data_inicio'];
	}
	
	//$total =0;
	//$cmd=[];
	foreach($comandas as $mesa=> $value){
	
		echo 'Cliente :'.ucfirst($mesa).'<br>';
	
		foreach($value as $comanda=>$k){
			echo 'Comanda: <a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=A receber&id='.$comanda.'&mesa='.$mesa.'&aside=true">'.$comanda.'</a>';
		
			foreach($k as $valor=>$data){
				echo ' Data : '.$data;
				echo ' Valor R$ : '.$valor;
				//$cmd[$mesa][]=$valor; 
			}
			echo'<br>';
			
		}
	echo '<br><hr>';
}


//echo'<pre>';
//print_r($cmd);

