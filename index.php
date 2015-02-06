<?php

define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), true);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Miscellaneous -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="none" />
		
		<title>Vluds - Découvrez Vluds</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
		<link href="style.css" rel="stylesheet" type='text/css'>

		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<body>
		<div>
			<div id="logo"></div>
			<p>
				Découvrez Vluds_blue la nouvelle version de vluds.eu<br/><br/>
				'Made with our little hands for you ♥'
			</p>
		</div>
		<div>
			<img src="<?php echo WEBROOT; ?>preview.png" alt="preview" />
			<a href="http://beta.vluds.eu/">DECOUVRIR</a>
		</div>
	</body>
</html>