<!DOCTYPE html>
<html lang="PL-pl">
<head>
	<meta charset="UTF-8">
	<title>Komis Aut</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<header>
		<h1><i>KupAuto!</i> Internetowy Komis Samochodowy</h1>
	</header>
	<div id="lewy">
		<?php
			$link=mysqli_connect('localhost','root','','kupauto');
			$zap2="SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id=10";
			$wynik2=mysqli_query($link, $zap2);
			$yaris=mysqli_fetch_array($wynik2);
			echo "<img src='$yaris[5]' alt='oferta dnia'>";
			echo "<h4>Oferta Dnia: Toyota $yaris[0].</h4>";
			echo "<p>Rocznik: $yaris[1], przebieg: $yaris[2], rodzaj paliwa: $yaris[3].";
			echo "<h4>Cena: $yaris[4]";
		?>
	</div>
	<div id="srodek">
		<h2>Oferty Wyróżnione</h2>
		<?php
			$zap3="SELECT m.nazwa, s.model, s.rocznik, s.cena, s.zdjecie FROM samochody s INNER JOIN marki m ON m.id=s.marki_id WHERE wyrozniony=1 LIMIT 4";
			$wynik3=mysqli_query($link, $zap3);
			while($wyrozniam=mysqli_fetch_array($wynik3)){
				echo "<div class='oferta'>";
				echo "<img src='$wyrozniam[4]' alt='$wyrozniam[1]'>";
				echo "<h4>$wyrozniam[0] $wyrozniam[1]</h4>";
				echo "<p>Rocznik: $wyrozniam[2]</p>";
				echo "<h4>Cena: $wyrozniam[3]</h4></div>";
			}
		?>
	</div>
	<div id="prawy">
		<h2>Wybierz markę</h2>
		<form action="kupAuto.php" method="POST">
			<select name="marka">
			<?php
				$zap1="SELECT nazwa FROM marki";
				$wynik1=mysqli_query($link, $zap1);
				while($opcja=mysqli_fetch_array($wynik1)){
					echo "<option value='$opcja[0]'>$opcja[0]</option>";
				}
			?>
			</select>
			<button type="submit" name="submit">Wyszukaj</button>
		</form>
		<?php
			if(isset($_POST['submit'])){
				$marka=$_POST['marka']??NULL;
				if(!empty($marka)){
					$zap4="SELECT s.model, s.cena, s.zdjecie FROM samochody s, marki m WHERE m.id=s.marki_id AND m.nazwa='$marka'";
					$wynik4=mysqli_query($link, $zap4);
					while($wybor=mysqli_fetch_array($wynik4)){
						echo "<div class='oferta'>";
						echo "<img src='$wybor[2]' alt='$wybor[0]'>";
						echo "<h4>$marka $wybor[0]</h4>";
						echo "<h4>Cena: $wybor[1]</h4></div>";
					}
				}
			}
			mysqli_close($link);
		?>
	</div>
	<footer>
		<p>Stronę wykonał: 2375629326987</p>
		<p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
	</footer>
</body>
</html>
