<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	$table_name = $_POST['table_name'];

	$query = "delete from hall where id=$id";
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/halls.php'</script>";

	}


?>
