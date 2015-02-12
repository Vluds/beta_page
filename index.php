<?php

define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']), true);

// Get site url.
$siteProtocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),"https") === FALSE ? "http" : "https";
$siteHost = $_SERVER['HTTP_HOST'];
$siteUrl = $siteProtocol."://".$siteHost;
define('URL', $siteUrl, true);

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

		<!-- Social -->
		<meta name="apple-mobile-web-app-title" content="Vluds - Create, Share, Discover.">

		<!-- Open Graph data -->
		<meta property="og:locale" content="FR" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Vluds - Create, Share, Discover." />
		<meta property="og:description" content="Réseau social pour les personnes créatives. Venez découvrir des créations, rencontrez des personnes, discutez avec elles et partagez !" />
		<meta property="og:url" content="<?php echo URL; ?>" />
		<meta property="og:site_name" content="vluds" />
		<meta property="og:image" content="<?php echo URL; ?>preview.jpg" />

		<!-- Facebook spec -->
		<meta property="article:publisher" content="<?php echo FACEBOOK; ?>" />

		<!-- Twitter data -->
		<meta property="twitter:card" content="summary_large_image" />
		<meta property="twitter:site" content="@vluds_" />
		<meta property="twitter:domain" content="vluds" />
		<meta property="twitter:creator" content="@vluds_" />
		<meta property="twitter:image" content="<?php echo URL; ?>preview.jpg" />
		<meta property="twitter:title" content="Vluds - Create, Share, Discover." />
		<meta property="twitter:description" content="Réseau social pour les personnes créatives. Venez découvrir des créations, rencontrez des personnes, discutez avec elles et partagez !" />
		<meta property="twitter:url" content="<?php echo URL; ?>" />

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-57154908-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div id="content_top">
			<div id="logo"></div>
			<p>
				Découvrez Vluds_blue la nouvelle version de vluds.eu<br/><br/>
				'Made with our little hands for you ♥'
			</p>
		</div>
		<div id="content_bottom">
			<div id="cover_container">
			</div>
			<a href="http://beta.vluds.eu/">DECOUVRIR</a>
		</div>
	</body>
</html>