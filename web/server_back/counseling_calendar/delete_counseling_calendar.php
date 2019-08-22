<?php include '../connection.php'; ?>
<?php
	$id = $_POST['id'];
	$end_id = $_POST['end_id'];
	$table_name = $_POST['table_name'];

	//$query = "delete from sports_calendar where eventid=$id";
	if($end_id == NULL)
        {
                $query = "delete from counseling_calendar where id='$id'";

                if(!mysqli_query($connection, $query))
                {
                       
                        echo $connection->error;
                }
                else
                {
                         echo "<script> location.href = '../../server_front/club_calendar.php'</script>";

                }
        }
        else
        {
                $query = "delete from counseling_calendar  where id between '$id' and '$end_id'";

                if(!mysqli_query($connection, $query))
                {
                       
                        echo $connection->error;
                }
                else
                {
                         echo "<script> location.href = '../../server_front/club_calendar.php'</script>";

                }

        }



?>
