<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];

	$query = "delete from du_affiliated_institutes where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/du_affiliated_institutes.php'</script>";

	}


?>
