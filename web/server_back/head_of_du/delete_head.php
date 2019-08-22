<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];

	$query = "delete from head_of_du where id=$id";
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/head_of_du.php'</script>";

	}


?>
