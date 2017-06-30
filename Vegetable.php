<?php 
	//création classe Vegetable
	class Vegetable extends Product {
		private $_productorName;
		private $_expiresAt;
		public function isFresh(){
		}

		//constructor
		function __construct($id, $name, $price,$productorName, $expiresAt){
			parent::__construct($id, $name, $price);
			$this->_productorName = $productorName;
			$this->_expiresAt = $expiresAt;
		}

		//ACCESSEURS//
		//productorName
		public function get_productorName(){
			return $this->_productorName;
		}
		public function set_productorName($_productorName){
			$this->_productorName = $_productorName;
		}

		//expiresAt
		public function get_expiresAt(){
			return $this->_expiresAt;
		}
		public function set_expiresAt($_expiresAt){
			$this->_expiresAt = $_expiresAt;
		}

	}

?>






