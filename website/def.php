<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Monthly List</title>
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

<body >
	<!--Navigation-->
	<?php include_once("header.html") ?>

	<hr>
	<!-- <br><br> -->
	<!--image slider-->
	<br><br>

<center>
	<table cellpadding="15px" border="2px solid black" width="50%">
		<tr align="center">
			<th>Vehicle Number</th>
			<th>Count</th>
		</tr>
	

	<?php

	if ($_POST['defaulter']=="admin@10"){

		$user = "id12201017_admin";
		$pass = "silentzone@10";
		$dbname = "id12201017_entries";

// 		$conn = new mysqli("localhost", "root", "","test");
        $conn = new mysqli("localhost",$user,$pass,$dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT vehicle,count from user WHERE count>3";

		$conn->query($sql);
		$result = mysqli_query($conn,$sql);

		// $row = mysqli_fetch_array($result);

		while($row = $result->fetch_assoc()) {
			
		?>
		<tr align="center"><td><?php echo  $row["vehicle"]; ?></td>
			<td><?php echo  $row["count"]; ?></td></tr><?php
		}		


	}

	else{
		echo "<script type='text/javascript'>alert('WRONG PASSWORD TRY AGAIN !!'); window.open('admin.html')</script>";

	}
	?>
</table>
</center>
	<?php include_once("footer.html") ?>
	
	<script src="script.js"></script>

</div>
</body>
</html>