<?php
class Entity_Account
{
	public $id;
	public $name;
	public $username;
	public $password;

	public function __construct($_id,$_name,$_username,$_password)
	{
		$this->id = $_id;
		$this->name = $_name;
		$this->username = $_username;
		$this->password = $_password;
	}
}
?>