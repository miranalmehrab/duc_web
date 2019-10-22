<?php include '../connection_phone_book.php' ?>
<?php
	$id = $_POST['id'];
        $inf_name = mysqli_real_escape_string($connection, $_POST['infrastructure_name']);
        $person_name = $_POST['person_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
	$table_name = $_POST['table_name']; 	
	$rank = $_POST['rank'];

	$query = "update $table_name set inf_name='$inf_name', person_name = '$person_name',rank = '$rank',email='$email',phone='$phone' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href='../../server_front/institutes_phone_book.php' </script>";

	}


?>
