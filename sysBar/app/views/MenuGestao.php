<?php

class MenuGestao{
	
	public function montaMenu(){
		echo '
			<div class="div-h2">
				<h2>Menu Gestão</h2>
			</div>	
			<div id="divMenuComanda">
				<div class="divIconeMenuComanda">
					<a href="?link=app/controllers/ControllerGestao&m=mostraFormulario">
						<img src="./imgs/crescimento.png">	
						<p>Vendas</p>
					</a>
				</div>
				<div class="divIconeMenuComanda">
					<a href="">
						<img src="./imgs/despesas2.png">	
						<p>Despesas</p>
					</a>
				</div>
			</div>	
				
		';
	}
}
/*


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
			</div>	*/