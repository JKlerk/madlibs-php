<?php
	if (!empty($_POST ['vraag1']) && !empty($_POST ['vraag2']) && !empty($_POST ['vraag3']) && !empty($_POST ['vraag4']) && !empty($_POST ['vraag5']) && !empty($_POST ['vraag6']) && !empty($_POST ['vraag7']) && !empty($_POST ['vraag8'])) {
		$vraag1 = $_POST ['vraag1'];
		$vraag2 = $_POST ['vraag2'];
		$vraag3 = $_POST ['vraag3'];
		$vraag4 = $_POST ['vraag4'];
		$vraag5 = $_POST ['vraag5'];
		$vraag6 = $_POST ['vraag6'];
		$vraag7 = $_POST ['vraag7'];
		$vraag8 = $_POST ['vraag8'];
	} else{
		$empty = true;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Okundephp</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
				<ul>
					<li><a href='index.php'>Er heerst paniek...</a></li>
					<li><a href='#'>Onkunde</a></li>
				</ul>
		</header>
			<?php
				if ($empty){
					echo "<div id='error'><h3>Alle velden moeten ingevuld worden!</h3></div>";
				}else {
			    	echo "<main><article><h1>Onkunde</h1>
			    	Er zijn veel mensen die niet kunnen " . $vraag1 . ". Neem nou " . $vraag2 . ". Zelfs met de hulp van een " . $vraag4 . "
				    of zelfs " . $vraag3 . " kan " . $vraag2 . " niet " . $vraag1 . ". dat heeft niet te maken met een gebrek aan " . $vraag5 . " , maar met een 
				    te veel aan " . $vraag6 . ". Teveel " . $vraag6 . " leidt tot " . $vraag7 . " en dat is niet goed als je wilt " . $vraag1 . ".
				    Helaas voor " . $vraag2 . ".</article></main";}
			?>
		</main>
		<footer>
			<p>Gemaakt door Joey</p>
		</footer>
	</body>
</html>