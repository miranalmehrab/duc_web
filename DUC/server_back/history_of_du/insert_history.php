<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$img_url = $_POST['img_url'];

	$query = "insert into history_of_du (id,description,image) values ('$id','$description','$img_url')";


	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);
	}
	else
	{
		echo "<script> location.href = '../../server_front/history_of_du.php'</script>";

	}


?>
