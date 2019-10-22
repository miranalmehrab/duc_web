<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];

	$query = "delete from medical_center where id=$id";
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/medical_center.php'</script>";

	}


?>
