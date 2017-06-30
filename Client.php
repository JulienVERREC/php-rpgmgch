<?php 

	$Client = require('User.php');

	class Client extends User {
		private $_billAmount;
		private $_cart = [];
		public function buy(){
		}
		public function addProductToCart($product){
		}
		public function get_billAmount(){
			return $this->_billAmount;
		}
		public function set_billAmount($_billAmount){
			$this->_billAmount = $_billAmount;
		}
		public function get_cart(){
			return $this->_cart;
		}
		public function set_cart($_cart){
			arrray_push($this->_cart, $_cart); 
		}
	}
			
 ?>
			
