<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wynajem pokoi</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        <header>
            <h1>Pensjonat pod dobrym humorem</h1>
        </header>

        <div id="lewy">
            <a href="index.html">GŁÓWNA</a>
            <img src="1.jpeg" alt="pokoje">
        </div>

        <div id="srodkowy">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                    // Skrypt
                    $conn = mysqli_connect("localhost","root","","wynajem");

                    $sql = "SELECT * FROM pokoje";
                    $result = mysqli_query($conn,$sql);
    
                    while($row = $result -> fetch_array()) {
                        echo "<tr>";
                            echo "<td>".$row[0]."</td>";
                            echo "<td>".$row[1]."</td>";
                            echo "<td>".$row[2]."</td>";
                        echo "</tr>";
                    }

                    mysqli_close($conn);
                ?>
            </table>
        </div>

        <div id="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpeg" alt="pokoje">
        </div>

        <footer>
            <p>Stronę opracował: <a href="https://ee-informatyk.pl/" target="_blank" style="color: #fff;text-decoration: none;font-size: 100%;padding: 0;">EE-Informatyk.pl</a></p>
        </footer>
    </body>
</html>