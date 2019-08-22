<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$date = $_POST['date'];

	$query = "update calendar set eventname='$name',description='$description',date='$date' where eventid='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
                echo "<script> location.href = '../../server_front/calendar.php'</script>";
	}


?>
