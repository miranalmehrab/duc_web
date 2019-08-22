<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$password = $_POST['password'];


	$query = "update admin set userName='$name',password='$password' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href= '../../server_front/admins.php'; </script>";
	}


?>
