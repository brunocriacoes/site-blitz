<?php 	
	function ler($arquivo){
		@$json = file_get_contents($arquivo);
		@$json = json_decode($json);
		return @$json;
	}
	function mudar($arquivo, $data){
		@$json = json_encode($data);
		file_put_contents($arquivo, $json);
	}
?>