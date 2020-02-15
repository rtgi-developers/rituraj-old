<?php  
class Encryption{
	/**
	 * To hash OMS users password
	 * @param  [string] $password [user password]
	 * @return [type]           [description]
	 */
	public function hashPassword($password){
		$salt1 = "qm&h*";
		$salt2 = "pg!@";
		return hash('ripemd128', "$salt1$password$salt2");
	}

	
}

?>