<?php include '../connection.php' ?>
<?php


	$id = $_POST['id'];
	$center_name = $_POST['center_name'];
	$c_date= $_POST['constitution_date'];
	$committee_date = $_POST['committee_date'];
	$chairman_name = $_POST['chairman_name'];
	$director_name = $_POST['director_name'];

	$query = "insert into chairman_of_bureaus (id,center_name,constitution_date,committee_date,chairman_name, director_name) values('$id','$center_name','$c_date','$committee_date','$chairman_name','$director_name')";

	if(!mysqli_query($connection, $query))
	{
		echo mysqli_error($connection);

	}
	else
	{
		echo "<script> location.href = '../../server_front/chairman_of_bureaus.php'</script>";
		
	}
?>
