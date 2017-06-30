<?php 
	//création de la classe User
	class User {
		private $_id;
		private $_email;
		private $_createdAt;
	

		//constructor de User
		function __construct($id, $email) {
			$this->_id = $id;
			$this->_email = $email;
			$this->_createdAt = date(d."-".m."-".y);
		}
            
            //ACCESSEURS//
		//demander/donner id User
		public function get_id(){
			return $this->_id;
		}
		public function set_id($_id){
			$this->_id = $_id;
		}

		//demander/donner email User
		public function get_email(){
			return $this->_email;
		}
		public function set_email($_email){
			$this->_email = $_email;
		}

		//demander/donner date de création User
		public function get_createdAt(){
			return $this->_createdAt;
		}
		public function set_createdAt($_createdAt){
			$this->_createdAt = $_createdAt;
		}
		
	}	

 ?>