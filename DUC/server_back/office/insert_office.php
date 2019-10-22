<?php include '../connection.php' ?>
<?php

	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$img_url = $_POST['img_url'];


	$query = "insert into office (id,name,description,image,longitude,latitude) values ('$id','$name','$description','$img_url','$longitude','$latitude')";

	if(!mysqli_query($connection, $query))
	{
	
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/offices.php'</script>";

	}


?>
