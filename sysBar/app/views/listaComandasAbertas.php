<?php


echo '<div class="div-h2">
		<h2>Comandas em aberto</h2>
	</div>	
	<div class="divContainerBoxComandas">';
		while($row= $result->fetch_array(MYSQLI_ASSOC)){
			echo'<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&id='.$row['id'].'&mesa='.ucfirst($row['mesa_cliente']).'&aside=true">';
			echo'<div class="boxComanda">';
			//echo'<div class="divInfoBoxComanda">';
			echo'<p class="pNum">'.$row['id'].'</span>';
			echo '<p>'.ucfirst($row['mesa_cliente']).'</p>';
			//echo'</div>';
			echo'</div>';
			echo'</a>';
		}
		echo'</div>';