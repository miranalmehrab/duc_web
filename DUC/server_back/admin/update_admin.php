<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$query = "update admin set userName='$name',password='$hashed_password' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href= '../../server_front/admins.php'; </script>";
	}


?>
