<?php include '../connection_phone_book.php'; ?>
<?php
	$id = $_POST['id'];
	$table_name = $_POST['table_name'];
	$query = "delete from $table_name  where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href='../../server_front/institutes_phone_book.php' </script>";

	}


?>
