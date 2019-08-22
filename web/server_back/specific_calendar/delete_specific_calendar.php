<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	$end_id = $_POST['end_id'];
	$table_name = $_POST['table_name'];
	
	echo $end_id;
	
	if($end_id == NULL)
        {
                $query = "delete from specific_calendar where eventid='$id'";
		echo "null";
                if(!mysqli_query($connection, $query))
                {
                        
                        echo $connection->error;
                }
                else
                {
   //                     echo "<script> location.href = '../../server_front/specific_calendar.php'</script>";

                }
        }
        else
        {
                $query = "delete from specific_calendar where eventid between '$id' and '$end_id'";
		echo "in range";
                if(!mysqli_query($connection, $query))
                {
                       
                        echo $connection->error;
                }
                else
                {
//                       echo "<script> location.href = '../../server_front/specific_calendar.php'</script>";

                }

        }
	


?>
