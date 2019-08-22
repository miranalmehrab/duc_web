<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$dept_name = $_POST['dept_name'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$academic_year = $_POST['academic_year'];

	$query = "update specific_calendar set dept_name = '$dept_name',eventname='$name',description='$description',date='$date', academic_year = '$academic_year' where eventid='$id'";

	if(!mysqli_query($connection, $query))
	{
	
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/specific_calendar.php'</script>";

	}


?>
