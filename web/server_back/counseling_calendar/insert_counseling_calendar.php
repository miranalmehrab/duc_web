<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$activity = $_POST['activity'];
	$date = $_POST['date'];
	$end_date = $_POST['end_date'];
	$club_name = $_POST['club_name'];
	//$query = "insert into sports_calendar (id,name,date) values('$id','$name','$date')";
	
	if($end_date == NULL)
        {
                $query = "insert into counseling_calendar (id,club_name,activity,date) values('$id','$club_name','$activity','$date')";

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
                $startTime = strtotime($date);
                $endTime = strtotime($end_date);
                $thisID = intval($id) - 1;

                for($time = $startTime; $time <= $endTime; $time = strtotime('1 day', $time))
                {

                        $thisDate = date('d-m-y', $time);
                        $thisID = $thisID + 1;
                        $query = $query = "insert into counseling_calendar (id,club_name,activity,date) values('$thisID','$club_name','$activity','$thisDate')";
                        mysqli_query($connection, $query);
			/*{
				$connection->error;
			}*/
			


                }
		 echo "<script> location.href = '../../server_front/club_calendar.php'</script>";


	}


?>
