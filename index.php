<!DOCTYPE html>
<html>
<head>
	<title>Have you ever heard about CSS grid ?</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="grid-wrapper">
	<h1>Get to know CSS GRID</h1>
	<h2>Welcome to 2017! Now you can use native css functionality to create responsive grid desgin and don't have to use frameworks. Let's have a look at it.</h2>
	<p>"<b>Poznámka:</b> Dizajn je navrhnutý s použitím štandardne používaného 12 stĺpcového layoutu. Odporúča sa
preto použiť CSS Framework, ktorý pracuje s dizajnom rozdeleným na 12 stĺpcov (alebo podobný).
V zadaní sa môžu uvádzať šírky v percentách a v počte stĺpcov napr. 25% = 3/12 (element bude zaberať 3
stĺpce z 12 stĺpcového layoutu)." - <a href="zadanie.pdf" target="_blank">Zenit 2017 webdeveloper (page 7)</a></p>
	<h3>All major browsers support it...</h3>
	<iframe class="can-i-use" src="https://caniuse.com/#feat=css-grid" frameborder="0"></iframe>
	<h3 class="use-it">It's easy to use...</h3>
	<?php
		$hardcoded_array = ['x7tLPhnA06w', 'd-MHl_Q_hp8', 'MDQG6LSS8l8', 'J5GWyiWU2H8', '211A79O_jX8', 'X2-x-4wA9V4', 'WmwGpjg580o', 'WZOZUCHo1OM', 'tPosqmwIx0w'];
		for ($i=0; $i < 9; $i++) { 
			echo '<iframe src="https://www.youtube.com/embed/' . $hardcoded_array[$i] . '" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>';
		}	
	?>
	<h3 class="copyright">© Marek Vigaš 2017</h3>
	<!--
	I know Comic Sans is shit
	but is good enough for memes...
	 -->
</body>
</html>
