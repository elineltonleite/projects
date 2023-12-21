<?php

class ControllerProdutos{
	
	public function msg($mensagem, $bg){
		echo '<div class="divMsg '.$bg.'">'.$mensagem.'</div>';
	}
	
	public function formCadastrar(){
		include_once'./app/views/formCadProduto.php';
	}
	
	public function formEditar(){
		include_once'./app/views/formEditProduto.php';
	}
	
	public function editarProduto($id, $desc, $preco){
		$produto = new Produto();
		
		$msg = $produto->editar($id,$desc, $preco);
		
		if($msg == 'ok'){
			$this->msg('Sucesso!! Produto atualizado !!','color-blue');
		}else{
			$this->msg('Erro!! Não foi possível atualizar o produto, refaça a operação','color-red');
		}
		
		$this->formCadastrar();
		$this->produtosCadastrados();
	}
	
	public function produtosCadastrados(){
			$produto = new Produto();
			$produto->listarProdutosCadastrados();
	}
	public function cadastrarProduto($desc, $preco){
		
			$produto = new Produto();
			$msg = $produto->cadastrar($desc, $preco);
			
			if($msg == 'ok'){
				$this->msg('Sucesso!! Produto cadastrado !!','color-blue');
			}else{
				$this->msg('Erro!! Não foi possível cadastrar o produto, refaça a operação','color-red');
			}
		$this->formCadastrar();
		$this->produtosCadastrados();	
	}
	
}




$p = New ControllerProdutos();
//$p->msg();


$metodosPemitidos = [
		'cadastrarProduto',
		'editarProduto',
		'formEditar'
];

// chama o methodo dinamicamente
if(isset($_REQUEST['m'])){
	$m = $_REQUEST['m'];
	if(in_array($m,$metodosPemitidos)){
		if($m == 'cadastrarProduto') {
			$p->$m($_REQUEST['txtDescricao'], $_REQUEST['txtPreco']);
		}elseif($m == 'editarProduto'){
			$p->$m($_REQUEST['id'],$_REQUEST['txtDescricao'], $_REQUEST['txtPreco']);
		}else{
			$p->$m();
		}
		
	}
}else{
	$p->formCadastrar();
	$p->produtosCadastrados();
}
