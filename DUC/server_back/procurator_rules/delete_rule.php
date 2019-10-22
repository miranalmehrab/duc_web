<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];

	$query = "delete from procurator_rules  where id=$id";
	
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/procurator_rules.php'</script>";

	}


?>
