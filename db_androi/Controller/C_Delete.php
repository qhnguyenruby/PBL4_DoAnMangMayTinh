<?php
include_once '../Model/M_Image.php';
class C_Delete
{
	public function Delete()
	{
		if (isset($_GET['id']))
		{
			$modelImage = new Model_Image();
			$modelImage->Delete($_GET['id']);
			
			header("Location:../Controller/C_Show.php");
		}
	}
};	
$C_Student = new C_Delete();
$C_Student->Delete();	
?>