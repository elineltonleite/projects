<?php

class MenuComanda{
	
	public function montaMenu(){
		
		echo '
			<div id="menuComanda">
				<a href="?link=app/views/formAbrirComanda">Abrir Comanda</a>
				<a href="">Consultar Comandas</a>
			</div>
			<header>
				<h2>Comandas em aberto</h2>
			</header>
		';
	}
}