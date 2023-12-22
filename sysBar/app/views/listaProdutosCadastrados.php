<?php

echo'<div id="divTable">
		<div class="div-h2">
			<h2>Produtos Cadastrados</h2>
		</div>	
		<div class="containerTable">
			<table>
				<tr>
					<th class="alignCenter">ID</th>
					<th class="alignLeft">Descrição</th>
					<th class="alignCenter">Valor</th>
					<th class="alignCenter">Ediar</th>
				</tr>';

			while($row = $result->fetch_array(MYSQLI_ASSOC)){
				echo'<tr>';
					echo '<td class="alignCenter">'.$row['id'].'</td>';
					echo '<td class="alignLeft">'.ucfirst($row['descricao']).'</td>';
					echo '<td class="alignCenter">R$ '.$row['preco_venda'].'</td>';
					echo '<td class="alignCenter"><a href="?link=app/controllers/ControllerProdutos&m=formEditar&id='.$row['id'].'&desc='.$row['descricao'].'&preco='.$row['preco_venda'].'"><img src="imgs/lapis.png" width="20px"></a></td>';
				echo'</tr>';
			}
			echo'
				</table>
		<div>
</div>';