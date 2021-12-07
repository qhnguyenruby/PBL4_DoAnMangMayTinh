<?php 
	include_once("Connect.php");
    Connect("photo_db");
	//$con=mysqli_connect("localhost","root","","photo_db");
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from account where username = '$username' and password = '$password'";
	//$result = mysqli_query($con,$sql);
	$result = ExecuteQuery($sql);

	if(mysqli_num_rows($result)>0){
		echo "Logged in successfully";
	}
	else {
		echo "User not found";
	}
 ?>