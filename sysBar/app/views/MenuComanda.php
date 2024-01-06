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
		
	}
}