<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$hall_name = $_POST['hall_name'];
	$provost_name = $_POST['provost_name'];
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

	$statement = $connection->prepare("insert into provost_of_hall (id,hall_name,provost_name) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $hall_name, $provost_name);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/provost_of_hall.php'</script>";

	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
