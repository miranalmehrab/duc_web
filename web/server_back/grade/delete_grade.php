<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];

	$query = "delete from grading_system where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/grading_system.php'</script>";

	}


?>
