<!DOCTYPE html>
<html lang="PL-pl">
<head>
	<meta charset="UTF-8">
	<title>Kalendarz</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<header>
		<h1>Dni, miesiące, lata</h1>
	</header>
	<nav>
		<p>
		<?php
			$link=mysqli_connect("localhost","root","","kalendarz");
			$dzien_a=date("mm-dd");
			$dzien_t=['niedziela', 'poniedziałek', 'wtorek', 'środa', 'czwartek', 'piątek', 'sobota'];
			$zap2="SELECT imiona FROM imieniny WHERE data Like '$dzien_a';";
			$wynik2=mysqli_query($link,$zap1);
			while($row=mysqli_fetch_array($wynik2)){
				echo "Dzisiaj imieniny mają: ".$row['imiona']."<br>";
			}
			
		?>
		</p>
	</nav>
	<main>
		<section id="lewy">
			<table>
				<tr><th>Liczba dni</th><th>miesiąc</th></tr>
				<tr><td rowspan="7">31</td><td>Styczeń</td></tr>
				<tr><td>Marzec</td></tr>
				<tr><td>Maj</td></tr>
				<tr><td>Lipiec</td></tr>
				<tr><td>Sierpień</td></tr>
				<tr><td>Październik</td></tr>
				<tr><td>Grudzień</td></tr>
				<tr><td rowspan="4">30</td><td>Kwiecień</td></tr>
				<tr><td>Czerwiec</td></tr>
				<tr><td>Wrzesień</td></tr>
				<tr><td>Listopad</td></tr>
				<tr><td>28 lub 29</td><td>Luty</td></tr>
			</table>
		</section>
		<section id="srodek">
			<h2>Sprawdź, kto ma imieniny</h2>
			<form method="POST" action="kalendarz.php">
				<input type="date" min="2024-01-01" max="2024-12-31" placeholder="dd.mm.'2024'" required name="date"><br>
				<button type="submit" name="submit">wyślij
				</button>
			</form>
			<?php
				//skrypt2
			?>
		</section>
		<section id="prawy">
			<a href="https://pl.wikipedia.org/wiki/Kalendarz_Majów" target="_blank">
				<img src="kalendarz.gif" alt="Kalendarz majów"></a>
			<h2>Rodzaje kalendarzy</h2>
			<ol>
				<li>słoneczny
				<ul>
					<li>kalendarz Majów</li>
					<li>juliański</li>
					<li>gregoriański</li>
				</ul></li>
				<li>księżycowy
				<ul>
					<li>starogrecki</li>
					<li>babiloński</li>
				</ul></li>
			</ol>
		</section>
	</main>
	<footer>
		<p>Stroee opracował(a): 139081274971</p>
	</footer>
</body>
</html>