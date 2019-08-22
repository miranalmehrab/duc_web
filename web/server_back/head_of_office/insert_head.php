<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$office_name = $_POST['office_name'];
	$head_name = $_POST['head_name'];
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

	$statement = $connection->prepare("insert into head_of_office (id,office_name,head_name) values(?, ?, ?)");
	$statement->bind_param("sss", $id, $office_name, $head_name);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/head_of_office.php'</script>";

	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
