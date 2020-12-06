<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>GAMF beadando</title>
	<link rel="icon" type="image/png" href="pics/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body class="background formazas">
	<div class="fullscreen-bg mobilonne">
		<video loop muted autoplay poster "pics/background.jpg" class="fullscreen-bg__video">
			<source src="mov/background.mp4" type "mov/video/mp4">
		</video>
	</div>
	
	</div>
	<div class="lablec vkozep">&copy; Neumann J�nos Egyetem GAMF M�szaki �s Informatikai Kar <?= date("Y") ?></div>

</body>
</html>

<?php

//alkalmaz�s gy�k�r k�nyvt�ra a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/beadando/');

//URL c�m az alkalmaz�s gy�ker�hez
define('SITE_ROOT', 'http://localhost/beadando/');

// a router.php vez�rl� bet�lt�se
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>
