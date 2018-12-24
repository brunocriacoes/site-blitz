<?php 
	if(!empty(@$_GET['email'])){
		@$valida = strripos($_GET['email'], '@');
		$_GET['email'] = strip_tags(trim($_GET['email']));
		if($valida){
			file_put_contents('lista.json', $_GET['email']."\r\n", FILE_APPEND);

		}
	}
?>