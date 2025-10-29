<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>szkolenia i kursy</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section id="lewy">
            <table>
                <tr><th>Kurs</th><th>Nazwa</th><th>Cena</th></tr>
                <?php
                    //skrypt1
                ?>
            </table>
        </section>
        <section id="prawy">
            <h2>Zapisy na kursy</h2>
            <form method="POST" action="index.php">
                <label for="imie">Imie:<br>
                <input type="text" name="imie"></label><br>
                <label for="nazwisko">Nazwisko:<br>
                <input type="text" name="nazwisko"></label><br>
                <label for="wiek">Wiek:<br>
                <input type="number" name="wiek"></label><br>
                <label for="kurs">Rodzaj kursu:<br>
                <select name="rodzaj_kursu" name="rodzaj_kursu"></select>
                <?php
                    //skrypt2
                ?>
                </select></label>
                <button type="submit" name="dodaj_dane">Dodaj dane</button>
            </form>
            <?php
                //skrypt3
            ?>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>