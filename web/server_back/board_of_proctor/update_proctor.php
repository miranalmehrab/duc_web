<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$institute = $_POST['institute'];
	$membership = $_POST['membership'];
	$table_name = $_POST['table_name'];

	$query = "update board_of_proctor set name='$name',institute='$institute',membership ='$membership' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/board_of_proctor.php'</script>";

	}


?>
