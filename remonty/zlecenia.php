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
            <img src="tapeta_lewa.png" alt="usługi">
            <img src="tapeta_prawa.png" alt="usługi">
            <img src="tapeta_lewa.png" alt="usługi">
        </aside>
        <section>
            <h2>Dla klientów</h2>
            <form action="skrypt1.php" method="post">
                <label for="ilosc_pracownikow">Ilu co najmniej pracowników potrzebujesz?</label>
                <input type="number" id="ilosc_pracownikow" name="ilosc_pracownikow">
                <input type="submit" value="Szukaj firm">
            </form>
            <!-- Efekt działania skryptu 1 -->
        </section>
        <section>
            <h2>Dla wykonawców</h2>
            <form action="skrypt3.php" method="post">
                <select name="rodzaj_uslugi" onchange="this.form.pole_opcji.style.display = 'none'; this.form.pole_opcji.value='';">
                    <option value="malowanie">malowanie</option>
                    <option value="gipsowanie">gipsowanie</option>
                </select>
                <input type="hidden" id="pole_opcji" name="pole_opcji">
                <script>
                    document.getElementById("pole_opcji").style.display = 'none';
                </script>
                <script src="skrypt2.js"></script>
                <input type="submit" value="Szukaj klientów">
                <datalist id="lista_klientow">
                    <!-- Lista wypełniana przez skrypt 3 -->
                </datalist>
            </form>
            </section>
            <footer>
            <p>Stronę wykonał: <strong>Twoja nazwa</strong></p>
            </footer>
        
    </main>
</body>
</html>