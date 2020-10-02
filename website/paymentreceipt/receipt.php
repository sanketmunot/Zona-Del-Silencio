<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
	
	<title>Payment Receipt</title>
	
	<link rel='stylesheet' type='text/css' href='style.css' />
	<link rel='stylesheet' type='text/css' href='print.css' media="print" />
	
	<script type="text/javascript"> 
    </script> 

</head>

<body><br><br><br><br><br>

	<div id="page-wrap">

		<label id="header" style="text-align: center;">Payment Receipt</label>
		
            <div id="logo">          
               <img id="image" src="logo.png" alt="logo" />

            </div>
		
	<br><br><br>

	<?php

    $user = "id12201017_admin";
    $pass = "silentzone@10";
    $dbname = "id12201017_entries";


    $conn = new mysqli("localhost",$user,$pass,$dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $vehicle = $_GET["user"];

    $sql = "SELECT count,mac FROM user WHERE vehicle='$vehicle'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    
        $res = $row['count'] * 100 ;
        if ($res<=300){
            $res = 0;
        }
    

	?>
	
	 <table>
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><label> <?php echo $vehicle;?> </label></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><label id="date"><?php echo date("Y/m/d"); ?></label></td>
                </tr>
            </table>
		
		<table id="items" border="2" >
			<br><br>
		
		  <tr align="center">
		      <th>Vehicle No</th>
		      <th>Unit Cost</th>
		      <th>Count</th>
		      <th>Amount</th>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="4"></td>
		  </tr>

		  <tr class="item-row" align="center">
		      <td class="item-name"><label> <?php echo $vehicle;?> </label></div></td>
		      
		      <td><label class="cost">100.00</label></td>
		      <td><label class="qty"><?php echo $row['count']; ?></label></td>
		      <td><label class="price">₹<?php echo $res;?></label></td>
		  </tr>
		  <tr class="item-row" align="center">
		      <td class="item-name"><label></label></div></td>
		      
		      <td><label class="cost"></label></td>
		      <td><label class="qty"></label></td>
		      <td><label class="price"></label></td>
		  </tr>
		
		  
		  <tr id="hiderow">
		    <td colspan="4"></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total"> ₹<?php echo $res;?> </div></td>
		  </tr>
		
		</table>

		<br>

		<input type="button" value="Print" style="height: 50px; width: 100px; margin-left: 40%" 
               onclick="window.print()" />
		
		<div id="terms">
		  <h5>Zona Del Silencio</h5>	
		</div>
	
	</div>
	
</body>

</html>