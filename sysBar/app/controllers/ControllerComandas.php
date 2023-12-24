<?php

class ControllerComandas{
	
	public function msg($mensagem, $bg){
		echo '<div class="divMsg '.$bg.'">'.$mensagem.'</div>';
	}
	
	
	public function mostraComandas($status){
		$comandas = new Comandas();
		$result = $comandas->comandasAbertas($status);
		if($status == 'pendente'){
			include_once'./app/views/listaComandasAbertas.php';	
		}else if($status=='A receber'){
			include_once'./app/views/listaComandasAReceber.php';	
		}
	}
	
	public function consultaComadaPorNumero($idComanda){
		$comandas = new Comandas();
		$result = $comandas->consultaConsumoComanda($idComanda);
		include_once'./app/views/listaConsumoPorIdComanda.php';
		return $total;
		
	}
	
	
	public function menu(){
		$menu= new MenuComanda();
		$menu->montaMenu();
	}
	public function abrirComanda($nomeComanda){
		$comanda =  new Comandas();
		$msg = $comanda->abrirComanda($nomeComanda);
		if($msg == 'ok'){
			$this->msg('Sucesso!! Comanda aberta.','color-blue');
		}else{
			$this->msg('Erro!! Não foi possível abrir a comanda, refaça a operação.','color-red');
		}
		$menu= new MenuComanda();
		$menu->montaMenu();
		
		
	}
	public function addConsumo($idComanda, $mesa, $idProduto, $qtd){
		$comandas = new Comandas();
		$comandas->cadastraConsumo($idComanda, $idProduto, $qtd);
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente&id='.$idComanda.'&mesa='.$mesa.'&aside=true');
	}
	public function deletConsumo($id, $idComanda){
		$comandas = new Comandas();
		$comandas-> removerConsumo($id);
		
		//recupera os dados da comanda 
		$result = $comandas->consultaComanda($idComanda);
		
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			$mesa = ucfirst($row['mesa_cliente']);
		}
		
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente&id='.$idComanda.'&mesa='.$mesa.'&aside=true');
		//echo $mesa;
	}
	
	public function fecharComanda($idComanda, $status,$total){
		
		$comandas = new Comandas();
		$comandas->encerrarComanda($idComanda, $status, $total);
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente');
	}
}




$c = new ControllerComandas();

$metodosPemitidos = [
		'abrirComanda',
		'mostraComandas',
		'addConsumo',
		'deletConsumo',
		'fecharComanda'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	if(in_array($m,$metodosPemitidos)){
		
		if($m == 'abrirComanda') {
			$c->$m($_REQUEST['txtNomeComanda']);
		}else if($m == 'mostraComandas') {
			
			$c->$m($_REQUEST['status']);
			
		}else if($m == 'addConsumo') {
			
			$c->$m($_REQUEST['comanda'], $_REQUEST['mesa'], $_REQUEST['txtProduto'], $_REQUEST['txtQtd']);
			
		}else if($m == 'deletConsumo') {
			
			$c->$m($_REQUEST['id'], $_REQUEST['comanda']);
			
		}else if($m == 'fecharComanda') {
			
			$c->$m($_REQUEST['id'],$_REQUEST['txtDescricao'],$_REQUEST['total']);
			
		}else{
			$c->$m();
		}		
	}
}else{
	$c->menu();
	//$c->mostraComandas();
}
