	
	<div class="container-fluid news">
		<div class="container">
			<div class="col-md-4">
			<object id="news" data="<?= URL ?>svg/close-envelope.svg" ></object>
				<h5>NEWSLETTER</h5>
				<p>Increva-se para participar de promoções</p>
			</div>
			<div class="enviado">
				<div class="col-md-4">
					<input class="form-control" id="email" type="email" placeholder="digite aqui seu e-mail e participe...">				
				</div>
				<div class="col-md-2">
					<input type="submit" id="send" class="btn btn-info" value="participar">
				</div>
			</div>
			<div class="col-md-2">
				<?php include 'pages/redes_w.php'; ?>	
			</div>
		</div>
	</div>


	<?php
		$clientes = glob('clientes/*.jpg*');
		shuffle($clientes);
		$clientes = array_chunk($clientes, 12);
	?>

	<div class="container clientes">
		<div class="col-md-12">
			<center><h4>clientes</h4></center>
		</div>
		<div class="col-md-12">
		<?php foreach ($clientes[0] as $key => $value) { ?>
		<img src="<?= URL ?><?= $value ?>" width="8%" alt="">
		<?php } ?>
		</div>
	</div>

	<div class="container-fluid footer_top">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="fb-page" data-href="<?= FACEBOOK ?>" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
				</div>
				<div class="col-md-4 cat">
					<?php
						$ler = (array)ler('db/cat.json');
						shuffle($ler);
						$ler = array_chunk($ler, 16);
					?>
					<ul>
						<?php foreach ($ler[0] as $key => $value) { ?>
						<li><a href="<?= URL ?>produto/<?= $key ?>/"><?= $value ?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-4">
					<address>
						<object class="ico_footer" width="30" data="<?= URL ?>svg/close-envelope.svg" type="image/svg+xml"></object> <?= EMAIL ?> <br>
						<object class="ico_footer" width="30" data="<?= URL ?>svg/phone-call.svg" type="image/svg+xml"></object> <?= PHONE ?> <br>
						<object class="ico_footer" width="30" data="<?= URL ?>svg/location-pin.svg" type="image/svg+xml"></object> São Paulo - SP <br>
						<br><?php include 'pages/redes.php'; ?>	
					</address>
				</div>
				
			</div>
		</div>
	</div>

	<footer><?= COPY ?></footer>

	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<script src="js/appml.js"></script>
    <script src="<?= URL ?>js/jquery.min.js"></script>
	<script src="<?= URL ?>js/bootstrap.min.js"></script>
	<script src="<?= URL ?>js/jquery.cycle2.js"></script>
	<script src="<?= URL ?>js/lightbox.min.js"></script>
	<script src="<?= URL ?>js/functions.js"></script>
</body>
</html>