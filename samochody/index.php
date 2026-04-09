<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Konfigurator samochodów</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
    <header>
        <h1>Serwis konfiguracji samochodów</h1>
    </header>
    <nav>
        <h2>Samochody</h2>
        <h2>Konfigurator</h2>
        <h2>Kontakt</h2>
    </nav>
    <main>
        <section id="left">
            <table>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "samochody");
            $zap3 = "SELECT pojazdy.marka, pojazdy.model, pojazdy.cena, kolory.nazwa, kolory.doplata FROM pojazdy JOIN kolory ON pojazdy.kolor = kolory.id LIMIT 15;";
            $wynik3 = mysqli_query($conn, $zap3);
            while ($wiersz = mysqli_fetch_array($wynik3)){
                $cena_calkowita=$wiersz[2] + $wiersz[4];
                echo"<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[3]</td><td>$cena_calkowita</td></tr>";    
            }
            ?>
            </table>
        </section>
        <section id="middle">
            <table>
                <tr>
                    <th colspan="2">Konfiguracja</th>
                    <th>Cena</th>
                </tr><tr>
                    <td colspan="3"><img src="a1.jpg" alt="Konfiguracja 1"></td>
                </tr>
                <?php
                $zap4 = "SELECT marka, model, cena FROM pojazdy ORDER BY RAND() LIMIT 2;";
                $wynik4 = mysqli_query($conn, $zap4);
                $wiersz4 = mysqli_fetch_array($wynik4);
                echo "<tr><td>Marka</td><td>$wiersz4[0]</td><td rowspan='2'>$wiersz4[2]</td></tr>";
                echo "<tr><td>Model</td><td>$wiersz4[1]</td></tr>";


                ?>
                <tr>
                    <td colspan="3"><img src="a2.jpg" alt="Konfiguracja 2"></td>
                </tr>
                <tr>
                <?php
                    $zap4 = "SELECT marka, model, cena FROM pojazdy ORDER BY RAND() LIMIT 2;";
                $wynik4 = mysqli_query($conn, $zap4);
                $vehicle1 = mysqli_fetch_array($wynik4);
                echo "<tr><td>Marka</td><td>$wiersz4[0]</td><td rowspan='2'>$wiersz4[2]</td></tr>";
                echo "<tr><td>Model</td><td>$wiersz4[1]</td></tr>";

                mysqli_close($conn);
                ?>
            </table>
        </section>
        <section id="right">
            <h3>111 222 444</h3>
            <img src="a3.png" alt="Samochód">
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: Chr1skyy</p>
    </footer>
</body>

</html>