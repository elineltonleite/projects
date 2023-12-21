<?php

class Produto{
	
	private  $con;
	
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	
	public function cadastrar($desc, $preco){
		
		$sql ="INSERT INTO `produtos` VALUES(default, '".strtolower($desc)."', ".$preco.")";
		$this->con->execSql($sql);
		
		if($this->con->execSql($sql)){
			return 'ok';
		}else{
			return 'erro';
		}
	}
	
	public function editar($id, $desc, $preco){
		$sql ="UPDATE `produtos` SET `descricao`='".strtolower($desc)."', `preco_venda`=".$preco." WHERE id=".$id;
		if($this->con->execSql($sql)){
			return 'ok';
		}else{
			return 'erro';
		}
	}
	
	public function listarProdutosCadastrados(){

		$sql ="SELECT * FROM `produtos`";
		
		$r = $this->con->execSql($sql);

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

			while($row = $r->fetch_array(MYSQLI_ASSOC)){
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
	}
	
}

