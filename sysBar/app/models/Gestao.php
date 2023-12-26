<?php

class Gestao{
	private $con;
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	public function retornaVendas(){
		$sql ="SELECT * FROM `comandas`";
		return $this->con->execSql($sql);
	}
	
}