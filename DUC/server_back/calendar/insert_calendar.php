<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$end_date = $_POST['end_date'];

	if(is_null($end_date))
	{
		$query = "insert into calendar (eventid,eventname,description,date) values('$id','$name','$description','$date')";
	
		if(!mysqli_query($connection, $query))
		{
		
			echo $connection->error;
		}
		else
		{
			 echo "<script> location.href = '../../server_front/calendar.php'</script>";
		}
	}
	else
	{
		$startTime = strtotime($date);
		$endTime = strtotime($end_date);

		for($time = $startTime; $time <= $endTime; $time = strtotime('1 day', $time))
		{

			$thisDate = date('d-m-y', $time);
			$query = "insert into calendar (eventname,description,date) values('$name','$description','$thisDate')";
			if(!mysqli_query($connection, $query))
			{
				echo $connection->error;
			}
				

   			
		}
		echo "<script> location.href = '../../server_front/calendar.php'</script>";

	
	
	}

?>
