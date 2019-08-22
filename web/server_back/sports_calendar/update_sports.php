<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];

	$query = "update sports_calendar set eventname='$name',date='$date' where eventid='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/sports_calendar.php'</script>";

	}


?>
