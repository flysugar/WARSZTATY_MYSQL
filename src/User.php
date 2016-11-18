<?php
class User {

	private $id;
	private $username;
	private $hashedPassword;
	private $email;

	public function __construct() {
		$this->id = -1;
		$this->username = "";
		$this->hashedPassword = "";
		$this->email = "";
	}

	public function getId() {
		return $this->id;
	}

	public function getUsername()
	{
	    return $this->username;
	}
	 
	public function setUsername($username)
	{
	    $this->username = $username;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	 
	public function setEmail($email)
	{
	    $this->email = $email;
	}

	public function getPassword() {
		return $this->hashedPassword;
	}

	public function setPassword($password) {
		$this->hashedPassword = password_hash($password, PASSWORD_BCRYPT);
	}

	static public function load($db, $id) {

	}
}
/*
$db = new mysqli(//...);
// sz$u10 = User::load($db, 10);

$u = new User();
// setery
$u->saveToDB($db);
*/
?>