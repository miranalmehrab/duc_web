<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	$end_id = $_POST['end_id'];
	$table_name = $_POST['table_name'];

	//$query = "delete from sports_calendar where eventid=$id";
	if($end_id == NULL)
        {
                $query = "delete from sports_calendar where eventid='$id'";

                if(!mysqli_query($connection, $query))
                {
                       
                        echo $connection->error;
                }
                else
                {
                         echo "<script> location.href = '../../server_front/sports_calendar.php'</script>";

                }
        }
        else
        {
                $query = "delete from sports_calendar where eventid between '$id' and '$end_id'";

                if(!mysqli_query($connection, $query))
                {
                       
                        echo $connection->error;
                }
                else
                {
                         echo "<script> location.href = '../../server_front/sports_calendar.php'</script>";

                }

        }



?>
