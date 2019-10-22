<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $result = $_POST['result'];
        $year = $_POST['year'];

	$query = "update list_of_deans_award set name = '$name',department ='$department', result='$result', year='$year' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/list_of_deans_award.php'</script>";

	}


?>
