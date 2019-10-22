<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	

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

	$statement = $connection->prepare("insert into deans_award (id,name,description) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $name, $description);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/deans_award.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
