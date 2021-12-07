<?php
include_once '../Model/M_Image.php';
class C_Login
{
	public function CheckLogin()
	{
		if (isset($_GET['slog'])) 
		{
			$modleImage =  new Model_Image();
			$ImageList = $modleImage->checkLogin($_GET['user'],$_GET['pass']);
			$_SESSION['userName'] = $_GET['user'];
			$_SESSION['passWord'] = $_GET['pass'];
			if($ImageList == false)
			{
				echo "<center>Username hoặc password không đúng!</center>";
				include_once '../View/Login.php';
			}
			else
			{
				header("Location:../Controller/C_Show.php");
			}
			
		}
		else
		{
			include_once '../View/Login.php';
		}	
	}
};	
$C_Student = new C_Login();
$C_Student->CheckLogin();	
?>