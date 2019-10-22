<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
//	$rank = $_POST['rank'];
	$name = mysqli_real_escape_string($connection,$_POST['name']);
	$img_url = $_POST['img_url'];
	$description = mysqli_real_escape_string($connection,$_POST['description']);

	$query = "update medical_center set description='$description',name='$name', image='$img_url' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/medical_center.php'</script>";

	}


?>
