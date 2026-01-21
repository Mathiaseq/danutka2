<!DOCTYPE html>
<html lang="PL=pl">
<head>
    <meta charset="UTF-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
    <header id="lewy">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </header>
    <header id="prawy">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">Soki</a></li>
        </ol>
    </header>
    <main>
        <?php
        $link=mysqli_connect("localhost","root","","dane2");
        $zap1 = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1, 2);";       
        $odp1 = mysqli_query($link, $zap1);
        while($blok = mysqli_fetch_array($odp1)){
            echo "<div class='produkt'>";
            echo "<img src='$blok[1]' alt='warzywniak'>";
            echo "<h5>$blok[0]</h5>";
            echo "<p>opis: $blok[2]</p>";
            echo "<p>na stanie: $blok[1]</p>";
            echo "<h2>$blok[3] zł</h2></div>";
        }
        ?>
    </main>
    <footer>
        <form action="sklep.php" method="post">
           Nazwa: <input type="text" name="nazwa">
           Cena: <input type="text" name="cena">
           <button type="submit">Dodaj Produkt</button>
        </form>
            <?php
                if ($_POST['nazwa'] != NULL and $_POST['cena'] != NULL) {
                    $nazwa = $_POST['nazwa']??NULL;
                    $cena = $_POST['cena']??NULL;
                    $zap4 = "Zapytanie 1: 'SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id IN (1, 2)';";
                    mysqli_query($link, $zap4);
                }
    


                mysqli_close($link);
            ?> 
        </footer>
</body>
</html>