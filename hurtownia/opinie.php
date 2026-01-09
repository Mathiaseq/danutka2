<?php
    $conn = mysqli_connect("localhost","root","","hurtownia");
?>

<!DOCTYPE html>
<html lang="pl">
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

        <div id="stopka1">
            <h3>Współpracują z nami</h3>
            <a href="http://skle.pl/">Sklep 1</a>
        </div>

        <div id="stopka2">
            <h3>Nasi top klienci</h3>
            <ol>
                <?php
                   
                ?>
            </ol>
        </div>

        <div id="stopka3">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </div>

        <div id="stopka4">
            <h3>Autor: <a href="https://ee-informatyk.pl/" target="_blank" style="color: unset;text-decoration: none;">EE-Informatyk.pl</a></h3>
        </div>
    </body>
</html>

<?php
    mysqli_close($conn);
?>