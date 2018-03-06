<?php
include "data.php";

// Caches the Currency prices whenever the Tracker page loads
session_start();
$_SESSION['btc_price'] = $btcPrice;     
$_SESSION['ltc_price'] = $ltcPrice;
$_SESSION['xrp_price'] = $xrpPrice;
$_SESSION['bch_price'] = $bchPrice;
$_SESSION['eth_price'] = $ethPrice;
$_SESSION['dash_price'] = $dashPrice;
$_SESSION['zec_price'] = $zcashPrice;
$_SESSION['nxt_price'] = $nxtPrice;


// Changes the color of the percentage change to green or red depending if the change was positive or negative
function indicator($dayChange) {
if ($dayChange > 0) {        
	$indicator = "green";
} 
else {
	$indicator = "red";
}
	return $indicator;
}
$btcIndicator = indicator($btc24Change);
$ltcIndicator = indicator($ltc24Change);
$xrpIndicator = indicator($xrp24Change);
$bchIndicator = indicator($bch24Change);
$ethIndicator = indicator($eth24Change);
$dashIndicator = indicator($dash24Change);
$zecIndicator = indicator($zcash24Change);
$nxtIndicator = indicator($nxt24Change);

?>



<!doctype html>
<html>
<head>
	 <!-- <meta http-equiv="refresh" content="20"> -->
	<meta charset="UTF-8">
	<title>CryptoCurrency Tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>
	

<body style="font-family: Lato">
	<header>
	  
	<h1>CryptoCurrency Tracker</h1>
	 <div class="nav">
	  <ul>
	   <li><a class="active-page" href="http://localhost/cryptocurrency_tracker/index.php">Tracker</a></li>
	   <li><a class="portfolio-button" href="http://localhost/cryptocurrency_tracker/portfolio.php">My Portfolio</a></li>
      </ul>
	 </div>
	
	</header>
	
	<table class="cellpadding">
	<tr class="info-panel">
		<td><p class="info-item1">Currency Name</p></td>
		<td><p class="info-item2">Current Price</p><p class="info-item3">24hr Change</p></td>
	</tr>	
	<!-- Bitcoin -->	
	<tr class="row_border">
		<td><img src="logos/bitcoinlogo.jpg" alt="bitcoin logo" height="20px" width="auto"></td>
		<td><?php echo "1 BTC =" . " " . "<span style='font-size: 25px';>$" . $btcPrice . "</span>"
		 . " " . "&nbsp<span style='color:" . $btcIndicator . "'>" . $btc24Change . "%</span>"?></td>
	</tr>
	<!-- Litecoin -->
	<tr class="row_border">
		<td><img src="logos/litecoinlogo.jpg" alt="litecoin logo" height="25px" width="auto"></td>
		<td><?php echo "1 LTC =" . " " . "<span style='font-size: 25px';>$" . $ltcPrice . "</span>"
		. " " . "&nbsp<span style='color:" . $ltcIndicator . "'>" . $ltc24Change . "%</span>"?></td>
	</tr>
	<!-- Ripple -->	
	<tr class="row_border">
		<td><img src="logos/ripplelogo.jpg" alt="ripple logo" height="25px" width="auto"></td>
		<td><?php echo "1 XRP =" . " " . "<span style='font-size: 25px';>$" . $xrpPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $xrpIndicator . "'>" . $xrp24Change . "%</span>"?></td>
	</tr>
	<!-- Bitcoincash -->	
	<tr class="row_border">
		<td><img src="logos/bitcoincashlogo.jpg" alt="bitcoincash logo" height="25px" width="auto"></td>
		<td><?php echo "1 BCH =" . " " . "<span style='font-size: 25px';>$" . $bchPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $bchIndicator . "'>" . $bch24Change . "%</span>"?></td>
	</tr>	
	<!-- Ethereum -->	
	<tr class="row_border">
		<td><img src="logos/ethereumlogo.jpg" alt="ethereum logo" height="35px" width="auto"></td>
		<td><?php echo "1 ETH =" . " " . "<span style='font-size: 25px';>$" . $ethPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $ethIndicator . "'>" . $eth24Change . "%</span>"?></td>
	</tr>
	<!-- Dash -->	
	<tr class="row_border">
		<td><img src="logos/dashlogo.jpg" alt="dash logo" height="20px" width="auto"></td>
		<td><?php echo "1 DASH =" . " " . "<span style='font-size: 25px';>$" . $dashPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $dashIndicator . "'>" . $dash24Change . "%</span>"?></td>
	</tr>	
	<!-- ZCash -->	
	<tr class="row_border">
		<td><img src="logos/zcashlogo.jpg" alt="zcash logo" height="30px" width="auto"></td>
		<td><?php echo "1 ZEC =" . " " . "<span style='font-size: 25px';>$" . $zcashPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $zecIndicator . "'>" . $zcash24Change . "%</span>"?></td>
	</tr>
	<!-- NXT coin -->	
	<tr>
		<td><img src="logos/nxtlogo.jpg" alt="nxt logo" height="35px" width="auto"></td>
		<td><?php echo "1 NXT =" . " " . "<span style='font-size: 25px';>$" . $nxtPrice . "</span>"
			. " " . "&nbsp<span style='color:" . $nxtIndicator . "'>" . $nxt24Change . "%</span>"?></td>
	</tr>
	
	</table>
	
	 
	
</body>
</html>