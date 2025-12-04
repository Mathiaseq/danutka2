<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Komis aut</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
        <h1><em>KupAuto!</em>Internetowy Komis Samochodowy</h1>
    </header>
    <main id="pierwszy">
        <?php
            $link = mysqli_connect("localhost","root","","kupauto");
            $zap2="SELECT model, rodznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE od=10;";
            $wynik2=mysqli_query($link,$zap2);
            if($wynik2){
    while($row = mysqli_fetch_array($wynik2)){
        echo "<div class='offer'>";
        echo "<img src='".$row['zdjecie']."' alt='oferta dnia'>";
        echo "<h4>Oferta Dnia: ".ucfirst($row['model'])."</h4>";
        echo "<p>Rocznik: ".$row['rodznik'].", przebieg: ".$row['przebieg'].", rodzaj paliwa: ".$row['paliwo']."</p>";
        echo "<h4>Cena: ".$row['cena']."</h4>";
        echo "</div>";
    }
}else{
    echo "Błąd zapytania do bazy danych.";
}
?>
    </main>
    <main id="drugi">
        <h2>Oferty Wyróżnione</h2>
        <!--skrypt 2-->
    </main>
    <main id="trzeci">
        <h2>Wybierz markę</h2>
        <form action="KupAuto.php" method="POST">
            <select name="marka" id="marka">
                <!--skrypt 3-->
            </select>
            <input type="submit" value="szukaj">
<!--Albo button type="submit"wyszukaj jak nie zadziała or sm shit-->
        </form>
        </main>
    <footer>
        <p>Stronę wykonał: 739018329180</p>
        <p><a href="https://firmy.pl/komis"></a>Znajdź nas także</p>
    </footer>
</body>
</html>