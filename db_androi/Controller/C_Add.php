<?php
include_once '../Model/M_Image.php';
class C_Add
{
	public function Add()
	{
		if (isset($_POST['sthem'])) 
		{
			$name = $_POST['ta'];
			$image=$_FILES['duongdan']['name'];
			$upload="../images/".$image;
			move_uploaded_file($_FILES['duongdan']['tmp_name'], $upload);
			$modelImage =  new Model_Image();
			$modelImage->Insert($name,$image);
			header("Location:../Controller/C_Show.php");
		}
		else
		{
			include_once '../View/WebInsert.php';
		}	
	}
};	
$C_Student = new C_Add();
$C_Student->Add();	
?>