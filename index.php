<!DOCTYPYE html>
<html>
	<head>
		<title>Cold-Ocean</title>
		<link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
		<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
	</head>
	<body>
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
		<span class="coffeestain"><img src="assets/img/coffeestain.png"></span>
		<p class="footer"><?php print "&copy; 2012-" . date('Y') . " Cold-Ocean Photography";?></p>
	</body>
</html>