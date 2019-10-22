<?php 
	session_start();
	
	
	if(isset($_SESSION['username']))
	{				
		session_destroy();
		echo "<script>location.href = '../../../../log_in.php'</script>";
		
	}
	else
	{
		echo "<script>location.href = '../../../../log_in.php'</script>";
	}


 ?>
