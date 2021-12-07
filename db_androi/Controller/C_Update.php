<?php
include_once '../Model/M_Image.php';
class C_Update
{
	public function Update()
	{
		if (isset($_REQUEST['ssua'])) 
		{
			$id = $_REQUEST['id'];
			$name = $_REQUEST['ta'];
			$oldimage = $_REQUEST['oldimage'];
			$newimage = $_FILES['newimage']['name'];

			if(isset($newimage)&&($newimage!=""))
			{
				$images="../images/".$newimage;
				unlink("../images/".$oldimage);
				move_uploaded_file($_FILES['newimage']['tmp_name'], $images);
			}
			else
			{
				$newimage=$oldimage;
			}
			$modelImage =  new Model_Image();
			$modelImage->Update($id, $name, $newimage);
			header("Location:../Controller/C_Show.php");
		}
		else
		{
			$modelImage =  new Model_Image();
			$Image = $modelImage->GetImageDetail($_REQUEST['id']);
			include_once '../View/WebUpdate.php';
		}	
	}
};	
$C_Student = new C_Update();
$C_Student->Update();	
?>