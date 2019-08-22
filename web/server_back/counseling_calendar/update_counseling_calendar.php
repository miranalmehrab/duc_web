<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$activity = $_POST['activity'];
	$date = $_POST['date'];
	$club_name = $_POST['club_name'];
	$query = "update sports_calendar set $club_name = club_name,activity='$activity',date='$date' where eventid='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/club_calendar.php'</script>";

	}


?>
