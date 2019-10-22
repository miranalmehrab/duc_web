<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = mysqli_real_escape_string($connection, $_POST['description']);
	$table_name = $_POST['table_name'];
	$img_url = $_POST['img_url'];
	
	$query = "insert into faculty_of_du (id,name,description,image) values ('$id','$name','$description','$img_url')";


	if(!mysqli_query($connection, $query))
	{
	
		echo mysqli_error($connection);
	}
	else
	{
                echo "<script> location.href = '../../server_front/faculty.php'</script>";
	}


?>
