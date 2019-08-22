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



$sql_query = mysqli_query($conn , "select * from calendarCse");

$flag = array();
if($sql_query){

	while($row = $sql_query->fetch_assoc()){
		$flag[] = $row;
		

	}
	
	$json_data = json_encode($flag);
	echo json_encode($flag);

//	echo '<img src="' . $row[4] . '" />';
}

$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($flag));
fclose($fp);

file_put_contents('myfile.json', $json_data);
mysqli_close($conn);

?>

