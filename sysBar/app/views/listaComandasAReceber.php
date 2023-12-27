
	<div class="div-h2">
		<h2>A receber</h2>
	</div>
<?php
	$comandas = [];
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$comandas[$row['mesa_cliente']][$row['id']][$row['total']] = $row['data_inicio'];
	}

	echo'<table class="tableAReceber">';
	
	foreach($comandas as $mesa=> $value){
		
		$total = 0;
		echo '<tr class="trTopoARecebe">
				<td colspan="3">'.ucwords($mesa).'</td>
			</tr>';
			echo'
				<tr>
					<th>Comanda</th>	
					<th class="alignLeft">Valor</th>	
					<th class="alignLeft">Data</th>	
				</tr>
			';
		/* variavel criadas para armazenas valores das comndas como string
		para depois usar expode para tranformar em array com função explode*/
		$cmds='';
		foreach($value as $comanda=>$k){
			
			$cmds .= $comanda.' ';
			echo'<tr>';
			echo '<td class="alignCenter"colspan=""><a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=A receber&id='.$comanda.'&mesa='.$mesa.'&aside=true">'.$comanda.'</a></td>';
		
			foreach($k as $valor=>$data){
				echo '<td>R$ '.$valor.'</td>';
				echo '<td>'.$data.'</td>';
				
				$total += $valor;
			}
			 
			 echo'</tr>';
		}
			echo'<tr><td>.</td></tr>';
		echo '<tr class="trUltima">
				<td>Total a Receber: </td>
				<td class="alignLeft">R$'.number_format($total, 2, ',', '.').'</td>
				<td><a href="?link=./app/views/formFecharVariasComanda&comandas='.$cmds.'&mesa='.$mesa.'&total='.$total.'">Finalizar Cobrança</a></td>
			</tr>
			<tr><td>.</td></tr>
			';
}

echo '</table>';

/*echo'<pre>';
print_r($cmds);*/

