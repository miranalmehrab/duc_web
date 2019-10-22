<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$table_name = $_POST['table_name'];
	$img_url = $_POST['img_url'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

	$query = "update $table_name set name='$name',description='$description',image='$img_url',latitude='$latitude',longitude='$longitude' where id=$id";


	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script>location.replace(document.referrer); </script>";

	}


?>
