<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$description = $_POST['description'];
	$img_url = $_POST['img_url'];
	
	$query = "update history_of_du set description='$description',image='$img_url' where id=$id";


	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/history_of_du.php'</script>";

	}


?>
