<!DOCTYPE html>
<html lang="PL=pl">
<head>
    <meta charset="UTF-8">
    <title>Warzywniak</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
    <header id="lewy">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </header>
    <header id="prawy">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">Soki</a></li>
        </ol>
    </header>
    <main>
        <?php
        ?>
    </main>
    <footer>
        <form action="sklep.php" method="post">
           Nazwa: <input type="text" name="nazwa">
           Cena: <input type="text" name="cena">
           <button type="submit">Dodaj Produkt</button>
        </form>
            <?php
        
            ?> 
        </footer>
</body>
</html>