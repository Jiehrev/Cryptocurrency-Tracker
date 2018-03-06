<?php 

session_start();
// Getting the Cached currency prices and storing them in variables
$btc_price = $_SESSION['btc_price'];
$ltc_price = $_SESSION['ltc_price'];
$xrp_price = $_SESSION['xrp_price'];
$bch_price = $_SESSION['bch_price'];
$eth_price = $_SESSION['eth_price'];
$dash_price = $_SESSION['dash_price'];
$zec_price = $_SESSION['zec_price'];
$nxt_price = $_SESSION['nxt_price'];


// Sets the amount of the currency and the total holdings of the currency to 0
$bitcoin_holdings = 0;
$amount_bitcoin = 0;

$litecoin_holdings = 0;
$amount_litecoin = 0;

$ripple_holdings = 0;
$amount_ripple = 0;

$bitcoincash_holdings = 0;
$amount_bitcoincash = 0;
	
$ethereum_holdings = 0;	
$amount_ethereum = 0;

$dash_holdings = 0;
$amount_dash = 0;
	
$zcash_holdings = 0;
$amount_zcash = 0;
	
$nxt_holdings = 0;
$amount_nxt = 0;

// Calculating the total holdings using the cached currency prices and form input values
if ((isset($_POST['amount_bitcoin_sub']))) {
	$amount_bitcoin = $_POST['amount_bitcoin'];
	$bitcoin_holdings = $btc_price * $amount_bitcoin;	
} 
else if ((isset($_POST['amount_litecoin_sub']))) {
	$amount_litecoin = $_POST['amount_litecoin'];
	$litecoin_holdings = $ltc_price * $amount_litecoin;
}
else if ((isset($_POST['amount_ripple_sub']))) {
	$amount_ripple = $_POST['amount_ripple'];
	$ripple_holdings = $xrp_price * $amount_ripple;
}
else if ((isset($_POST['amount_bitcoincash_sub']))) {
	$amount_bitcoincash = $_POST['amount_bitcoincash'];
	$bitcoincash_holdings = $bch_price * $amount_bitcoincash;
}
else if ((isset($_POST['amount_ethereum_sub']))) {
	$amount_ethereum = $_POST['amount_ethereum'];
	$ethereum_holdings = $eth_price * $amount_ethereum;	
}
else if ((isset($_POST['amount_dash_sub']))) {
	$amount_dash = $_POST['amount_dash'];
	$dash_holdings = $dash_price * $amount_dash;
}
else if ((isset($_POST['amount_zcash_sub']))) {
	$amount_zcash = $_POST['amount_zcash'];
	$zcash_holdings = $zec_price * $amount_zcash;
}
else if ((isset($_POST['amount_nxt_sub']))) {
	$amount_nxt = $_POST['amount_nxt'];
	$nxt_holdings = $xrp_price * $amount_nxt;
}

// Adding all of the currency holdings
$total_holdings = $bitcoin_holdings + $litecoin_holdings + $bitcoincash_holdings 
+ $ripple_holdings + $ethereum_holdings + $dash_holdings + $zcash_holdings + $nxt_holdings;

// Format the Holdings with thousand separators 
$total_holdings = number_format($total_holdings);
$bitcoin_holdings = number_format($bitcoin_holdings);
$litecoin_holdings = number_format($litecoin_holdings);
$ripple_holdings = number_format($ripple_holdings);
$bitcoincash_holdings = number_format($bitcoincash_holdings);
$ethereum_holdings = number_format($ethereum_holdings);
$dash_holdings = number_format($dash_holdings);
$zcash_holdings = number_format($zcash_holdings);
$nxt_holdings = number_format($nxt_holdings);

?>

<!doctype html>
<html>
<head>
	 <!-- <meta http-equiv="refresh" content="20"> -->
	<meta charset="UTF-8">
	<title>CryptoCurrency Tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>
	

<body style="font-family: Lato">
  <header>
	  
	<h1>CryptoCurrency Tracker</h1>
	 <div class="nav">
	  <ul>
	   <li><a class="tracker-button" href="http://localhost/cryptocurrency_tracker/index.php">Tracker</a></li>
	   <li><a class="active-page" href="http://localhost/cryptocurrency_tracker/portfolio.php">My Portfolio</a></li>
	   <li><a class="add-a-currency" href="http://localhost/cryptocurrency_tracker/add_currency.php"><i class="fas fa-plus"></i> Add a currency</a></li>
      </ul>
	 </div>
	
	</header>
	<div class="banner">
		<?php echo "<span style='font-size: 25px; font-family: Helvetica Neue; color: rgb(241,87,62); font-weight: 300; letter-spacing: 0.3px'>Total holdings =" . " " . "</span><span style='font-size: 27px;font-family: Helvetica Neue;font-weight: 300;letter-spacing: 0.4px; color: white'>" . "$"
	    . $total_holdings . "</span>"?></p>
	</div>
	
	
	<table class="cellpadding">
		
	<!-- Bitcoin -->	
	<tr class="row_border">
		<td><img src="logos/bitcoinlogo.jpg" alt="bitcoin logo" height="20px" width="auto"></td>
		<td><?php echo $amount_bitcoin . " " . "BTC" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $bitcoin_holdings . "</span>"?>
		</td>
	</tr>
	<!-- Litecoin -->
	<tr class="row_border">
		<td><img src="logos/litecoinlogo.jpg" alt="litecoin logo" height="25px" width="auto"></td>
		<td><?php echo $amount_litecoin . " " . "LTC" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $litecoin_holdings . "</span>"?>
		</td>
	</tr>
	<!-- Ripple -->	
	<tr class="row_border">
		<td><img src="logos/ripplelogo.jpg" alt="ripple logo" height="25px" width="auto"></td>
		<td><?php echo $amount_ripple . " " . "XRP" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $ripple_holdings . "</span>"?>
		</td>
	</tr>
	<!-- Bitcoincash -->	
	<tr class="row_border">
		<td><img src="logos/bitcoincashlogo.jpg" alt="bitcoincash logo" height="25px" width="auto"></td>
		<td><?php echo $amount_bitcoincash . " " . "BCH" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $bitcoincash_holdings . "</span>"?>
		</td>
	</tr>	
	<!-- Ethereum -->	
	<tr class="row_border">
		<td><img src="logos/ethereumlogo.jpg" alt="ethereum logo" height="35px" width="auto"></td>
		<td><?php echo $amount_ethereum . " " . "ETH" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $ethereum_holdings . "</span>"?>
		</td>
	</tr>
	<!-- Dash -->	
	<tr class="row_border">
		<td><img src="logos/dashlogo.jpg" alt="dash logo" height="20px" width="auto"></td>
		<td><?php echo $amount_dash . " " . "DASH" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $dash_holdings . "</span>"?>
		</td>
	</tr>	
	<!-- ZCash -->	
	<tr class="row_border">
		<td><img src="logos/zcashlogo.jpg" alt="zcash logo" height="30px" width="auto"></td>
		<td><?php echo $amount_zcash . " " . "ZEC" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $zcash_holdings . "</span>"?>
		</td>
	</tr>
	<!-- NXT coin -->	
	<tr>
		<td><img src="logos/nxtlogo.jpg" alt="nxt logo" height="35px" width="auto"></td>
		<td><?php echo $amount_nxt . " " . "NXT" . " " . "=" . " " . 
	    "<span style='font-size: 25px'>" . "$" . $nxt_holdings . "</span>"?>
		</td>
	</tr>
	
	</table>
	
	 
	
</body>
</html>