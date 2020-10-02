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
	
		<style type="text/css">

		.bg{
			position: relative;
			background:#00fdff url('images/check.jpg');
			height:70vh;
			background-size: cover;
			background-position: 0 0;
			background-repeat: repeat-x;
			animation: animate 15s linear infinite;
		} 

		@keyframes animate {
			from{
				background-position:0 0;
			}
			to{
				background-position: 100% 0;
			}
		}

		.car{
			position: absolute;
			bottom: 20px;
			right: 80px;
			height: 25%;

		}
		.car2{
			position: absolute;
			bottom: 20px;
			left: 80px;
			height: 18%;

		}


		.flex-container {
			display: flex;
			justify-content:space-around;
			background-color:transparent;
			flex-direction: row
		}

		.flex-container > div {
			background-color:#009999;
			width: 350px;
			border:2px dashed black;
			height: 220px;
			margin: 10px;
			margin-top: 5%;
			text-align: center;
			padding:2%;
			border-radius: 15px;
			font-size:20px;

		}

	</style>
</head>

<body >
	<!--Navigation-->
	
	<?php include_once("header.html"); ?>
	
	<!-- <br><br> -->
	<!--image slider-->
	
	<div class="bg">
		<img src="images/blue-truck.png" class="car">
		<img src="images/suzuki.png" class="car2">

		<div class="flex-container">
			<div>
				<div class="form-group "  >
					<form action="def.php" method="post">
						<center>
							<b>Retreive Defaulters</b>
							<br><br>
							<input type="password" name="defaulter" placeholder="password"><br><br>
							<button  class="btn btn-dark">SUBMIT</button>
						</center>
					</form>
				</div>
			</div>
			<div>
				<div class="form-group "  >
					<form action="rec.php" method="post">
						<center>
							<b>Enter  Vehicle Number</b>
							<br><br>
							<input type="text" name ="record" placeholder="Enter Vehicle Number"><br><br>
							<button  class="btn btn-dark">SUBMIT</button>
						</center>
					</form>
				</div>
			</div>

		</div>

		


	</div>

		<?php include_once("footer.html"); ?>
		<script src="script.js"></script>

	</div>
</body>
</html>