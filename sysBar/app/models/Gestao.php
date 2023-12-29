<?php

class Gestao{
	private $con;
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	public function retornaComandasComFiltro($cliente, $data){
		//$sql ="SELECT * FROM `comandas`";
		
		$sql="SELECT * FROM `comandas`";
		
		if(isset($cliente) && !empty($cliente)){
			$sql .="WHERE `mesa_cliente` LIKE '%".$cliente."%'";
		}else if(isset($data) && !empty($data)){
			$sql .="WHERE `data_inicio` LIKE '%".$data."%'";
		}
		/*
		if(isset($data) && !empty($data)&&isset($cliente) && !empty($cliente)){
			$sql .="WHERE `data_inicio` LIKE '%".$data."%' and `mesa_cliente` LIKE '%".$cliente."%'";
		}	
		
		echo $sql;*/

		return $this->con->execSql($sql);
	}
	
	public function retornaComandasSemFiltro(){
		$sql ="SELECT * FROM `comandas`";
		return $this->con->execSql($sql);
	} 
	
	
	
}