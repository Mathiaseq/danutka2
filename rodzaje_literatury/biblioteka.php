<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<header>
    <?php
        for ($powtorzenie = 0; $powtorzenie < 20; $powtorzenie++) {
            echo"<img src='obraz.png'>";

        }
    ?>
</header>
<section id="pierwszy">
    <h2>Liryka</h2>
    <form action="biblioteka.php" method="POST">
        <select></select>skrypt2
        <button type="submit">Rezerwuj</button>
    </form>
    skrypt3
</section>
<section id="drugi">
    <h2>Epika</h2>
    <form action="biblioteka.php" method="POST">
        <select></select>skrypt2
        <button type="submit">Rezerwuj</button>
    </form>
</section>
<section id="trzeci">
     <h2>Dramat</h2>
    <form action="biblioteka.php" method="POST">
        <select></select>skrypt2
        <button type="submit">Rezerwuj</button>
    </form>
</section>
<section id="czwarty">
    <h2>Zaległe książki</h2>
    <ul>
        skrypt4
    </ul>
</section>
<footer>
    <p><strong>Autor: 213769420</strong></p>
</footer>
</body>
</html>