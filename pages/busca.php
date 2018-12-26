<?php
		@$prod = new products();
		@$prod->pasta = 'product/HO/';
		@$urlH = ["produto","HO"]; 
		@$prod->url    = $urlH;
		@$relacionados = $prod->lista();
		
	?>
	
	<img class="top_header" src="<?= URL ?>disc/img/hader-produtos.jpg" width="100%"> <br><br>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<?php
					@$_POST['s'] = explode(' ', $_POST['s']);
					foreach ($relacionados as $key => $value) {
						@$busca = implode(' ', @$value);
						foreach ($_POST['s'] as $k => $v) {

							if (strlen($v) > 2) {
								if(stripos($busca, $v)){
									@$conta += 1;
								}
							}
						}						
						if(@$conta){
							echo tpl('tpl/product.tpl', $value);
						}						
					}
				?>	
			</div>
		</div>
	</div>