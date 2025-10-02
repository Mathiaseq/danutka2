<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
    <h1>Ranking gier komputerowych</h1>
    </header>
    <section id="lewy">
    <h3>Top 5 gier w tym miesiącu</h3>
    <ul>
        <?php
        $link = mysqli_connect("localhost", "root", "", "gry");
        $zap3='SELECT `nazwa`, `punkty`, FROM `gry` ORDER BY `punkty` DESC LIMIT 5';
        $wynik3=mysqli_query($link,$zap3) or die(mysqli_error($link));
        while($element=mysqli_fetch_array($wynik3))
        {
            echo "<li>".$wiersz3['nazwa']." - ".$wiersz3['punkty']."</li>";
        }
        ?>
    </ul>
        <h3>Nasz sklep</h3>
        <a href="http://sklep.gry.pl">Tu kupisz gry</a>
        <h3>Stronę wykonał: 
            <p>389173189378891</p>
        </h3>
    </section>
    <section id="srodkowy">
    skrypt2
    </section>
    <section id="prawy">
    <h3>Dodaj nową grę</h3>
    <form action="gry.php" method="POST">
    nazwa<br><input type="text" name="nazwa"><br>
    opis<br><input type="text" name="opis"><br>
    punkty<br><input type="text" name="punkty"><br>
    cena<br><input type="text" name="cena"><br>
    zdjecie<br><input type="text" name="zdjecie"><br>
    <button onclick="dodaj()">DODAJ PLS </button>
    </form>
    </section>  
    <footer>
    <form action="gry.php" method="POST">
    <input type="number"><button type="submit">Pokaż opis</button>
    skrypt3
    </form>
    </footer>
</body>
</html>
