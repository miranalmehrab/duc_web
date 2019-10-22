<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$grade = $_POST['grade'];

	$query = "insert into du_scholarship (id,grade,description) values ('$id','$grade','$description')";


	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);
	}
	else
	{
		echo "<script> location.href = '../../server_front/du_scholarship.php'</script>";

	}


?>
