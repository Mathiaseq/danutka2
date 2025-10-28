<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Remonty</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
        <h1>Malowanie i gipsowanie</h1>
    </header>
    <main>
        <nav>
            <a href="kontakt.html">Kontakt</a>
            <a href="https://remonty.pl" target="_blank">Partnerzy</a>
        </nav>
        <aside>
            <img src="tapeta_lewa.png" alt="usługi"><br>
            <img src="tapeta_prawa.png" alt="usługi"><br>
            <img src="tapeta_lewa.png" alt="usługi">
        </aside>
        <section id="lewa">
            <h2>Dla klientów</h2>
                <form action="zlecenia.php" method="post">
                    Ilu co najmniej pracowników potrzebujesz<br>
                    <input type="number" name="liczPracownik">
                    <button name="submit">Szukaj firm</button>
                </form>
        <?php
            $link=mysqli_connect('localhost','root','','remonty');
            $liczPracownik=$_POST['liczPracownik']??NULL;
            if(isset($liczPracownik)){
                $zap2="SELECT `nazwa_firmy`, `liczba_pracownikow` FROM `wykonawcy` WHERE liczba_pracownikow>=40;";
                $wynik2=mysqli_query($link,$zap2);
                while($wiersz=mysqli_fetch_array($wynik2)){
                    echo"<p>$wiersz[0], $wiersz[1]</p>";
                }
            }
        ?>
        </section>
        <section id="srodkowa">
            <h2>Dla wykonawców</h2>
                <form action="zlecenia.php" method="post">
                   <select name="miasto">
                        <?php
                            $zap3="SELECT DISTINCT miasto FROM klienci ORDER BY miasto ASC;";
                            $wynik3=mysqli_query($link,$zap3);
                            while($opcja=mysqli_fetch_array($wynik3)){
                                echo"<option value='$opcja[0]'>$opcja[0]</option>";
                            }
                        ?>
                   </select><br>
                   <input type="radio" checked name="wybor" value="malowanie">Malowanie<br>
                   <input type="radio" name="wybor" value="gipsowanie">Gipsowanie<br>
                   <button name="submit">Szukaj klientów</button>
                </form>
                <ul>
                    <?php
                        $miasto = $_POST['miasto']??NULL;
                        $wybor = $_POST['wybor']??NULL;
                        if(isset($miasto) and isset($wybor)){
                            $zap4 = "SELECT k.imie, z.cena FROM klienci k, zlecenia z WHERE z.id_klienta=k.id_klienta AND k.miasto='$miasto' AND z.rodzaj='$wybor';";
                            $wynik4 = mysqli_query($link,$zap4);
                            while($element = mysqli_fetch_array($wynik4)){
                                echo"<li>$element[0] - $element[1]</li>";
                            }
                        }
                    mysqli_close($link);
                    ?>
                </ul>
            </section>
        </main>
    <footer>
        <p>Stronę wykonał: <strong>Twoja nazwa</strong></p>
    </footer>
</body>
</html>