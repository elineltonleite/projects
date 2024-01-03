<?php

class Despesa{
	private $con;
	
	public function __construct(){
		$this->con = new ConexaoMysql;
	}
	
	public function cadDespesa($descricao, $valor){
		$sql="INSERT INTO `despesas`(`id`, `descricao`, `valor`) VALUES(default,'".$descricao."',".$valor.")";
		$this->con->execSql($sql);
	}
	
	public function retornaDepesasCadastradas(){
		$sql="SELECT * FROM `despesas`";
		return $this->con->execSql($sql);
	}
	
}