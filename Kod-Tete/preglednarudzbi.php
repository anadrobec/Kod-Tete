<!DOCTYPE html>
<html>
<head>
	<title>Pregled narudžbi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include("navigacija.php");?>
<div id="main">
	<h1>Vaše prethodne narudžbe</h1>
	<hr>
	<br><br>

	<table border="1" id="tablica">
		<tr>
			<th>Ime</th>
			<th>Adresa</th>
			<th>Telefon</th>
			<th>Odabir</th>
		</tr>

		<?php

			$datoteka = fopen("Narudzbe.txt", "r");

			if($datoteka);

			{

				fgets($datoteka);
				while(!feof($datoteka))
				{
					$ime = fgets($datoteka);
					$adresa = fgets($datoteka);
					$telefon = fgets($datoteka);
					$odabir = fgets($datoteka);

					echo "<tr>";
					echo "<td>$ime</td>";
					echo "<td>$adresa</td>";
					echo "<td>$telefon</td>";
					echo "<td>$odabir</td>";
					echo "</tr>";
				}

				fclose($datoteka);

			}

			?>
		
	</table>
</div>
</body>
</html>