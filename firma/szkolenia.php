<?php
$conn = mysqli_connect("localhost", "root", "", "firma");
?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
            <img src="baner.jpg" alt="Szkolenia">
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="szkolenia.php">Szkolenia</a></li>
            </ul>
        </nav>

        <main>
            <?php

            ?>
        </main>

        <footer>
            <h2>Firma szkoleniowa, ul. Główna 1, 23-456 Warszawa</h2>
            <p>Autor: 31703418903718</p>
        </footer>
    </body>
</html>



<?php
$mysqli_close($conn);
?>