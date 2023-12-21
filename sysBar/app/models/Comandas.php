<?php

class Comandas{
	private $con;
	
	public function __construct(){
		$this->con = new ConexaoMysql();
	}
	public function  comandasAbertas(){
			echo '<div class="div-h2">
					<h2>Comandas em aberto</h2>
				</div>	
			';
			$sql ="SELECT * FROM `comandas` WHERE `status`='pendente'";
			$result = $this->con->execSql($sql);
			echo '<div class="divContainerBoxComandas">';
			while($row= $result->fetch_array(MYSQLI_ASSOC)){
				echo'<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&id='.$row['id'].'&mesa='.ucfirst($row['mesa_cliente']).'&aside=true">';
				echo'<div class="boxComanda">';
						//echo'<div class="divInfoBoxComanda">';
							echo'<p>Nº comada: '.$row['id'].'</p>';
							echo '<p>'.ucfirst($row['mesa_cliente']).'</p>';
						//echo'</div>';
				echo'</div>';
				echo'</a>';
			}
			echo'</div>';
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
}



