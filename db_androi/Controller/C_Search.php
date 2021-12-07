<?php
include_once '../Model/M_Image.php';
class C_Search
{
	public function Search()
	{
		if (isset($_GET['stim'])) 
		{
			$modelImage =  new Model_Image();
			$ImageList = $modelImage->Search($_GET['stringtim']);
			include_once '../View/WebShow.php';
		}			
	}
};	
$C_Student = new C_Search();
$C_Student->Search();	
?>