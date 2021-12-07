<?php
include_once '../Model/M_Image.php';
class C_Show
{
	public function Show()
	{
		
		$modelImage =  new Model_Image();
		$ImageList = $modelImage->GetAllImage();
		include_once '../View/WebShow.php';
		
		
				
	}
};	
$C_Student = new C_Show();
$C_Student->Show();	
?>