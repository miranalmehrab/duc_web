<?php include '../connection_phone_book.php' ?>
<?php
	$id = $_POST['id'];
	$inf_name =  $_POST['infrastructure_name'];
	$person_name = $_POST['person_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$table_name = $_POST['table_name'];	
	$rank = $_POST['rank'];
	
	$query = "insert into $table_name (id,inf_name,rank,person_name,email,phone) values('$id','$inf_name','$rank','$person_name','$email','$phone')";
	  echo $table_name;
	
	if(!mysqli_query($connection, $query))
	{
		echo "Data not inserted!";
		echo $table_name;
		echo mysqli_error($connection);

	}
	else
	{
	 	echo "<script> location.href='../../server_front/institutes_phone_book.php' </script>"; 
	}

	
?>
