<!DOCTYPE html>
<html>
<head>
	<title>Narucite</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php include("navigacija.php");?>
	<div id="container">
	<div id="main">
	<h1>Dobrodošli! Unesite svoju narudžbu</h1>
	<hr>
	<br><br>
	<form method="post" action="Narudzba.php">

		<p>Ime:</p>
		<input type="text" name="ime"><br><br>

		<p>Adresa:</p>
		<input type="text" name="adresa">
		<br><br>

		<p>Telefon:</p>
		<input type="text" name="telefon">
		<br><br>

		<p>Odabir:</p>
		<select name="odabir">
			<option>Pileći bečki</option>
			<option>Šunka sir</option>
			<option>Sir</option>
			<option>Slanci</option>
			<option>Lisnato sa sirom</option>
			<option>Lisnato s višnjom</option>
		</select>
		<br><br>

		<input type="submit" name="Pošalji">
		<input type="reset" name="Poništi">

	</form>
</div>
</div>

</body>
</html>