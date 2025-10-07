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
$zap3='SELECT `nazwa`, `punkty` FROM `gry` ORDER BY `punkty` DESC LIMIT 5';
$wynik3=mysqli_query($link,$zap3);
while($element=mysqli_fetch_array($wynik3))
{
    echo "<li>".$element['nazwa']."<span id='punkty'>".$element['punkty']."</span></li>";
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
    <?php
    $zap1='SELECT id, nazwa, zdjecie FROM gry';
    $wynik1=mysqli_query($link,$zap1);
    while($blok=mysqli_fetch_array($wynik1)){
        echo'<div class="gry">';
        echo"<img src='$blok[2]' alt='$blok[1]' title='$blok[0]'>";
    }
    ?>
    </section>
    <section id="prawy">
    <h3>Dodaj nową grę</h3>
    <form action="gry.php" method="POST">
    nazwa<br><input type="text" name="nazwa"><br>
    opis<br><input type="text" name="opis"><br>
    cena<br><input type="text" name="cena"><br>
    zdjecie<br><input type="text" name="zdjecie"><br>
    <button onclick="dodaj()">DODAJ PLS </button>
    </form>
    </section>  
    <footer>
    <form action="gry.php" method="POST">
    <input type="number" name="id"><button type="submit">Pokaż opis</button>
    <?php
    $id=$_POST['id']??NULL;
    if(isset($id)) {
        $zap2="SELECT nazwa, substring(opis, 1, 100) AS opisNowy, punkty, cena FROM gry WHERE id='$id'";
        $wynik2=mysqli_query($link,$zap2);
        $row=mysqli_fetch_array($wynik2);
        echo"<h2>$row[0], $row[2] punktów, $row[3] zł</h2>";
        echo "<p>$row[1]</p>";
    }
    ?>
    </form>
    </footer>
    <?php
    $nazwa=$_POST['nazwa']??NULL;
    $opis=$_POST['opis']??NULL;
    $cena=$_POST['cena']??NULL;
    $zdjecie=$_POST['zdjecie']??NULL;
    if(isset($nazwa)) {
        $zap4="INSERT INTO gry(nazwa, opis, cena, zdjecie) VALUES('$nazwa', '$opis',0,'$cena', '$zdjecie')";
        $wynik4=mysqli_query($link,$zap4);
    }
    mysqli_close($link);
    ?>
</body>
</html>
