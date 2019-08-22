<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$i_name = $_POST['institute_name'];
	$gov = $_POST['governance'];

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

	$statement = $connection->prepare("insert into du_affiliated_institutes  (id, name, institute_name, governance) values(?, ?, ?, ?)");
	$statement->bind_param("ssss", $id, $name, $i_name, $gov);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/du_affiliated_institutes.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
