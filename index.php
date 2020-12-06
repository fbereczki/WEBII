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
	<div class="lablec vkozep">&copy; Neumann János Egyetem GAMF Mûszaki és Informatikai Kar <?= date("Y") ?></div>

</body>
</html>

<?php

//alkalmazás gyökér könyvtára a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/beadando/');

//URL cím az alkalmazás gyökeréhez
define('SITE_ROOT', 'http://localhost/beadando/');

// a router.php vezérlõ betöltése
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>
