<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	
	$query = "delete from du_library where id=$id";
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/history_of_du.php'</script>";

	}


?>
