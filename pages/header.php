<!DOCTYPE html>
<html lang="pt_BR">
<head>	
	<link rel="stylesheet" href="<?= URL ?>disc/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= URL ?>disc/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="<?= URL ?>disc/css/lightbox.css"/>
	<link rel="icon" href="<?= URL ?>disc/img/ico.png"/>
	<link rel="stylesheet" href="<?= URL ?>disc/css/style.css"/>
	<link rel="stylesheet" href="<?= URL ?>disc/css/celular.css" media="screen and (max-width: 480px)"/>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?= $seo->keyWords() ?>"/>
	<meta name="description" content="<?= file_get_contents('db/meta_description.txt') ?>"/>
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="Public">
	<title>Blitz Bolsas | <?= $seo->keyWords() ?></title>	
</head>
<body>
	<div class="alerta">Adicionado com Sucesso</div>
	<div id="fb-root"></div>
	<div class="container-fluid redes">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="<?= URL ?>disc/img/mail.png">
					<a title="<?= $seo->keyWords() ?>" href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
				</div>
				<div class="col-md-3">
					<img src="<?= URL ?>disc/img/phone.png">
					<?= PHONE ?>
				</div>
				<div class="col-md-3">
					<?php include 'pages/redes.php'; ?>
				</div>
				<div class="col-md-3">
					<a href="<?= URL ?>orcamento" class="cart">
						<img src="<?= URL ?>disc/img/shopping-bag.png">
						( <span class="itens_add"><?= $cart->cartItens() ?></span> ) itens em orcamento
					</a>

				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="<?= URL ?>"><img class="logo" src="<?= URL ?>disc/img/logo.png"></a>
				</div>
				<div class="col-md-6 nav">
					<ul>
						<li><a title="<?= $seo->keyWords() ?>" href="<?= URL ?>">home</a></li>
						<li><a title="<?= $seo->keyWords() ?>" href="<?= URL ?>empresa">empresa</a></li>
						<li><a title="<?= $seo->keyWords() ?>" href="<?= URL ?>produto/HO/">produtos</a></li>
						<li><a title="<?= $seo->keyWords() ?>" href="<?= URL ?>blog">blog</a></li>
						<li><a title="<?= $seo->keyWords() ?>" href="<?= URL ?>contato">contato</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<form class="busca" action="<?= URL ?>busca" method="post" accept-charset="utf-8">
						<input type="text" name="s" placeholder="Buscar no site..." required/>
						<input type="submit" value=""/>
					</form>
				</div>
			</div>
		</div>
	</div>
