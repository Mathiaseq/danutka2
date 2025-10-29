<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>szkolenia i kursy</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section id="lewy">
            <table>
                <tr><th>Kurs</th><th>Nazwa</th><th>Cena</th></tr>
                <?php
                    $link=mysqli_connect('localhost','root','','szkolenia');
                    $zap1="SELECT `kod`, `nazwa`, `cena` FROM `kursy` ORDER BY cena ASC;";
                    $wynik1=mysqli_query($link,$zap1);
                    while($wiersz=mysqli_fetch_array($wynik1)){
                        echo "<tr><td><img src='$wiersz[0].jpg' alt='kurs'></td><td>$wiersz[1]</td><td>$wiersz[2]</td></tr>";
                    }
                ?>
            </table>
        </section>
        <section id="prawy">
            <h2>Zapisy na kursy</h2>
            <form method="POST" action="index.php">
                <label>Imie:<br><input type="text" name="imie"></label><br>
                <label>Nazwisko:<br><input type="text" name="nazwisko"></label><br>
                <label>Wiek:<br><input type="number" name="wiek"></label><br>
                <label>Rodzaj kursu:<br><select name="rodzaj_kursu">
                <?php
                    $zap2="SELECT `nazwa` FROM `kursy`;";
                    $wynik2=mysqli_query($link,$zap2);
                    while($opcja=mysqli_fetch_array($wynik2)){
                        echo "<option>$opcja[0]</option>";
                    }
                ?>
                </select></label><br>
                <button type="submit" name="dodaj_dane">Dodaj dane</button>
            </form>
            <?php
                $imie = $_POST["imie"]??NULL;
                $nazwisko = $_POST["nazwisko"]??NULL;
                $wiek = $_POST["wiek"]??NULL;
                $rodzaj_kursu = $_POST["rodzaj_kursu"]??NULL;
                $dodaj_dane = $_POST["dodaj_dane"];
                    if(isset($dodaj_dane)){
                        if(!empty($imie) and !empty($nazwisko) and !empty($wiek)){
                            $zap3="INSERT INTO `uczestnicy`(`imie`, `nazwisko`, `wiek`) VALUES ('$imie','$nazwisko',$wiek);";
                        }
                    }
            mysqli_close($link);
            ?>
        </section>
    </main>
    <footer>
            <p>Stronę wykonał: 38109481084</p>
    </footer>
</body>
</html>