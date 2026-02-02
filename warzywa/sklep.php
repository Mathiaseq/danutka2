<!DOCTYPE HTML>
<html lang="PL-pl">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styl2.css" type="text/css">
	<title>Warzywniak</title>
</head>
<body>
	<header id="lewy">
		<h1>Internetowy Sklep z Eko-warzywami</h1>
	</header>
	<header id="prawy">
		<ol>
			<li>warzywa</li>
			<li>owoce</li>
			<li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
		</ol>
	</header>
	<main>
		<?php
			$link = mysqli_connect("localhost", "root", "", "dane2");
			$zap1 = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1, 2);";
			$odp1 = mysqli_query($link, $zap1);
			while ($blok = mysqli_fetch_array($odp1)) {
				echo "<div class='produkt'>";
				echo "<img src='$blok[4]' alt='warzywniak'>";
				echo "<h5>$blok[0]</h5>";
				echo "<p>opis: $blok[2]</p>";
				echo "<p>na stanie: $blok[1]</p>";
				echo "<h2>$blok[3] zł</h2></div>";
			}
		?>
	</main>
	<footer>
		<form action="sklep.php" method="POST">
			Nazwa: <input type="text" name="nazwa">
			Cena: <input type="text" name="cena">
			<button type="submit">Dodaj Produkt</button>
		</form>
		<?php
			if ($_POST['nazwa'] != NULL and $_POST['cena'] != NULL){
				$nazwa = $_POST['nazwa']??NULL;
				$cena = $_POST['cena']??NULL;
				$zap4 = "INSERT INTO produkty(Rodzaje_id, Producenci_id, nazwa, ilosc, opis, cena, zdjecie) VALUES (1, 4, '$nazwa', 10,'', '$cena', 'owoce.jpg');";
				mysqli_query($link, $zap4);
			}
			mysqli_close($link);
		?>
		Stronę wykonał: 00000000000
	</footer>
</body>
</html>