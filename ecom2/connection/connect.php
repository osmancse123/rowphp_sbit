<?php
	$conn=mysqli_connect("localhost","root","","ecom2");
	if($conn->connect_errno>0)
	{
		die("Database Not Connect".$conn->connect_error);
	}
	else
	{
		// echo "Database Connect";
	}
?>

