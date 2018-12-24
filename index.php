<?php 
	require 'functions.php'; 
	require 'pages/header.php';

	@$url = $_GET['url'];
	@$url = strip_tags(trim($url));
	@$url = str_replace(["'"], '', $url);
	@$url = explode('/', $url);

	if($url[0] == ''){
		require 'pages/home.php';
	}else{
		@$valida = file_exists('pages/'.$url[0].'.php');
		if ($valida) {
			require 'pages/'.$url[0].'.php';
		}else{
			require 'pages/404.php';
		}
	}

	require 'pages/footer.php'; 
?>