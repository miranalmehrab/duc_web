<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$department = $_POST['department'];
	$result = $_POST['result'];
	$year = $_POST['year'];
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

	$statement = $connection->prepare("insert into list_of_deans_award (id,name,department,result,year) values(?, ?, ?, ?, ?)");
	$statement->bind_param("sssss", $id, $name, $department,$result,$year);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/list_of_deans_award.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
