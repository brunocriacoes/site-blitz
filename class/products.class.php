<?php header('Content-Type: text/html; charset=UTF-8', true);
	class products
	{
		public $pasta, $url;

		public function products(){
			if(empty($this->pasta)){
				return 'informe uma pasta valida';
			}else{
				$lista = glob($this->pasta.'*.jpg*');
				return $lista;
			}
		}

		public function lista(){
			@$lista = $this->products();
			@$resultado = array();
			foreach ($lista as $key => $value) {
				$resultado[$key]['foto']      = URL.$value;
				$resultado[$key]['id_prod']   = str_replace([$this->pasta, ".jpg"], '', $value);
				$resultado[$key]['prod_link']   = URL.$this->url[0].'/'.$this->url[1].'/'.$resultado[$key]['id_prod'];
				$resultado[$key]['marca-default']   = URL . "disc/img/marca.png";
				if(file_exists($this->pasta.$resultado[$key]['id_prod'].'.json')){
					foreach (ler($this->pasta.$resultado[$key]['id_prod'].'.json') as $k => $v) {
						$resultado[$key][$k] = $v;
					}
				}else{
					foreach (ler('product/default.json') as $k => $v) {
						$resultado[$key][$k] = $v;
					}
				}
			}
			return $resultado;
		}

		public function theProduct($url){
			$resultado = array();
			$resultado['foto']    = URL.$url;
			$resultado['foto_id'] = $this->url[2];
			
			$existeDescricao = file_exists('product/'.$this->url[1].'/'.$this->url[2].'.json');
			if($existeDescricao){
				foreach (ler('product/'.$this->url[1].'/'.$this->url[2].'.json') as $k => $v) {
					$resultado[$k] = $v;
				}
			}else{
				foreach (ler('product/default.json') as $k => $v) {
					$resultado[$k] = $v;
				}
			}
			$resultado['marca-default']   = URL . "disc/img/marca.png";
			return $resultado;
		}

	}	
?>