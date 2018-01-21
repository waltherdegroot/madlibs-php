<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./main_php.css">
</head>
<body>
	<header>
		<h1>Mad Libs</h1>
		<div id="menu">
			<nav>
				<ul>
					<li><a href="./index.html">Er heerst paniek...</a></li>
					<li><a href="./onkunde.html">Onkunde</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<div id="verhaal">
			<h2>Er heerst paniek...</h2>
			<?php
			$animal=$_POST['animal'];
			$person=$_POST['person'];
			$country=$_POST['country'];
			$bored=$_POST['bored'];
			$toys=$_POST['toys'];
			$skipping=$_POST['skipping'];
			$money=$_POST['money'];
			$favorite=$_POST['favorite'];

			echo '<p>Er heerst paniek in het koninkrijk ' . $country . '. Koning ' . $skipping . ' is ten einde raad en als koning ' . $skipping . ' ten einde raad is, dan roept hij zijn ten-einde-raadsheer ' . $person . '.</p>';
			echo '<p>"' . $person . '! Het is een ramp! Het is een Schande!"';
			echo '<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>'; 
			echo '<p>"Mijn ' . $animal . ' is verdwenen! Zo maar, zonder waarschuwing. En ik had net ' . $toys . ' voor hem gekocht!"</p>';
			echo '<p>"Majesteit, uw ' . $animal . ' komt vast vanzelf weer terug?"</p>';
			echo '<p>"Ja, da&apos;s leuk en aardig, maar hoe moet ik in de tussentijd ' . $favorite . ' leren?"</p>';
			echo '<p>"Maar Sire, daar kunt u toch uw ' . $money . ' voor gebruiken."</p>';
			echo '<p>"' . $person . ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>';
			echo '<p>"' . $bored . ', Sire."</p>'
			?>
		</div>
	</main>
	<footer>
		Created by Walther de Groot
	</footer>
</body>
</html>