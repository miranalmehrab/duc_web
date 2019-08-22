<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$dept_name = $_POST['dept_name'];
	$chairman_name = $_POST['chairman_name'];
	$table_name = $_POST['table_name'];

	$query = "update chairman_of_dept set dept_name = '$dept_name',chairman_name ='$chairman_name' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		  echo "<script> location.href = '../../server_front/head_of_dept.php'</script>";		
	}


?>
