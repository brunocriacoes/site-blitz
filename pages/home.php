	
	<?php
		@$prod = new products();
		@$prod->pasta = 'product/HO/';
		@$urlH = ["produto","HO"]; 
		@$prod->url    = $urlH;
		@$relacionados = $prod->lista();
		@shuffle($relacionados);
		@$lista        = array_chunk($relacionados, 21);
	?>
	
	<?php include 'pages/slider.php'; ?>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<?php
					foreach (@$lista[0] as $key => $value) {
						if(strlen($value['id_prod']) < 5){
							echo @tpl('tpl/product.tpl', $value);
						}
					}
				?>	
			</div>
		</div>
	</div>
	

