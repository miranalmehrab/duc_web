<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$institute_name = $_POST['institute_name'];
	$director_name = $_POST['director_name'];
	$table_name = $_POST['table_name'];

	$query = "update director_of_institute set institute_name = '$institute_name',director_name ='$director_name' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
	
		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.href = '../../server_front/director_of_institute.php'</script>";

	}


?>
