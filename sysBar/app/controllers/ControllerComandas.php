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
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente');
		
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
	
	public function deduzirValor(){
		echo'deduzir valor em desenvolvimento';
	}
	
	public function fecharComanda($idComanda, $status,$total){
		
		$comandas = new Comandas();
		$comandas->encerrarComanda($idComanda, $status, $total);
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente');
	}
	
	
	public function fecharVariasComanda($cmds, $status, $valores){
		$comandas = new Comandas();
		$arComandas = explode(' ',trim($cmds));
		$arValores = explode(' ', trim($valores));
		
		for($i=0; $i < count($arComandas); $i++){
			$comandas->encerrarComanda($arComandas[$i], $status, $arValores[$i]);
		}
			
		
		//foreach($arComandas as $comanda){
			//$comandas->encerrarComanda($comanda, $status, $total);
			
		//}
		
		header('Location: ?link=app/controllers/ControllerComandas&m=mostraComandas&status=A receber');
	}
}




$c = new ControllerComandas();

$metodosPemitidos = [
		'abrirComanda',
		'mostraComandas',
		'addConsumo',
		'deletConsumo',
		'fecharComanda',
		'fecharVariasComanda',
		'deduzirValor'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$metodo = $_REQUEST['m'];
	if(in_array($metodo,$metodosPemitidos)){
		
		if($metodo == 'abrirComanda') {
			$c->$metodo($_REQUEST['txtNomeComanda']);
		}else if($metodo == 'mostraComandas') {
			
			$c->$metodo($_REQUEST['status']);
			
		}else if($metodo == 'addConsumo') {
			
			$c->$metodo($_REQUEST['comanda'], $_REQUEST['mesa'], $_REQUEST['txtProduto'], $_REQUEST['txtQtd']);
			
		}else if($metodo == 'deletConsumo') {
			
			$c->$metodo($_REQUEST['id'], $_REQUEST['comanda']);
			
		}else if($metodo == 'fecharComanda') {
			
			$c->$metodo($_REQUEST['id'],$_REQUEST['txtDescricao'],$_REQUEST['total']);
			
		}else if($metodo == 'fecharVariasComanda') {
			
			$c->$metodo($_REQUEST['comandas'], $_REQUEST['txtDescricao'],$_REQUEST['valores']);
			
		}else if($metodo == 'deduzirValor') {
			
			$c->$metodo();
			
		}else{
			$c->$metodo();
		}		
	}
}else{
	$c->menu();
	//$c->mostraComandas();
}
