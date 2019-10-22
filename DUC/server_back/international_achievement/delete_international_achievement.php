<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	
	$query = "delete from international_achievement where id=$id";
	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/international_achievement.php'</script>";

	}


?>
