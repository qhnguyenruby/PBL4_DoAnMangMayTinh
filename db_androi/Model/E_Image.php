<?php
class Entity_Image
{
	public $id;
	public $name;
	public $image;
	public $idaccount;

	public function __construct($_id,$_name,$_image,$_idaccount)
	{
		$this->id = $_id;
		$this->name = $_name;
		$this->image = $_image;
		$this->id_account = $_idaccount;
	}
}
?>