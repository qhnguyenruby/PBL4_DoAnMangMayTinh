<?php
include_once '../connect.php';
include_once 'E_Account.php';
include_once 'E_Image.php';
session_start();
class Model_Image
{	
	
	public function __construct() {}

	public function CheckLogin($user,$pass)
	{
		global $bienketnoi;
		$sql = "SELECT * FROM account WHERE username = '$user' and password = '$pass'";
		$result = mysqli_query($bienketnoi,$sql);
		if(mysqli_num_rows($result)==0)
		{
			return false;
		}
		else
		{
			return true;
		}
		
	    
	}

	public function GetAllImage()
	{
		
		global $bienketnoi;
		$user = $_SESSION['userName'];
		$pass = $_SESSION['passWord'];
		$sql = "SELECT * FROM account WHERE username = '$user' and password = '$pass'";
		$result = mysqli_query($bienketnoi,$sql);
		$i = 1;
		$row = mysqli_fetch_array($result);
		
		$id = $row['id'];
		$image_query = mysqli_query($bienketnoi,"SELECT *,concat('http://192.168.1.91:81/db_androi/images/',image) AS image from image WHERE id_account = '$id'");
		if(mysqli_num_rows($image_query)==0)
		{
			return null;
		}
		else
		{
			while($row2 = mysqli_fetch_array($image_query))
			{
				$MangChuaTT[$i] = new Entity_Image($row2['id'],$row2['name'],$row2['image'],$row2['id_account']);
	    		$i++;
			}
		
			return $MangChuaTT;
		}
		
	}

	public function GetImageDetail($id)
	{
		global $bienketnoi;
		 $image_query = mysqli_query($bienketnoi,"SELECT *,concat('http://192.168.1.91:81/db_androi/images/',image) AS mystring from image WHERE id ='$id'");
		while ($row = mysqli_fetch_array($image_query))
	    { 
	    	$ThongTin = new Entity_Image($row['id'],$row['name'],$row['image'],$row['id_account']);
	    }
	    return $ThongTin;
	}

	public function Search($stringSearch)
	{
		
		global $bienketnoi;
		$user = $_SESSION['userName'];
		$pass = $_SESSION['passWord'];
		$sql = "SELECT * FROM account WHERE username = '$user' AND password = '$pass'";
		$result = mysqli_query($bienketnoi,$sql);
		$i = 1;
		$row = mysqli_fetch_array($result);
		
		$id = $row['id'];
		$image_query = mysqli_query($bienketnoi,"SELECT *,concat('http://192.168.1.91:81/db_androi/images/',image) AS image from image WHERE id_account = '$id' 
				AND name LIKE '%$stringSearch%'");
		if(mysqli_num_rows($image_query)==0)
		{
			return null;
		}
		else
		{
			while($row2 = mysqli_fetch_array($image_query))
			{
				$MangChuaTT[$i] = new Entity_Image($row2['id'],$row2['name'],$row2['image'],
						$row2['id_account']);
		    	$i++;
			}
		
			return $MangChuaTT;
		}
	}

	public function Update($id,$name,$image)
	{
		global $bienketnoi;
		mysqli_query($bienketnoi,"UPDATE image SET name = '$name',image = '$image' 
		WHERE id = '$id'" );
	}

	public function Delete($idxoa)
	{	
		global $bienketnoi;
		$sql = "DELETE FROM image WHERE id = '$idxoa'";
		mysqli_query($bienketnoi,$sql);
	}

	public function Insert($tenanh,$duongdan)
	{
		global $bienketnoi;
		$user = $_SESSION['userName'];
		$pass = $_SESSION['passWord'];
		$sql = "SELECT * FROM account WHERE username = '$user' AND password = '$pass'";
		$result = mysqli_query($bienketnoi,$sql);
		$row = mysqli_fetch_array($result)	;
		$idac = $row['id'];
		mysqli_query($bienketnoi,"INSERT INTO image VALUES (NULL,'$tenanh',
				'$duongdan',$idac)");
	}
}
?>