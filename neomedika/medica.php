<!DOCTYPE html>
<html lang="PL-pl">
<head>
	<meta charset="UTF-8">
	<title>Przychodnia Medica</title>
	<link rel="icon" type="image/png" href="obraz2.png">
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<header>
		<h1>Abonamenty w przychodni Medica</h1>
	</header>
	<article>
		<?php
			$link=mysqli_connect('localhost','root','','medica');
			$zap1="SELECT nazwa, cena, opis FROM abonamenty";
			$wynik1=mysqli_query($link, $zap1);
			while($wiersz=mysqli_fetch_array($wynik1)){
				echo"<h3>Pakiet $wiersz[0] - cena $wiersz[1] zł</h3>";
				echo"<p>$wiersz[2]</p>";
			}
		?>
		<a href="opis.html">Dowiedz się więcej</a>
	</article>
	<main>
		<section id="pierwsza">
			<h2>Standardowy</h2>
			<ul>
				<?php
					$zap3="SELECT a.nazwa, c.cecha FROM abonamenty a, szczegolyabonamentu s, cechy c WHERE a.id=s.abonamenty_id AND c.id=s.Cechy_id AND a.id=1";
					$wynik3=mysqli_query($link, $zap3);
					while($element=mysqli_fetch_array($wynik3)){
						echo"<li>$element[1]</li>";
					}
				?>
			</ul>
		</section>
		<section id="druga">
			<h2>Premium</h2>
			<ul>
				<?php
					$zap3a="SELECT a.nazwa, c.cecha FROM abonamenty a, szczegolyabonamentu s, cechy c WHERE a.id=s.abonamenty_id AND c.id=s.Cechy_id AND a.id=2";
					$wynik3a=mysqli_query($link, $zap3a);
					while($elementa=mysqli_fetch_array($wynik3a)){
						echo"<li>$elementa[1]</li>";
					}
				?>
			</ul>
		</section>
		<section id="trzecia">
			<h2>Dziecko</h2>
			<ul>
				<?php
					$zap3b="SELECT a.nazwa, c.cecha FROM abonamenty a, szczegolyabonamentu s, cechy c WHERE a.id=s.abonamenty_id AND c.id=s.Cechy_id AND a.id=3";
					$wynik3b=mysqli_query($link, $zap3b);
					while($elementb=mysqli_fetch_array($wynik3b)){
						echo"<li>$elementb[1]</li>";
					}
					mysqli_close($link);
				?>
			</ul>
		</section>
	</main>
	<footer>
		<p><img src="obraz2.png"alt="Przychodnia"> Stronę przygotował: 23</p>
	</footer>
</body>
</html>