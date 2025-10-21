<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Biuro turystyczne</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="wczasy.html">Wczasy</a></li>
            <li><a href="wycieczki.html">Wycieczki</a></li>
            <li><a href="allinclusive.html">All inclusive</a></li>
        </ul>
    </nav>
    <main>
        <aside>
            <h3>Twój cel wyprawy</h3>
            <form action="index.php" method="POST">
                <label for="miejsce">Miejsce wycieczki</label>
                    <select name="miejsce" id="miejsce">
                    <?php
                       $link=mysqli_connect("localhost","root","","wyprawy"); 
                       $zap1="SELECT nazwa FROM miejsca ORDER BY nazwa ASC";
                       $wynik1=mysqli_query($link,$zap1);
                       while($lista=mysqli_fetch_array($wynik1)){
                        echo "<option value='$lista[0]'>$lista[0]</option>";
                       }
                    ?>
                </select>
            </label>
            <label>Ile dorosłych?<br><input type="number" name="ileDoroslych"><br></label>
            <label>Ile dzieci?<br><input type="number" name="ileDzieci"><br></label>
            <label>Termin<br><input type="date" name="termin"><br></label>
            <button type="submit" name="submit">Symulacja ceny</button>
            </form>
            <h4>Koszt wycieczki</h4>
            <?php
                if(isset($_POST["submit"])){
                    $ileDoroslych = $_POST["ileDoroslych"]??NULL;
                    $ileDzieci = $_POST["ileDzieci"]??NULL;
                    $termin = $_POST["termin"]??NULL;
                    $miejsce = $_POST["miejsce"]??NULL;
                    if(isset($miejsce)){
                        $zap2="SELECT cena FROM miejsca WHERE nazwa = '$miejsce';";
                        $wynik2=mysqli_query($link,$zap2);
                        $row=mysqli_fetch_array($wynik2);
                        $cena=$row[0]*($ileDoroslych+($ileDzieci/2));
                        
                        echo "<p>$cena zł</p>";
                    }
                }
            ?>
        </aside>
        <section>
            <h3>Wycieczki</h3>
            <?php
                $zap3="SELECT nazwa, cena, link_obraz FROM miejsca WHERE link_obraz LIKE '0%';";
                $wynik3=mysqli_query($link,$zap3);
                while ($wiersz=mysqli_fetch_array($wynik3)){
                    echo"<div class='wycieczka'>";
                    echo"<img src='$wiersz[1]' alt='Zdjecie z wycieczki'>";
                    echo"<h2>$wiersz[0]</h2>";
                    echo"<p>$wiersz[2]</p></div>";
                }
                mysqli_close($link);
            ?>
        </section>
    </main>
    <footer>
        <p>Autor: Matka Kuby</p>
    </footer>
</body>
</html>