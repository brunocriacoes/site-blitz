	<?php
		$prod = new products();
		$prod->pasta  = 'product/'.$url[1].'/';
		$prod->url    = $url;
		$relacionados = $prod->lista();
		shuffle($relacionados);
		$lista        = array_chunk($relacionados, 3);
	?>


	<div class="row">
		<?php							
			foreach ($lista[0] as $key => $value) {
				echo tpl('tpl/product.tpl', $value);
			}							
		?>	
	</div>

