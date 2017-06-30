<?php 
	//création classe Cloth
	class Cloth extends Product {
		private $_brand;
		public function try(){
		}

		//constructor
		function __construct($id, $name, $price,$brand){
			parent::__construct($id, $name, $price);
			$this->_brand = $brand;
		}

		//ACCESSEURS//
		//brand
		public function get_brand(){
			return $this->_brand;
		}
		public function set_brand($_brand){
			$this->_brand = $_brand;
		}
	}

 ?>






			