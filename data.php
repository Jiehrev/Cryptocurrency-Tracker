<?php 

$url = "https://poloniex.com/public?command=returnTicker"; // POLONIEX API URL

$usdtoaudUrl = "https://api.fixer.io/latest?base=USD"; //USD to AUD value

	
$getContent = file_get_contents($url);   // Gets the contents of the API in the form of JSON

$json = json_decode($getContent, true);  // Converts the JSON language to an associative array
	
$convContent = file_get_contents($usdtoaudUrl);  // Gets the contents of the API in the form of JSON

$jsonConv = json_decode($convContent, true);  // Converts the JSON language to an associative array
	
 


$usdtoaudConv = $jsonConv['rates']["AUD"];  // Gets the USD to AUD convertion rate


$btcPrice = $json['USDT_BTC']["last"];              // BTC data retreival block
$btcPrice = $btcPrice * $usdtoaudConv;
$btcPrice = round($btcPrice, 2);
$btc24Change = $json['USDT_BTC']["percentChange"];
$btc24Change = $btc24Change * 100;
$btc24Change = round($btc24Change, 2);


$ltcPrice = $json['USDT_LTC']["last"];              // LTC data retreival block
$ltcPrice = $ltcPrice * $usdtoaudConv;
$ltcPrice = round($ltcPrice, 2);
$ltc24Change = $json['USDT_LTC']["percentChange"];
$ltc24Change = $ltc24Change * 100;
$ltc24Change = round($ltc24Change, 2);


$xrpPrice = $json['USDT_XRP']["last"];              // XRP data retreival block
$xrpPrice = $xrpPrice * $usdtoaudConv;
$xrpPrice = round($xrpPrice, 2);
$xrp24Change = $json['USDT_XRP']["percentChange"];
$xrp24Change = $xrp24Change * 100;
$xrp24Change = round($xrp24Change, 2);


$bchPrice = $json['USDT_BCH']["last"];              // BCH data retreival block
$bchPrice = $bchPrice * $usdtoaudConv;
$bchPrice = round($bchPrice, 2);
$bch24Change = $json['USDT_BCH']["percentChange"];
$bch24Change = $bch24Change * 100;
$bch24Change = round($bch24Change, 2);


$ethPrice = $json['USDT_ETH']["last"];              // ETH data retreival block
$ethPrice = $ethPrice * $usdtoaudConv;
$ethPrice = round($ethPrice, 2);
$eth24Change = $json['USDT_ETH']["percentChange"];
$eth24Change = $eth24Change * 100;
$eth24Change = round($eth24Change, 2);

$dashPrice = $json['USDT_DASH']["last"];              // DASH data retreival block
$dashrice = $dashPrice * $usdtoaudConv;
$dashPrice = round($dashPrice, 2);
$dash24Change = $json['USDT_DASH']["percentChange"];
$dash24Change = $dash24Change * 100;
$dash24Change = round($dash24Change, 2);

$zcashPrice = $json['USDT_ZEC']["last"];              // ZEC data retreival block
$zcashrice = $zcashPrice * $usdtoaudConv;
$zcashPrice = round($zcashPrice, 2);
$zcash24Change = $json['USDT_ZEC']["percentChange"];
$zcash24Change = $zcash24Change * 100;
$zcash24Change = round($zcash24Change, 2);

$nxtPrice = $json['USDT_NXT']["last"];              // NXT data retreival block
$nxtrice = $nxtPrice * $usdtoaudConv;
$nxtPrice = round($nxtPrice, 2);
$nxt24Change = $json['USDT_NXT']["percentChange"];
$nxt24Change = $nxt24Change * 100;
$nxt24Change = round($nxt24Change, 2);






?>
