<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$dept_name= $_POST['dept_name'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$academic_year = $_POST['academic_year'];
	$end_date = $_POST['end_date'];


	//$query = "insert into specific_calendar (eventid,dept_name,academic_year,date,eventname,description) values('$id','$dept_name','$academic_year','$date','$name','$description')";

	if(is_null($end_date))
        {
                $query = "insert into specific_calendar (eventid,dept_name,academic_year,date,eventname,description) values('$id','$dept_name','$academic_year','$date','$name','$description')";

                if(!mysqli_query($connection, $query))
                {
                         echo $connection->error;
                }
                else
                {
                        echo "<script> location.href = '../../server_front/specific_calendar.php'</script>";

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
                        $query = "insert into specific_calendar (eventid,dept_name,academic_year,date,eventname,description) values('$thisID','$dept_name','$academic_year','$thisDate','$name','$description')";

                        if(mysqli_query($connection, $query))
			{
				echo "<script> location.href = '../../server_front/specific_calendar.php'</script>";
			}
			else
			{	
				echo $connection->error;
			}


                }


        }



?>
