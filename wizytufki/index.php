<?php
    $conn = mysqli_connect("localhost","root","","firma1");
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wizytówki</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <header>
            <h1>Wizytówki pracowników</h1>
            <form action="index.php" method="post">
                <input type="number" name="wizytowka" id="wizytowka" min="1" max="9" value="1" required>
                <button type="submit" name="wyswietl">WYŚWIETL</button>
            </form>
        </header>

        <main>
            <?php
                if(isset($_POST["wyswietl"]) && isset($_POST["wizytowka"])) {
                    $wizytowka = $_POST["wizytowka"];

                    $sql = "SELECT id, imie, nazwisko, adres, miasto FROM pracownicy WHERE id = $wizytowka;";
                    $result = $conn->query($sql);
    
                    while($row = $result -> fetch_array()) {
                        echo "<img src='".$row["id"].".jpg' alt='pracownik'>";
                        echo "<h2>".$row["imie"]." ".$row["nazwisko"]."</h2>";
                        echo "<h4>Adres:</h4>";
                        echo "<p>".$row["adres"].", ".$row["miasto"]."</p>";
                    }
                }
                else {
                    echo "<h2>Wybierz wizytówkę</h2>";
                }
            ?>
        </main>

        <div id="footer1">
            <img src="obraz.jpg" alt="pracownicy firmy">
        </div>

        <div id="footer2">
            <p>Autorem wizytówek jest pusia z netherytu</p>
            <a href="http://agencjareklamowa543.pl/" target="_blank">Zobacz nasze realizacje</a>
        </div>

        <div id="footer3">
            <p>Osoby proszone o podpisanie dokumentu RODO:</p>
            <ol>
            <?php
                $sql = "SELECT imie, nazwisko FROM pracownicy WHERE czyRODO = 0;";
                $result = $conn->query($sql);

                while($row = $result -> fetch_array()) {
                    echo "<li>".$row["imie"]." ".$row["nazwisko"]."</li>";
                }
            ?>
            </ol>
        </div>
    </body>
</html>

<?php
    mysqli_close($conn);
?>