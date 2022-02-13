<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "project1_nadzir1", "UdU}O+t!F&r=", "project1_ecommerceapp");
		return $this->con;
	}
}

?>