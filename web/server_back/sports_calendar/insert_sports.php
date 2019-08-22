<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
	$end_date = $_POST['end_date'];

	//$query = "insert into sports_calendar (id,name,date) values('$id','$name','$date')";
	echo "<script>alert('Data Came here!');</script>";
	if($end_date == NULL)
        {
                $query = "insert into sports_calendar (eventid,eventname,date) values('$id','$name','$date')";

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
                $startTime = strtotime($date);
                $endTime = strtotime($end_date);
                $thisID = intval($id) - 1;

                for($time = $startTime; $time <= $endTime; $time = strtotime('1 day', $time))
                {

                        $thisDate = date('d-m-y', $time);
                        $thisID = $thisID + 1;
                        $query = $query = "insert into sports_calendar (eventid,eventname,date) values('$thisID','$name','$thisDate')";
                        mysqli_query($connection, $query);
			/*{
				$connection->error;
			}*/
			


                }
		 echo "<script> location.href = '../../server_front/sports_calendar.php'</script>";


	}


?>
