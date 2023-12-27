<div class="div-h2">
		<h2>Resultado da Consulta</h2>
	</div>

<?php

	echo'
		<table>
			<tr>
				<th class="alignCenter">Comanda</th>
				<th class="alignLeft">Mesa / Cliente</th>
				<th class="alignLeft">Data Inicio</th>
				<th class="alignLeft">Data Fim</th>
				<th class="alignLeft">Status</th>
				<th class="alignLeft">Valor</th>
			</tr>
	';	
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
			echo'<tr>';
				echo '<td class="alignCenter">'.$row['id'].'</td>';
				echo '<td class="alignLeft">'.ucwords($row['mesa_cliente']).'</td>';
				echo '<td class="alignLeft">'.$row['data_inicio'].'</td>';
				echo '<td class="alignLeft">'.$row['data_fim'].'</td>';
				echo '<td class="alignLeft">'.$row['status'].'</td>';
				echo '<td class="alignLeft">'.$row['total'].'</td>';
			echo'</tr>';
			
		}
		
	echo'</table>';	