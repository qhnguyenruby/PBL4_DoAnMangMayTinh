<?php
include_once '../Model/M_Image.php';
class C_Detail
{
	public function Detail()
	{
		if (isset($_GET['id'])) 
		{
			$modelImage =  new Model_Image();
			$Image = $modelImage->GetImageDetail($_GET['id']);
			include_once '../View/WebDetail.php';
		}	
	}
};	
$C_Student = new C_Detail();
$C_Student->Detail();	
?>