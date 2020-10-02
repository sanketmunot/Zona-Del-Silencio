<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Fine - <?php echo $_POST["user"];?></title>
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
    <?php include_once("header.html"); ?>
<center>
    <br><br><br>

    <?php

    $user = "id12201017_admin";
    $pass = "silentzone@10";
    $dbname = "id12201017_entries";


    $conn = new mysqli("localhost",$user,$pass,$dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $vehicle = $_POST["user"];

    $sql = "SELECT count,mac FROM user WHERE vehicle='$vehicle'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    
        $res = $row['count'] * 100 ;
        if ($res<=300){
            $res = "You dont have a due";
        }
    

    ?>

    <h1>Fine Receipt</h1>
    <table border="2px solid black" cellpadding="15px" width="30%">
        <tr align="center"> 
            <th>Vehicle No.</th>
             <th><?php echo $vehicle;?></th>
        </tr>
        


    </table>
    <br>
    <div style=" width: 350px;height: 150px;background-color:#33cc33;border-radius: 20px;box-shadow: 6px 6px 6px 6px #006600; padding-top: 1%; ">
        <hr width="85%" style="border:  dotted black;">
        <h1><?php echo $res;?> ₹</h1>
        <hr width="85%" style="border:  dotted black;">
    </div>
    
    <br><br>
    <form action="/paymentreceipt/receipt.php" method='get' target="_blank">
        <input name='user' value='<?php echo $vehicle; ?>' style="display:none;">
        <input type='submit' class="btn btn-primary" value='INVOICE'>
    </form>


</center>
<br><br><br>

<?php include_once("footer.html"); ?>
<script src="script.js"></script>

</div>
</body>
</html>

