<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
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
  </style>
</head>

<body >
	<!--Navigation-->

  <?php include_once("header.html"); ?>

  <!-- <br><br> -->
  <!--image slider-->
 <div class="bg">
  <div class="row  " style="padding-top: 40px;" >
    
    <br>
    <div class="col-sm-6 offset-md-1 row2" style="background-color:#ccccff;">

     <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images\back1.jpg" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images\back2.jpg" class="d-block w-100 h-80" alt="...">
        </div>
        <div class="carousel-item" >
          <img src="images\no-honking.jpg" class="d-block w-100 h-80">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>

  <div class="col-sm-3 offset-sm-1 row2 " style="margin-right: 6%;background-color:#ccccff;padding-top:30px;">


    <div class="row" style="padding: 20px;"><button id="getaction" onclick="get()" class="btn btn-block " role="button" style="background-color: #4080bf;color:#0d1a26;font-weight: bold;">GET MY CHALAN</button></div>
    <button id="bk" onclick="bk()" class="btn btn-block btn-danger" style="width: 20%; display: none;"><</button><br>
    
    <form action="user.php" method="post">
      <input type="text" class="form-control" id="usr" name="user" style="width:70%; display: none;" placeholder="Vehicle No."><br>
      <button class="btn btn-primary" type="submit" id="get" style="width:50%; display: none;">Submit</button>
    </form>
  </div>
</div>
<br>


<?php include_once("footer.html"); ?>
<script src="script.js"></script>
</div>
</div>
</body>
</html>