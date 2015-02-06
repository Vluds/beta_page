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
		
		<title>mxcmaxime ≡ Something is changing here !</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
		<link href="style.css" rel="stylesheet" type='text/css'>

		<!-- Analytics -->
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-36957101-1', 'auto');
				ga('send', 'pageview');
			</script>
	</head>
	<body>
		<div>
			<img class="logo" src="<?php echo WEBROOT; ?>vluds.png" alt="logo" />
			<p>Découvrez Vluds_blue la nouvelle version de vluds.eu</p>
		</div>
		<div>
			<img src="<?php echo WEBROOT; ?>preview.png" alt="preview" />
			<a href="http://beta.vluds.eu/">DECOUVRIR</a>
		</div>
	</body>
</html>