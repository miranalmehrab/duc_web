<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description =  mysqli_real_escape_string($connection, $_POST['description']);
	$img_url = $_POST['img_url'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$query = "update exciting_place set name='$name',description='$description',image='$img_url',latitude='$latitude',longitude='$longitude' where id=$id";


	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.href = '../../server_front/exciting_place.php'</script>";

	}


?>
