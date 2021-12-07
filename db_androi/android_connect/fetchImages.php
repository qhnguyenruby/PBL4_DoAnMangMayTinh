<?php
	include_once("Connect.php");
    Connect("photo_db");
    
    $id_acc = getIdByUsername($_POST['username']);
    
    if($_SERVER['REQUEST_METHOD'] =='POST') {
    	
		$result = array();
		$result['data'] = array();
		$select= "SELECT * from image where id_account = '$id_acc'";
		
		$responce = ExecuteQuery($select);
	            
		while($row = mysqli_fetch_array($responce)) {
		
			$index['id']      = $row['0'];
			$index['image']   = $row['2'];
					
			array_push($result['data'], $index);			
		}
		$result["success"]="1";
		echo json_encode($result);
		mysqli_close($connect);
    }	

    function getIdByUsername($username)
    {
        $rs=ExecuteQuery("select * from account where username = '$username'");
        $row=mysqli_fetch_array($rs);
        $id = $row['id'];
        return $id;
    }
?>