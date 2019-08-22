<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

	$query = "update deans_award set name = '$name',description ='$description' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/deans_award.php'</script>";

	}


?>
