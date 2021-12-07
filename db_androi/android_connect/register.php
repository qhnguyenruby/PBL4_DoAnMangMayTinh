<?php 
	include_once("Connect.php");
    Connect("photo_db");
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "insert into account(id, name, username, password) values(NULL, '$name', '$username', '$password')";
	$result = ExecuteQuery($sql);

	if($result){
		echo "registered successfully";
	}
	else {
		echo "some error occured";
	}
 ?>