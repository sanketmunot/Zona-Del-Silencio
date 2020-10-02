<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Monthly List - <?php echo $_POST['record'];?></title>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel = "icon" href = "images/logo.png" type = "image/x-icon">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<?php include_once("header.html") ?>

	<hr>
	<!-- <br><br> -->
	<!--image slider-->
	<br><br>

<center>
	<table cellpadding="15px" border="2px solid black" width="50%" style="scroll-behavior: smooth;">
		<tr align="center">
			<th>Instance</th>
			
		</tr>
	

	<?php

		$user = "id12201017_admin";
		$pass = "silentzone@10";
		$dbname = "id12201017_entries";

// 		$conn = new mysqli("localhost", "root", "","test");
        $conn = new mysqli("localhost",$user , $pass, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$vehicle = $_POST['record']; ?><h3><?php
		echo $vehicle; ?></h3><?php 
		$sql = "SELECT datetime from fineregister WHERE vehicle = '$vehicle' ; ";

		$conn->query($sql);
		$result = mysqli_query($conn,$sql);

		// $row = mysqli_fetch_array($result);

		while($row = $result->fetch_assoc()) {
			
		?>
		<tr align="center"><td><?php echo $row["datetime"]; ?></td></tr><?php
		}		

	?>
</table>
<br><br><br>
</center>
	<?php include_once("footer.html") ?>
	<script src="script.js"></script>

</div>
</body>
</html>