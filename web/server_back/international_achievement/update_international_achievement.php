<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$img_url = $_POST['img_url'];
	
	$query = "update international_achievement set name='$name',description='$description',image='$img_url' where id=$id";


	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/international_achievement.php'</script>";

	}


?>
