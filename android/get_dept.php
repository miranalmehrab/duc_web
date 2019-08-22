<?php
	$user = "root2";
	$password = "123password";
	$serverName = "localhost";
	$db = "DUC";

	$connection = mysqli_connect($serverName, $user, $password, $db);
	$query = "select * from science_department";
	if($result = mysqli_query($connection,$query))
	{
		while(	$row = mysqli_fetch_row($result))
		{
			echo $row[0];
			echo "paisi";
			echo $row[1];
			echo "paisi";
			echo $row[2];
			echo "paisi";
			echo $row[3];
		}
	}
	else
	{
		echo "Error in data retrieval!";
	}
	
?>
