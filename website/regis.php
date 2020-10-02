<?php  
$mac = $_POST['mac']; 
$vehicle = $_POST['vehicle'];
// echo $mac;

$user = "id12201017_admin";
$pass = "silentzone@10";
$dbname = "id12201017_entries";

$conn = new mysqli("localhost", $user, $pass,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (mac,vehicle,count)
VALUES ('".$mac."','".$vehicle."',0);";

$conn->query($sql);

echo "<script  type='text/javascript'>window.open('https://delsilentzone.000webhostapp.com/','_self') </script>"
?>