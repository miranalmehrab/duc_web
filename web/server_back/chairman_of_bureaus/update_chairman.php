<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $center_name = $_POST['center_name'];
        $c_date= $_POST['constitute_date'];
        $committee_date = $_POST['committee_date'];
        $chairman_name = $_POST['chairman_name'];
        $director_name = $_POST['director_name'];
        $table_name = $_POST['table_name'];

	$query = "update chairman_of_bureaus set center_name = '$center_name', constitution_date= '$c_date', committee_date = '$committee_date' ,chairman_name ='$chairman_name', director_name ='$director_name'  where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/chairman_of_bureaus.php'</script>";

	}


?>
