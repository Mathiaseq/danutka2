<!DOCTYPE html>
<html lang="PL-pl">
<head>
<meta charset="UTF-8">
<title>Odloty samolotów</title>
<link rel="Stylesheet" type="text/css" href="styl6.css">
</head>
<body>
<header id="pierwszy">
<h2>Odloty z lotniska</h2>
</header>
<header id="drugi">
<img src="zad6.png" alt="logotyp">
</header>
<main>
<h4>tabela odlotów</h4>
<table>
	<tr><th>lp.</th><th>numer rejsu</th><th>czas</th><th>kierunek</th><th>status</th></tr>
	<?php
		$link=mysqli_connect('localhost','root','','egzamin');
		$zap1="SELECT id,nr_rejsu,czas,kierunek,status_lotu FROM odloty ORDER BY czas DESC";
		$wynik1=mysqli_query($link, $zap1);
		while($komorka=mysqli_fetch_array($wynik1)){
			echo "<tr><td>$komorka[0]</td><td>$komorka[1]</td><td>$komorka[2]</td><td>$komorka[3]</td><td>$komorka[4]</td></tr>";
		}
		mysqli_close($link);
	?>
</table>
</main>
<footer id="lewy">
<a href="kw1.jpg" target="_blank">Pobierz obraz</a>
</footer>
<footer id="srodkowy">
<?php
	if(!isset($_COOKIE['odloty'])){
		setcookie('odloty',1,time()+3600,);
		echo "<p><em>Dzień dobry! Sprawdź regulamin naszej strony</em></p>";
	}else{
		echo "<p><strong>Miło nam, że nas znowu nas odwiedziłeś</strong></p>";
	}
?>
</footer>
<footer id="prawy">
Autor: 123123123
</footer>
</body>
</html>