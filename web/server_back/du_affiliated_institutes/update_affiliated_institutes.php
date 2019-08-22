<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $name =mysqli_real_escape_string($connection, $_POST['name']);
        $i_name = $_POST['institute_name'];
        $gov = $_POST['governance'];
	
	$query = "update du_affiliated_institutes set name='$name', institute_name = '$i_name', governance='$gov' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/du_affiliated_institutes.php'</script>";

	}


?>
