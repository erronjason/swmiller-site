<!DOCTYPYE html>
<html>
	<head>
		<title>Cold-Ocean</title>
		<link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="main">
			<?php include 'include/menu.php'; ?>
			<?php
				$l = $_GET["l"];
				if ($l != '')
					include 'include/'.$l.'.php';
				else
					include 'include/main.php';
			?>
		</div>
		<p class="footer"><?php print "&copy; 2012-" . date('Y') . "Cold-Ocean Photography";?></p>
	</body>
</html>