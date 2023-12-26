<?php

class MenuComanda{
	
	public function montaMenu(){
		
		echo '
			<div id="menuComanda">
				<div class="div-h2">
					<a href="?link=app/"><h2>Abrir Comanda</h2></a>
					<a href="?link=><h2>A Receber</h2></a>
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente"><h2>Comandas em aberto</h2></a>
				</div>
			</div>	
		
		';
	}
}