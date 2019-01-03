<?php 
	session_start();

	if( ! empty( $_REQUEST['add'] ) ) {
		$pasta      = substr( $_REQUEST['add'], 0, 2 );
		$file       = $_REQUEST['add'];
		$json_file  = __DIR__ . "/../product/{$pasta}/{$file}.json";
		$json       = json_decode( file_get_contents( $json_file ) );
		var_dump( $json );
		var_dump( $json_file );
		$_SESSION['orcamento']['entry'][$json->referencia] = [
			"id"                => $json->referencia,
			"quantidade minima" => $json->{"quantidade minima"},
			"Descrição"         => $json->nome,
			"foto"              => "/product/{$pasta}/{$file}.jpg",
		];
	}

	if( ! empty( $_REQUEST['dell'] ) ) {
		unset( $_SESSION['orcamento']['entry'][$_REQUEST['dell']] );
		 
	}
