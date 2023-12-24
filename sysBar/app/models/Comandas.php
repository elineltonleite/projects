<?php

class Comandas{
	private $con;
	
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	public function  comandasAbertas($status){
			//$sql ="SELECT * FROM `comandas` WHERE `status`='pendente'";
			$sql ="SELECT * FROM `comandas` WHERE `status`='".$status."'";
			return $this->con->execSql($sql);
			
	}
	public function consultaConsumoComanda($idComanda){
			$sql ="SELECT * FROM `consumos`  WHERE `id_comanda`=".$idComanda;
			return $this->con->execSql($sql);
			
	}
	public function consultaComanda($idComanda){
		$sql ="SELECT * FROM `comandas`  WHERE `id`=".$idComanda;
			return $this->con->execSql($sql);
	}
	
	public function abrirComanda($nomeComanda){
		date_default_timezone_set('America/Sao_Paulo');
		 
		$sql ="INSERT INTO `comandas`(`id`, `mesa_cliente`, `status`)VALUES(default,'".strtolower($nomeComanda)."', 'pendente')";
		//return $sql;
		if($this->con->execSql($sql)){
			return 'ok';
		}else{
			return 'erro';
		}
	}
	public function encerrarComanda($idComanda,$status,$total){
		date_default_timezone_set('America/Sao_Paulo');
		$sql="UPDATE `comandas` SET `status`='".$status."', `data_fim`='".date('Y-m-d')."', `total`=".$total." WHERE id=".$idComanda;
		$this->con->execSql($sql);		
	}
	
	public function cadastraConsumo($idComanda,$idProduto, $qtd){
		
		//recupera os dados do produto no banco
		$sql ="SELECT * FROM `produtos` WHERE id=".$idProduto;
		$result = $this->con->execSql($sql);
		
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			$descProduto = $row['descricao'];
			$valor = $row['preco_venda'];
		}
		
		$sql = "INSERT INTO `consumos` VALUES(default, ".$idComanda.",'".$descProduto."',".$valor.",".$qtd.",".($qtd*$valor).")";
		$this->con->execSql($sql);
	
	}
	
	public function removerConsumo($id){
		$sql ="DELETE FROM `consumos` WHERE id=".$id;
		$this->con->execSql($sql);
	}
}



