<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$institute = $_POST['institute'];
	$membership = $_POST['membership'];
	$table_name = $_POST['table_name'];

	$query = "insert into board_of_proctor (id,name,institute,membership) values('$id','$name','$institute','$membership')";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/board_of_proctor.php'</script>";
	}


?>
