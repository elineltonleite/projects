
<?php
$receber = 0;
$pix = 0;
$cartDeb = 0;
$cartCred = 0;
$din = 0;


	echo'
		<div class="divTopoTable">
			<div class="div-h2">
			<h2>Resultado da Consulta</h2>
		</div>

		<div class="containerTable">
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
				echo '<td class="alignCenter"><a href="?link=app/controllers/ControllerGestao&m=retornaTodasComandas&status=A receber&id='.$row['id'].'&mesa='.ucwords($row['mesa_cliente']).'&aside=true&txtCliente='.$_REQUEST['txtCliente'].'&txtData='.$_REQUEST['txtData'].'">'.$row['id'].'</a></td>';
				echo '<td class="alignLeft">'.ucwords($row['mesa_cliente']).'</td>';
				echo '<td class="alignLeft">'.$row['data_inicio'].'</td>';
				echo '<td class="alignLeft">'.$row['data_fim'].'</td>';
				echo '<td class="alignLeft">'.$row['status'].'</td>';
				echo '<td class="alignLeft">R$'.$row['total'].'</td>';
			echo'</tr>';
			
			if($row['status'] == 'A Receber'){
				$receber +=$row['total'];
				
			}else if($row['status'] == 'Pagamento Pix'){
				$pix +=$row['total'];
				
			}else if($row['status'] == 'Pagamento Cart. Debito'){
				$cartDeb +=$row['total'];
				
			}else if($row['status'] == 'Pagamento Cart. Credito'){
				$cartCred +=$row['total'];
				
			}else if($row['status'] == 'Pagamento Dinheiro'){
				$din +=$row['total'];
				
			}
				
			
		}
		$total = ($receber+$pix+$cartDeb+$cartCred+$din);
	echo'
		</table>
			<div class="divSomas">
				Din:R$'.number_format($din, 2, ',', '.').'||Pix:R$'.number_format($pix, 2, ',', '.').'||Cred: R$'.number_format($cartCred, 2, ',', '.').'||Deb:R$'.number_format($cartDeb, 2, ',', '.').'||Receb:R$'.number_format($receber, 2, ',', '.').'||Total:R$'.number_format($total, 2, ',', '.').'||Caixa:R$'.number_format($total - $receber, 2, ',', '.').'
			</div>
		</div>
	';	