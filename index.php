<!DOCTYPYE html>
<html>
	<head>
		<title>Cold-Ocean Photography</title>
		<meta name="description" content="South-West Tenessee general photography and portraiture." />
		<meta name="keywords" content="photography, Memphis, tipton county, Shelby County, potraits, senior pictures">
		<link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
		<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<span class="coffeestain"><img src="assets/img/coffeestain2.png" height="280" width="280"></span>
	    <?php include 'include/menu.php'; ?>
		<div class="main">
			<?php
			    error_reporting(E_ALL ^ E_NOTICE);
				$l = $_GET["l"];
				if ($l != '' or '')
					include 'include/'.$l.'.php';
				else
					include 'include/main.php';
			?>
		</div>

		<p class="footer"><?php print "&copy; 2012-" . date('Y') . " Cold-Ocean Photography";?></p>
	</body>
</html>