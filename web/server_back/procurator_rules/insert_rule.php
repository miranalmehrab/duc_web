<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$rule = $_POST['rule'];

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

	$statement = $connection->prepare("insert into procurator_rules  (id,rule) values(?, ?)");
	$statement->bind_param("ss", $id,$rule);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/procurator_rules.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
