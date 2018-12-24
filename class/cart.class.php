<?php
	class cart{
		public $url;

		public function __construct(){
			if(empty($_SESSION['orcamento'])){
				@$_SESSION['orcamento']['itens'] = 0; 
			}

			if(isset($_GET['save'])){
				@$parametro = explode('@', $_GET['local']);
				@$_SESSION['orcamento'][$parametro[0]][$parametro[1]] = $_GET['valor'];

			}			
			if(isset($_GET['updata'])){
				@$parametro = explode('@', $_GET['updata']);
				@$_SESSION['orcamento']['entry'][$parametro[0]][$parametro[1]] = $_GET['valor'];

			}

			if(!empty($_GET['add'])){
				@$_SESSION['orcamento']['entry'][$_GET['add']]['foto'] = $this->url.'product/'.substr($_GET['add'], 0, 2).'/'.$_GET['add'].'.jpg';
				if(file_exists('product/'.substr($_GET['add'], 0, 2).'/'.$_GET['add'].'.json')){
					$info = json_decode(file_get_contents('product/'.substr($_GET['add'], 0, 2).'/'.$_GET['add'].'.json'));
					foreach ($info as $key => $value) {
						@$_SESSION['orcamento']['entry'][$_GET['add']][$key] = $value;
					}
				}else{
					$info = json_decode(file_get_contents('product/default.json'));
					foreach ($info as $key => $value) {
						@$_SESSION['orcamento']['entry'][$_GET['add']][$key] = $value;
					}
				}
			}

			if(!empty($_GET['dell'])){
				unset($_SESSION['orcamento']['entry'][$_GET['dell']]);
			}
		}

		public function cartList(){}
		public function cartAdd(){}
		public function cartDel(){}
		public function cartUpData(){}
		public function cartSave(){}

		public function cartItens(){
			return (!empty($_SESSION['orcamento']['entry'])) ? count($_SESSION['orcamento']['entry']) : '0'; 
		}

	}

?>