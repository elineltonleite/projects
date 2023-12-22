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
		return $this->con->execSql($sql);
	}
	
}

