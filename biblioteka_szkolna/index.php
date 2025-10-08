<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>BIBLIOTEKA SZKOLNA</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="skrypt.js"></script>
</head>
<body>
    <header>
        <h2>STRONA BIBLIOTEKI SZKOLNEJ WIEDZAMIN</h2>
    </header>
    <section>
        <h3>Nasze dzisiejsze propozycje</h3>
        <table>
            <tr><th>Autor</th><th>Tytuł</th><th>Katalog</th></tr>
            <?php
            $link=mysqli_connect("localhost","root","","biblioteka");
            $zap4= "SELECT autor, tytul, kod FROM ksiazki ORDER BY RAND() LIMIT 5";
            $wynik = mysqli_query($link, $zap4);
            while ($wiersz = mysqli_fetch_array($wynik)){
                echo "<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td></tr>";
            }
            mysqli_close($link);
            ?>
        </table>
    </section>
     <main>
    <article id="lewy">
      <img src="ksiazka1.jpg" alt="okładka książki">
      <p>Według różnych podań najpaskudniejsza ropucha nosi w głowie piękny, cenny klejnot.</p>
    </article>
    <article id="srodkowy">
      <img src="ksiazka2.jpg" alt="okładka książki">
      <p>Panna Stefcia i Maryla nie są to zbyt grzeczne damy, nawet nie słuchają mamy...</p>
    </article>
    <article id="prawy">
      <img src="ksiazka3.jpg" alt="okładka książki">
      <p>Ratuj mnie, przyjacielu, w ostatniej potrzebie: Kocham piękną Irenę. Rodzice i ona...</p>
    </article>
  </main>
    <footer>Stronę wykonał: 138971984719</footer>
</body>
</html>