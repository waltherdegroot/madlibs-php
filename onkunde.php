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
			<h2>Onkunde</h2>
			<?php
				$ability=$_POST['ability'];
				$person=$_POST['person'];
				$number=$_POST['number'];
				$vacation=$_POST['vacation'];
				$b_skill=$_POST['b_skill'];
				$w_skill=$_POST['w_skill'];
				$happen=$_POST['happen'];

				echo '<p>Er zijn veel mensen die niet kunnen ' .$ability. '. Neem nou ' .$person. '. Zelfs met de hulp van een ' .$vacation. ' of zelfs ' .$number. ' kan ' .$person. ' niet ' .$ability. '. Dat heeft niet te maken met een gebrek aan ' .$b_skill. ', maar met een te veel aan ' .$w_skill. '. Te veel ' .$w_skill. ' leidt tot ' .$happen. ' en dat is niet goed als je wilt ' .$ability. '. Helaas voor ' .$person. '.</p>'
			?> 
		</div>
	</main>
	<footer>
		Created by Walther de Groot
	</footer>
</body>
</html>