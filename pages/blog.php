<?php 
	$rss = 'http://rss.tecmundo.com.br/feed';
	$rss = simplexml_load_file($rss);
?>

<img class="top_header" src="<?= URL ?>disc/img/hader-produtos.jpg" width="100%"> <br><br>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<?php foreach ($rss->channel->item as $value) { ?>
			<div class="row">
				<div class="col-md-6">
					<img src="<?= @$value->enclosure['url'] ?>" width="100%">
				</div>
				<div class="col-md-6">
					<h3><?= @$value->title ?></h3>
					<?= @substr(strip_tags(trim($value->description )), 0, 250)?> <br><br>
					<a target="_blank" href="<?= @$value->link ?>" class="btn btn-info"> ORIGEM DA NOTÍCIA</a>	<br>
				</div>
			</div>
			<hr>
			<?php } ?>
		</div>
		<div class="col-md-3">
			<img class="top_header" src="<?= URL ?>disc/img/500x1000.jpg" width="100%">
			<br><br>
			<img class="top_header" src="<?= URL ?>disc/img/500x500.jpg" width="100%">			
		</div>
	</div>
</div>