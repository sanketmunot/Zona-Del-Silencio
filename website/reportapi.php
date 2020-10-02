<?php
header("Content-Type:application/json");

$today = $_GET['today'];
$yest = $_GET['yest'];

$user = "id12201017_admin";
$pass = "silentzone@10";
$dbname = "id12201017_entries";
$conn = new mysqli("localhost",$user,$pass,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT vehicle,COUNT(vehicle) as count FROM fineregister WHERE datetime <= '$today' 
		AND datetime >= '$yest'  GROUP BY vehicle";

 
$result = mysqli_query($conn,$sql);

while($row = $result->fetch_assoc()) {
	$response[$row['vehicle']] = $row['count'] ;
    
    $json_response = json_encode($response);
    
	}
	 echo $json_response;
?>