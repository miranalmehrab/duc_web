<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $rule = $_POST['rule'];
	
	$query = "update procurator_rules set rule= '$rule' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/procurator_rules.php'</script>";

	}


?>
