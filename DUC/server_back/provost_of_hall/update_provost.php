<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$hall_name = $_POST['hall_name'];
	$provost_name = $_POST['provost_name'];
	$table_name = $_POST['table_name'];

	$query = "update provost_of_hall set hall_name = '$hall_name',provost_name ='$provost_name' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{

		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.href = '../../server_front/provost_of_hall.php'</script>";

	}


?>
