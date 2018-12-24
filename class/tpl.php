<?php 
	function tpl($tpl, $data){
		@$data = (array)$data;
		@$html = file_get_contents($tpl);
		@$html = str_replace(array_keys($data), array_values($data), $html);
		return @$html;
	}
?>