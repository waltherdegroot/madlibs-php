<?php
	$velden = ["animal","person","country","bored","toys","skipping","money","favorite"];
	foreach($velden as $veld){
		if(isset($_POST[$veld])){
			$$veld=$_POST[$veld];
		}
		else{
			header("Location: ./index.html");
		}
	}
?>
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
			<p>Er heerst paniek in het koninkrijk <?= $country ?>. Koning <?= $skipping ?> is ten einde raad en als koning <?= $skipping ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $person ?>.</p>
			<p>"<?=$person ?>! Het is een ramp! Het is een Schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?=$animal ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$toys ?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?=$animal ?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da&apos;s leuk en aardig, maar hoe moet ik in de tussentijd <?=$favorite ?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?=$money ?> voor gebruiken."</p>
			<p>"<?=$person ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?=$bored ?>, Sire."</p>
		</div>
	</main>
	<footer>
		Created by Walther de Groot
	</footer>
</body>
</html>