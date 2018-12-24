<?php header('Content-Type: text/html; charset=UTF-8', true);

	class seo{
		public $result;

		public function keyWords(){			
			$result = (array)ler('db/cat.json');
			shuffle($result);
			$result = array_chunk($result, 3);
			$result = implode(',', $result[0]);
			return $result;
		}
	}

?>