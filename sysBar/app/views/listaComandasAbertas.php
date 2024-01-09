<?php


echo '<div class="div-h2">
		<h2>Comandas em aberto</h2>
	</div>	
	<div class="divContainerBoxComandas">';
		while($row= $result->fetch_array(MYSQLI_ASSOC)){
			echo'<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente&id='.$row['id'].'&mesa='.ucfirst($row['mesa_cliente']).'&aside=true">';
			
				echo'<div class="boxComanda">';
					echo'<div class="spanComanda">'.$row['id'].'</div>';
					echo'<img src="./imgs/papel.png">';
					echo '<div class="spanCliente">'.ucwords($row['mesa_cliente']).'</div>';
				echo'</div>';
			echo'</a>';
		}
		echo'</div>';