<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Registartion</title>
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
          background:#00fdff url('images/check2.jpg');
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

</style>
    
</head>

<body   >
    <!--Navigation-->
    <?php include_once("header.html"); ?>

    <center>

        <div class="bg">
            <img src="images/blue-truck.png" class="car">
            <img src="images/suzuki.png" class="car2">

            <form action="regis.php" method="post" id="regform" style="display: none; border:2px solid black; width: 30%; padding: 2% 2% 2% 2%; background-color: #85adad; border-radius: 5px;" >
              <div class="form-group"><strong>
                <label for="email" >Vehicle No.</label>
                <input type="text" name="vehicle" class="form-control" style="widh: 20%;">
            </div>
            <div class="form-group">
                <label for="pwd">MAC ID</label></strong>
                <input type="text" class="form-control" style="widh: 20%;" name="mac">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>
        <center>
            <div class="card text-black mb-3" style="max-width:22rem;background-color:#0dd9cc;margin-top:3%;border-radius: 15px;border:2px dashed black;">
                <div class="form-group " id="checkcom" style="margin-top:10%;">
                <b>Enter the company password</b>
                <br><br>
                <input type="password" id=cp><br><br>
                <button onclick="fff()" class="btn btn-dark">SUBMIT</button>
            </div>
              
            </div>
            



        </center>
    </div>






<?php include_once("footer.html"); ?>
<script src="script.js"></script>

</div>
</body>
</html>

