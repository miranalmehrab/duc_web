<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$description = $_POST['description'];
	$grade = $_POST['grade'];
	
	$query = "update du_scholarship set description='$description',grade='$grade' where id=$id";


	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/du_scholarship.php'</script>";

	}


?>
