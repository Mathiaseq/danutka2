<?php
    $conn = mysqli_connect("localhost","root","","hurtownia");
?>

<!DOCTYPE html>
<html lang="PL-pl">
    <head>
        <meta charset="UTF-8">
        <title>Opinie klientów</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <header>
            <h1>Hurtownia spożywcza</h1>
        </header>

        <main>
            <h2>Opinie naszych klientów</h2>
            <?php
               
            ?>
        </main>

        <footer id="stopka1">
            <h3>Współpracują z nami</h3>
            <a href="http://skle.pl/">Sklep 1</a>
        </footer>

        <footer id="stopka2">
            <h3>Nasi top klienci</h3>
            <ol>
                <?php
                   
                ?>
            </ol>
        </footer>

        <footer id="stopka3">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </footer>

        <footer id="stopka4">
            <p>Autor: 1738917893</p>
        </footer>
    </body>
</html>

<?php
    mysqli_close($conn);
?>