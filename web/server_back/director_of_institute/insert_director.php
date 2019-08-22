<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$institute_name = $_POST['institute_name'];
	$director_name = $_POST['director_name'];
	$table_name = $_POST['table_name'];

	//$query = "insert into $table_name (id,faculty_name,dean_name) values('$id','$faculty_name','$dean_name')";
	/*
	if(!mysqli_query($connection, $query))
	{
		echo "Data not inserted!";
		echo mysqli_error($connection);

	}
	else
	{
		echo "Data inserted  succcessfully!";
	}*/

	$statement = $connection->prepare("insert into director_of_institute (id,institute_name,director_name) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $institute_name, $director_name);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/director_of_institute.php'</script>";

	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
