<?php

class MenuComanda{
	
	public function montaMenu(){
		echo '
		<div class="div-h2">
			<h2>Menu Comandas</h2>
		</div>	
			<div id="divMenuComanda">
				<div class="divIconeMenuComanda">
					<a href="?link=app/views/formAbrirComanda">
						<img src="./imgs/notepad.png">	
						<p>Abrir Comanda</p>
					</a>
				</div>
				<div class="divIconeMenuComanda">
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=A receber">
						<img src="./imgs/receber.png">	
						
						<p>A Receber</p>
					</a>
				</div>
				<div class="divIconeMenuComanda">
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente">
						<img src="./imgs/open.png">	
						<p>Comandas em aberto</p>
					</a>
				</div>
			</div>	';
		
		/*echo '
			<div id="menuComanda">
				<div class="div-h2">
					<a href="?link=app/views/formAbrirComanda"><h2>Abrir Comanda</h2></a>
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=A receber"><h2>A Receber</h2></a>
					<a href="?link=app/controllers/ControllerComandas&m=mostraComandas&status=pendente"><h2>Comandas em aberto</h2></a>
				</div>
			</div>	
		
		';*/
	}
}