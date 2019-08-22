<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$table_name = $_POST['table_name'];
	$img_url = $_POST['img_url'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$query = "insert into exciting_place (id,name,description,image,latitude,longitude) values ('$id','$name','$description','$img_url','$latitude','$longitude')";


	if(!mysqli_query($connection, $query))
	{
	
		echo mysqli_error($connection);
	}
	else
	{
		echo "<script> location.href = '../../server_front/exciting_place.php'</script>";

	}


?>
