<!DOCTYPE html>
<html>
<head>
	<title>Vaša narudžba</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include("navigacija.php");?>
<div id="main">
	<h1>Hvala što ste nas odabrali!:)</h1>
	<hr>
	<br><br>

<?php

	$ime = $_POST['ime'];
	$adresa = $_POST['adresa'];
	$telefon = $_POST['telefon'];
	$odabir = $_POST['odabir'];
	$ime = $_POST['ime'];

	echo "Ime: $ime<br>";
	echo "Adresa: $adresa<br>";
	echo "Telefon: $telefon<br>";
	echo "Odabir: $odabir<br>";

	$datoteka = fopen("Narudzbe.txt", "a");

	fwrite($datoteka, "\n$ime\n$adresa\n$telefon\n$odabir");

	fclose($datoteka);

	?>
</div>

</body>
</html>