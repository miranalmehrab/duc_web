<?php include '../connection.php' ?>
<?php

	$id = $_POST['id'];
	$name = mysqli_real_escape_string($connection,$_POST['name']);
	$description = mysqli_real_escape_string($connection,$_POST['description']);
	$img_url = $_POST['img_url'];


	$query = "insert into medical_center (id,name,description,image) values ('$id','$name','$description','$img_url')";

	if(!mysqli_query($connection, $query))
	{
	
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/medical_center.php'</script>";

	}


?>
