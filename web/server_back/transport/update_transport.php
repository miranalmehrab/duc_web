<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$busName = $_POST['busName'];
	$routeName = $_POST['routeName'];
	$busType = $_POST['busType'];
	$runType = $_POST['runType'];
	$time = $_POST['time'];

	$query = "update transport set busName = '$busName', routeName = '$routeName',busType='$busType',runType='$runType',time = '$time' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		 echo "<script> location.href = '../../server_front/transports.php'</script>";
	}


?>
