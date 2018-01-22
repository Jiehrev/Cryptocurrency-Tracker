<?php 
include "url.php";
require_once "functions.php";
	
$usdtoaudConv = getData($usdtoaudUrl);  // Gets the USD to AUD convertion rate
$usdtoaudConv = $json['rates']["AUD"];

                                   
$btcPrice = getData($url);
$btcPrice = $json['USDT_BTC']["last"];              // BTC data retreival block
$btcPrice = $btcPrice * $usdtoaudConv;
$btcPrice = round($btcPrice, 2);
$btc24Change = getData($url);
$btc24Change = $json['USDT_BTC']["percentChange"];
$btc24Change = $btc24Change * 100;
$btc24Change = round($btc24Change, 2);

$ltcPrice = getData($url);
$ltcPrice = $json['USDT_LTC']["last"];              // LTC data retreival block
$ltcPrice = $ltcPrice * $usdtoaudConv;
$ltcPrice = round($ltcPrice, 2);
$ltc24Change = getData($url);
$ltc24Change = $json['USDT_LTC']["percentChange"];
$ltc24Change = $ltc24Change * 100;
$ltc24Change = round($ltc24Change, 2);

$xrpPrice = getData($url);
$xrpPrice = $json['USDT_XRP']["last"];              // XRP data retreival block
$xrpPrice = $xrpPrice * $usdtoaudConv;
$xrpPrice = round($xrpPrice, 2);
$xrp24Change = getData($url);
$xrp24Change = $json['USDT_XRP']["percentChange"];
$xrp24Change = $xrp24Change * 100;
$xrp24Change = round($xrp24Change, 2);

$bchPrice = getData($url);
$bchPrice = $json['USDT_BCH']["last"];              // BCH data retreival block
$bchPrice = $bchPrice * $usdtoaudConv;
$bchPrice = round($bchPrice, 2);
$bch24Change = getData($url);
$bch24Change = $json['USDT_BCH']["percentChange"];
$bch24Change = $bch24Change * 100;
$bch24Change = round($bch24Change, 2);

$ethPrice = getData($url);
$ethPrice = $json['USDT_ETH']["last"];              // ETH data retreival block
$ethPrice = $ethPrice * $usdtoaudConv;
$ethPrice = round($ethPrice, 2);
$eth24Change = getData($url);
$eth24Change = $json['USDT_ETH']["percentChange"];
$eth24Change = $eth24Change * 100;
$eth24Change = round($eth24Change, 2);




?>
