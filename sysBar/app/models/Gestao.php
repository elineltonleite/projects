<?php

class Gestao{
	private $con;
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	public function retornaComandasComFiltro($cliente, $dataInicial){
		//$sql ="SELECT * FROM `comandas`";
		
		$sql="SELECT * FROM `comandas`";
		
		if(!empty($cliente)){
			$sql .="WHERE `mesa_cliente` LIKE '%".$cliente."%'";
		}else if(!empty($dataInicial)){
			$sql .="WHERE `data_inicio` LIKE '%".$dataInicial."%'";
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