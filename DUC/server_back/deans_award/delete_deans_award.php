<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];


	$query = "delete from deans_award where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/deans_award.php'</script>";

	}


?>
