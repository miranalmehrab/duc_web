<?php include 'connection.php'; ?>
<?php

	$table_name = 'transport';
	$query = "select * from $table_name";
	
	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);
	}
	else
	{


		$json_array = array();
		$result = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($result))
		{	
			$json_array[] = $row;
		}

		echo json_encode($json_array);
	/*	echo '<pre>';
		print_r($json_array);
		echo '</pre>';
	*/	
	}


?>
