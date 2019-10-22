<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$marks = $_POST['marks'];
	$grade = $_POST['letter_grade'];
	$point = $_POST['grade_point'];

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

	$statement = $connection->prepare("insert into grading_system  (id, marks, grade, point) values(?, ?, ?, ?)");
	$statement->bind_param("ssss", $id, $marks, $grade, $point);
	$check = $statement->execute();
	if(true === $check)
	{
		echo "<script> location.href = '../../server_front/grading_system.php'</script>";
		
	}
	else{
		echo htmlspecialchars($statement->error);
	}
	$statement->close();

?>
