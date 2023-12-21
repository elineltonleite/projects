<?php

class MenuComanda{
	
	public function montaMenu(){
		
		echo '
			<div id="menuComanda">
				<div class="div-h2">
					<a href="?link=app/views/formAbrirComanda"><h2>Abrir Comanda</h2></a>
					<a href=""><h2>Consultar Comandas</h2></a>
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas"><h2>Comandas em aberto</h2></a>
				</div>
			</div>	
		
		';
	}
}