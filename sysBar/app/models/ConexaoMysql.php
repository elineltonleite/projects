<?php

class ConexaoMySql{
	private $dbUser;
	private $dbPass;
	private $dbName;
	private $dbHost;
	private $con;
	
	public function __construct(){
		$this->dbUser ="root";
		$this->dbPass ="";
		$this->dbName ="db_sysbar";
		$this->dbHost ="localhost";
		
	}	
	public function abrirConexao(){
		$this->con = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);		
	}
	
	public function execSql($sql){
		$this->abrirConexao();
		return $this->con->query($sql);
		$this->con->close();
	}
	
}

