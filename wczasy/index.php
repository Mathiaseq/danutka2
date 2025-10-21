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
                <label>Miejsce wycieczki<br>
                <select>
                    <?php
                       $link=mysqli_connect("localhost","root","","wyprawy"); 
                    ?>
                </select>
            </label>
            <label>Ile dorosłych?<br><input type="number"><br>
            </label>
            <label>Ile dzieci?<br><input type="number"><br></label>
            <label>Termin<br><input type="date"><br></label>
            <button type="submit">Symulacja ceny</button>
            </form>
            <h4>Koszt wycieczki</h4>
            skrypt 2
        </aside>
        <section>
            <h3>Wycieczki</h3>
            skrypt 3
        </section>
    </main>
    <footer>
        <p>Autor: Matka Kuby</p>
    </footer>
</body>
</html>