<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$faculty_name = $_POST['faculty_name'];
	$dean_name = $_POST['dean_name'];
	$table_name = $_POST['table_name'];

	$query = "update $table_name set faculty_name = '$faculty_name',dean_name ='$dean_name' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/dean.php'</script>";

	}


?>
