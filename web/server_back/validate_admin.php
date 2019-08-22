<?php include 'connection.php'; ?>
<?php

	session_start();
	/*if(isset($_SESSION['username']))
	{
		echo "<script> location.href = '../server_front/home.php'</script>";
	}
	
	else
	{*/	
		$user_name = $_POST['name'];
		$password = $_POST['password'];

		/*
		$query = "select * from admin where userName = '$user_name'";
		$result = mysqli_query($connection,$query);
		$row = mysqli_fetch_row($result);*/

		$statement = $connection->prepare("select userName,password from admin where userName=? and password=? limit 1");
		$statement->bind_param("ss", $user_name, $password);
	 	$statement->execute();
		$statement->bind_result($userName, $password);
		$statement->store_result();
	
		if($statement->num_rows == 1)
		{
			$_SESSION['username'] = $user_name;
			echo "<script>location.href = '../server_front/home.php'</script>";
		}
		else
		{
			echo htmlspecialchars($statement->error);
			echo "<script> alert('username or password is incorrect!') </script>";
			echo "<script> location.href = '../../../../log_in.php'</script>";
		}
		$statement->close();




	/*	if($row[2] == $password)
		{
			$_SESSION['username'] = $user_name;
			echo "<script>location.href = '../server_front/home.php'</script>";
		}
		else
		{
			echo "<script> alert('username or password is incorrect!') </script>";
			echo "<script> location.href = '../server_front/log_in.php'</script>";
		}
	//} */




?>
