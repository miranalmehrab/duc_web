<?php include '../connection.php' ?>
<?php

	$id = $_POST['id'];
	$name = $_POST['name'];
	$rank = $_POST['rank'];
	$educational_qualification = $_POST['educational_qualification'];
	$img_url = $_POST['img_url'];


	$query = "insert into head_of_du (id,rank,name,educational_qualification,image) values ('$id','$rank','$name','$educational_qualification','$img_url')";

	if(!mysqli_query($connection, $query))
	{
	
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/head_of_du.php'</script>";

	}


?>
