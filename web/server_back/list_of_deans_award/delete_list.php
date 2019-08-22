<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	
	$query = "delete from list_of_deans_award  where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/list_of_deans_award.php'</script>";

	}


?>
