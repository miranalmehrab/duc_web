<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$faculty_name = $_POST['faculty_name'];
	$dean_name = $_POST['dean_name'];
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

	$statement = $connection->prepare("insert into $table_name (id,faculty_name,dean_name) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $faculty_name, $dean_name);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/dean.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
