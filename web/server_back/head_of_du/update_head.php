<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$rank = $_POST['rank'];
	$name = $_POST['name'];
	$img_url = $_POST['img_url'];
	$educational_qualification = $_POST['educational_qualification'];
	$query = "update head_of_du set rank='$rank',name='$name',educational_qualification='$educational_qualification', image='$img_url' where id='$id'";

	if(!mysqli_query($connection, $query))
	{
		echo $connection->error;
	}
	else
	{
		echo "<script> location.href = '../../server_front/head_of_du.php'</script>";

	}


?>
