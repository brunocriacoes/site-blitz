<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8', true);

	require 'class/crud.php';
	require 'class/tpl.php';
	require 'class/products.class.php';
	require 'class/seo.class.php';
	require 'class/cart.class.php';



	// define('URL', 'http://localhost:8080/cliente/blitzbolsas/');
	define('URL', '/');
	define('PHONE', '+55 (11) 3481-0400');
	define('EMAIL', 'contato@blitzbolsas.com.br');
	define('FACEBOOK', 'https://www.facebook.com/BlitzBolsaseBrindes/');
	define('TWITTER', 'https://www.instagram.com/Blitzbolsas/');
	define('INSTAGRAM', 'https://www.instagram.com/Blitzbolsas/');
	define('YOUTUBE', '#');
	define('COPY', '&copy; 2016 Todos os Direitos Reservados <a target="_blank" href="http://www.solucaosites.com.br"> Desenvolvido por Solução Sites </a>');
	define('RSS', URL.'rss/');

	$seo = new seo();
	$cart = new cart();
	$cart->url = URL;

	function enviaMail($paraMail, $paraName = null, $assunto, $men, $remetenteNome, $remetenteMail){
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'To: '.$paraName.' <'.$paraMail.'>' . "\r\n";
		$headers .= 'From: '.$remetenteNome.' <'.$remetenteMail.'>' . "\r\n";
		mail($paraMail, $assunto, $men, $headers);
	}

?>
