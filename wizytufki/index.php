<!DOCTYPE html>
<html lang="PL-pl">
<head>
<meta charset="utf-8">
<title>Wizytówki</title>
<link rel="stylesheet" type="text/css" href="styl4.css">
</head>
<body>
<header>
<h1>Wizytówki pracownicze</h1>
<form action="index.php" method="POST">
<input type="number" min="1" max="9" value="1" name="nr">
<button type="submit" name="submit">WYŚWIETL</button>
</form>
</header>
<section id="wizytowka">
<?php
$link=mysqli_connect("localhost","root","","firma2");
$liczba=isset($_POST['nr'])?(int)$_POST['nr']:1;

$zap1="SELECT `id`, `imie`, `nazwisko`, `adres`, `miasto` FROM `pracownicy` WHERE id='$liczba'";
$wynik1=mysqli_query($link,$zap1);
while($dane1=mysqli_fetch_array($wynik1)){
echo"<img src='$dane1[0].jpg' alt='pracownik'><h2>$dane1[1] $dane1[2]</h2><h4>Adres:</h4><p>$dane1[3], $dane1[4]</p>";	

}
?>
</section>
<footer id="lewa">
<img src="obraz.jpg" alt="pracownicy firmy">
</footer>
<footer id="srodkowa">
<p>Autorem wizytownika jest:000000000000000000</p>
<a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
</footer>
<footer id="prawa">
<p>Osoby proszone o podpisanie dokumentu RODO:</p>
<ol>
<?php
$zap2="SELECT `imie`, `nazwisko` FROM `pracownicy` WHERE czyRODO=0;";
$wynik2=mysqli_query($link,$zap2);
while($dane2=mysqli_fetch_array($wynik2)){
	echo"<li>$dane2[0] $dane2[1]</li>";
}
mysqli_close($link);
?>
</ol> 
</footer>
</body>
</html>