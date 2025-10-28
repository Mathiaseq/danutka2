<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Remonty</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
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
            <img src="tapeta_prawa.png" alt="uslugi">
            <img src="tapeta_lewa.png" alt="uslugi">
        </aside>
        <section id="lewy">
            <h2>Dla klientów</h2>
            <form action="skrypt1.php" method="post">
                <label for="ilosc_pracownikow">Ilu co najmniej pracowników potrzebujesz?</label>
                <input type="number" id="ilosc_pracownikow" name="ilosc_pracownikow">
                <input type="submit" value="Szukaj firm">
            </form>
            skrypt1
        </section>
        <section id="srodkowy">
            <h2>Dla wykonawców</h2>
            <form action="zlecenia.php" method="post">
                <input type="radio" value="checked" name="wybor">malowanie<br>
                <input type="radio" name="wybor">gipsowanie
            </form>
    </main>
</body>
</html>