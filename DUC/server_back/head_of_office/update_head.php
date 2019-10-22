<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$office_name = $_POST['office_name'];
	$head_name = $_POST['head_name'];
	$table_name = $_POST['table_name'];

	$query = "update head_of_office set office_name = '$office_name',head_name ='$head_name' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.href = '../../server_front/head_of_office.php'</script>";

	}


?>
