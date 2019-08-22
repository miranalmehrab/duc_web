<?php


$host = "localhost";
$user = "root2";
$password = "123password";
$db = "DUC";

$conn = mysqli_connect($host , $user , $password , $db);

if (!conn){
	die("Error in connection " );
}

if(mysqli_connect_error($conn)){

	echo "Failed to connect ";
}

$response  = array();

$sql_query = "select * from departments";

$result = mysqli_query($conn , $sql_query);

if(mysqli_num_rows($result) >0 ){

	while($row = mysqli_fetch_assoc($result)){

		array_push($response , $row);
	}
	echo $response;
}

else {

	$response['success'] = 0;
	$response['message'] = 'No Data';

}

json_encode($response);
mysqli_close($conn);

?>

