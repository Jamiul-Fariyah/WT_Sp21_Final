<?php
    $server="localhost";
	$user="root";
	$password="";
	$db="WT_Sp21_f";
	$conn = mysqli_connect($server,$user,$password,$db);
	if($conn){
		echo "Connected";
	}
	else{
		echo mysqli_connect_error();
	}
	$query="insert into users values (NULL,'rohan','678','admin')";
	if(mysqli_query($conn,$query)){
		echo "Value inserted";
	}
	else{
		echo "Problem";
	}
	
?>	
	