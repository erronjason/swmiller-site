<!DOCTYPYE html>
<html>
	<head>
		<title>Cold-Ocean</title>
		<link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
	</head>
	<body>
	    <?php include 'include/menu.php'; ?>
		<div class="main">
			<?php
			    error_reporting(E_ALL ^ E_NOTICE);
			    $l = '';
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