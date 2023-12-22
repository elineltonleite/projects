<?php

echo'
	<table id="tableConsumo">
		<tr>
			<th class="alignLeft">Produtos consumidos</th>
			<th class="alignLeft">Val Unit</th>
			<th class="alignCenter">Qtd</th>
			<th class="alignLeft">Total</th>
		</tr>
	
';
$total= 0;
while($row = $result->fetch_array(MYSQLI_ASSOC)){
		echo'<tr>';
			echo'<td class="alignLeft">'.$row['produto'].'</td>';
			echo'<td class="alignLeft">R$ '.$row['valor_unitario'].'</td>';
			echo'<td class="alignCenter">'.$row['qtd'].'</td>';
			echo'<td class="alignLeft">R$ '.$row['total'].'</td>';
		echo'<tr>';
		$total += $row['total'];
}

echo'</table>';

echo'
	<div class="diValorTot">	
		<span>R$ '.number_format($total, 2, ',', '.').'</span>
	</div>	
	'	
	;