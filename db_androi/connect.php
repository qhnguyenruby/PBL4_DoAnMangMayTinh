<?php
		$host ="localhost";
        $uname = "root";
        $pwd = "";
        $db_name = "photo_db";
        
        $bienketnoi = mysqli_connect($host,$uname,$pwd) or die("Could not connect to database." .mysqli_error());
        mysqli_select_db($bienketnoi,$db_name) or die("Could not select the databse." .mysqli_error());
?>