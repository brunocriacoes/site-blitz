
	<?php
		@$prod = new products();
		@$prod->pasta = 'product/'.$url[1].'/';
		@$prod->url   = $url;
	?>
	<img class="top_header" src="<?= URL ?>disc/img/hader-produtos.png" width="100%"/>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php require 'pages/sidebar.php'; ?>
				</div>
				<div class="col-md-9">
					<div class="row">
						<?php
							if(empty($url[2])){
								foreach (@$prod->lista() as $key => $value) {
									if(strlen($value['id_prod']) < 5){
										echo tpl('tpl/product.tpl', $value);
									}
								}
							}else{
								$arquivo = 'product/'.$url[1].'/'.$url[2].'.jpg';
								if(file_exists($arquivo)){
									echo @tpl('tpl/product.detalhe.tpl', $prod->theProduct(@$arquivo));


									$outros = glob('product/'.$url[1].'/*'.$url[2].'*');
									unset($outros[count($outros)-1]);


									echo '<div class="col-md-6">';
									foreach ($outros as $key => $value) {
										echo '<img src="'.URL.$value.'" class="foto" width="25%">';
									}
									echo '</div>';

									@include 'pages/coments.php';
									@include 'pages/relacionados.php';
								}else{
									echo'codigo de produto invalido';
								}
							}
						?>

					</div>
				</div>
			</div>

		</div>
	</div>
