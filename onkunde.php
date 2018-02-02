<?php
	if (!empty($_POST ['q1']) && !empty($_POST ['q2']) && !empty($_POST ['q3']) && !empty($_POST ['q4']) && !empty($_POST ['q5']) && !empty($_POST ['q6']) && !empty($_POST ['q7']) && !empty($_POST ['q8'])) {
		$q1 = $_POST ['q1'];
		$q2 = $_POST ['q2'];
		$q3 = $_POST ['q3'];
		$q4 = $_POST ['q4'];
		$q5 = $_POST ['q5'];
		$q6 = $_POST ['q6'];
		$q7 = $_POST ['q7'];
		$q8 = $_POST ['q8'];
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
			    	Er zijn veel mensen die niet kunnen ".$q1.". Neem nou ".$q2.". Zelfs met de hulp van een " .$q4."
				    of zelfs " .$q3." kan ".$q2." niet ".$q1. ". dat heeft niet te maken met een gebrek aan ".$q5." , maar met een 
				    te veel aan ".$q6.". Teveel ".$q6." leidt tot ".$q7." en dat is niet goed als je wilt " .$q1.".
				    Helaas voor ".$q2.".</article></main";
				}
			?>
		</main>
		<footer>
			<p>Gemaakt door Joey</p>
		</footer>
	</body>
</html>