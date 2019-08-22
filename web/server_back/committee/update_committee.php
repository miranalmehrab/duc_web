<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$rank = $_POST['rank'];
	$membership = $_POST['membership'];
	$table_name = $_POST['table_name'];

	$query = "update $table_name set name='$name',rank='$rank',membership ='$membership' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
	
		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.replace(document.referrer); </script>";
	}


?>
