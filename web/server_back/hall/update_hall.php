<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	//$img_url = $_POST['img_url'];

	$query = "update hall set name='$name',description='$description',longitude='$longitude',latitude='$latitude' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
	
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/halls.php'</script>";

	}


?>
