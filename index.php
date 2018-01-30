<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mad libs</title>
	 	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<ul>
				<li><a href="#">Er heerst paniek...</a></li>
				<li><a href="#">Onkunde</a></li>
			</ul>
		</header>
		<main>
			<article>
				<form method="POST" action="onkunde.php">
					<h1>Er heerst paniek...</h1>
					<h2>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="vraag1"></h2>
					<h2>Wie is de belangrijkste persoon in je leven? <input type="text" name="vraag2"></h2>
					<h2>In welk land zou je willen wonen? <input type="text" name="vraag3"></h2>
					<h2>Wat doe je als je je verveelt? <input type="text" name="vraag4"></h2>
					<h2>Met welk speelgoed speelde je als kind het meest? <input type="text" name="vraag5"></h2>
					<h2>Bij welke docent spijbel je het liefst? <input type="text" name="vraag6"></h2>
					<h2>Als je $ 100.000,- had, wat zou je doen? <input type="text" name="vraag7"></h2>
					<h2>Wat is je favoriete bezigheid? <input type="text" name="vraag8"></h2>
					<button type="submit">Versturen</button>
				</form>
			</article>
		</main>
		<footer>
			<p>Gemaakt door Joey</p>
		</footer>
	</body>
</html>