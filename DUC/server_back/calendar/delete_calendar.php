<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	$end_id = $_POST['end_id'];
	$table_name = $_POST['table_name'];
	
	if(is_null($end_id))
	{	
		$query = "delete from calendar where eventid='$id'";
		
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
		$query = "delete from calendar where eventid between '$id' and '$end_id'";
	
		if(!mysqli_query($connection, $query))
                {
                    
                        echo $connection->error;
                }
                else
                {
                     	echo "<script> location.href = '../../server_front/calendar.php'</script>";
                }

	}


?>
