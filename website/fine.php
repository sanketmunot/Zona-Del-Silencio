<?php  

$servername = "http://delsilentzone.000webhostapp.com";
$user = "id12201017_admin";
$pass = "silentzone@10";
$dbname = "id12201017_entries";

$conn = new mysqli("localhost",$user,$pass,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mac = $_GET['mac'];
echo $mac;
$sql = "SELECT count,vehicle FROM user WHERE mac='$mac'";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);
echo $row['vehicle'];
$count = $row['count']+1;
$vehicle = $row['vehicle'];

$sql = "INSERT INTO fineregister(vehicle,paid,datetime) VALUES 
        ('$vehicle','N',CURRENT_TIMESTAMP)";
$result = mysqli_query($conn,$sql);
$sql = "UPDATE user set count='$count' WHERE mac = '$mac'";
$result = mysqli_query($conn,$sql);
?>