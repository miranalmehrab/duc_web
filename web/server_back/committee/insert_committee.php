<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$rank = $_POST['rank'];
	$membership = $_POST['membership'];
	$table_name = $_POST['table_name'];

	$query = "insert into $table_name (id,name,rank,membership) values('$id','$name','$rank','$membership')";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.replace(document.referrer); </script>";
		
	}


?>
