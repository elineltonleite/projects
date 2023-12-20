<?php


$con =  new ConexaoMySql();

$sql ="SELECT * FROM `produtos`";
$r = $con->execSql($sql);

echo'<div id="divTable">
	    <h2>Produtos cadastrados</h2>
	<table>
		<tr>
			<th>Id</th>
			<th>Descrição</th>
			<th>Valor</th>
		</tr>
	';

while($row = $r->fetch_array(MYSQLI_ASSOC)){
	echo'<tr>';
	echo '<td>'.$row['id'].'</td>';
	echo '<td>'.$row['descricao'].'</td>';
	echo '<td>'.$row['preco_venda'].'</td>';
	echo'</tr>';
}
echo'
	</table>
	</div>
';