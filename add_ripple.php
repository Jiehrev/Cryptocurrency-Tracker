<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title>CryptoCurrency Tracker</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>

<body>
	
	<body style="font-family: Lato">
	<header>
	  
	<h1>CryptoCurrency Tracker</h1>
	 <div class="nav">
	  <ul>
	   <li><a class="tracker-button" href="http://localhost/cryptocurrency_tracker/index.php">Tracker</a></li>
	   <li><a class="portfolio-button" href="http://localhost/cryptocurrency_tracker/portfolio.php">My Portfolio</a></li>
	   <li><a class="active-page" href="http://localhost/cryptocurrency_tracker/add_currency.php"><i class="fas fa-plus"></i> Add a currency</a></li>
      </ul>
	 </div>
	
	</header>
	<div class="banner">
		<h3>Exchange: Poloniex / Trading pair: XRP/AUD</h3>
	</div>
	<div class="holding_form">
		<h4>Add Ripple to your portfolio</h4>
		
		<form action="portfolio.php" method="post">
			Ripple holdings:&nbsp; <input type="number" step="any" min="0" name="amount_ripple"><br><br>
			<input type="submit" value="Add" name="amount_ripple_sub">
		</form>
		
	</div>
	
	
</body>
</html>