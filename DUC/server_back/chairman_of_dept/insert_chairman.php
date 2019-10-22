<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$dept_name = $_POST['dept_name'];
	$chairman_name = $_POST['chairman_name'];
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

	$statement = $connection->prepare("insert into chairman_of_dept (id,dept_name,chairman_name) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $dept_name, $chairman_name);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/head_of_dept.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
