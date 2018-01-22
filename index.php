<?php

include "functions.php";
include "data.php";
include 'url.php';


// Changes the color of the percentage change to green or red depending if the change was positive or negative

if ($btc24Change > 0) {        
	$indicator = "green";
} 
else {
	$indicator = "red";
}
?>



<!doctype html>
<html>
<head>
	 <meta http-equiv="refresh" content="5">
	<meta charset="UTF-8">
	<title>CryptoCurrency Tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>
	

<body style="font-family: Lato">
	
	<h1>CryptoCurrency Tracker</h1>
	
	
	<table class="cellpadding">
	<tr class="row_border">
		<td><img src="logos/bitcoinlogo.jpg" alt="bitcoin logo" height="20px" width="auto"></td>
		<td><?php echo "1 BTC =" . " " . "<span style='font-size: 25px';>$" . $btcPrice . "</span>"
		 . " " . "&nbsp<span style='color:" . $indicator . "'>" . $btc24Change . "%</span>"?></td>
	</tr>
		
	<tr class="row_border">
		<td><img src="logos/litecoinlogo.jpg" alt="litecoin logo" height="25px" width="auto"></td>
		<td><?php echo "1 LTC =" . " " . "<span style='font-size: 25px';>$" . $ltcPrice . "</span>"
		. " " . "&nbsp<span style='color:" . $indicator . "'>" . $ltc24Change . "%</span>"?></td>
	</tr>
		
	<tr class="row_border">
		<td><img src="logos/ripplelogo.jpg" alt="litecoin logo" height="25px" width="auto"></td>
		<td><?php echo "1 XRP =" . " " . "<span style='font-size: 25px';>$" . $xrpPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $indicator . "'>" . $xrp24Change . "%</span>"?></td>
	</tr>
		
	<tr class="row_border">
		<td><img src="logos/bitcoincashlogo.jpg" alt="litecoin logo" height="25px" width="auto"></td>
		<td><?php echo "1 BCH =" . " " . "<span style='font-size: 25px';>$" . $bchPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $indicator . "'>" . $bch24Change . "%</span>"?></td>
	</tr>	
		
	<tr>
		<td><img src="logos/ethereumlogo.jpg" alt="litecoin logo" height="35px" width="auto"></td>
		<td><?php echo "1 ETH =" . " " . "<span style='font-size: 25px';>$" . $ethPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $indicator . "'>" . $eth24Change . "%</span>"?></td>
	</tr>
	
	</table>
	
	 
	

</body>
</html>