<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$img_url = $_POST['img_url'];

	$query = "insert into international_achievement  (id,name,description,image) values ('$id','$name','$description','$img_url')";


	if(!mysqli_query($connection, $query))
	{
		echo $name;	
		echo mysqli_error($connection);
	}
	else
	{
		echo "<script> location.href = '../../server_front/international_achievement.php'</script>";

	}


?>
