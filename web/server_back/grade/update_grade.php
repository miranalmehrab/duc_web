<?php include '../connection.php' ?>
<?php
	$id = $_POST['id'];
        $marks = $_POST['marks'];
        $grade = $_POST['letter_grade'];
        $point = $_POST['grade_point'];

	$query = "update grading_system  set marks='$marks', grade = '$grade', point='$point' where id= '$id'";

	if(!mysqli_query($connection, $query))
	{
		
		echo mysqli_error($connection);

	}
	else
	{
		 echo "<script> location.href = '../../server_front/grading_system.php'</script>";

	}


?>
