<?php
Class User {
	private $_db;
	
	public function __construct($user = null) {
		$this->_db = DB::getInstance();
	}

	public function create($fields = array()) {
		if(!$this->_db->insert('users', $fields)) {
			throw new Exception('Have got a problem?sdjjsdfjgjdsifg



			You fuckhead'); 
		}
	}
}