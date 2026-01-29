<?php
$conn = mysqli_connect('localhost', 'root', '', 'bmi');
?>
<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">  
    <title>Twoje BMI</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
    <section id="logo">
        <img src="wzor.png" alt="wzór BMI">
    </section>
    <header id="baner">
        <h1>Oblicz swoje BMI</h1>
    </header>    
    <main>
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php
                #skrypt1
            ?>
        </table>
    </main>
    <section id="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form action="bmi.php" method="POST">
            <label for="waga">Waga: </label> <input type="number" id="waga" min="1"><br>
            <label for="wzrost">Wzrost w cm: </label> <input type="number" id="wzrost" min="1"><br>
            <button type="submit"> Oblicz i zapamiętaj wynik</button>   
        </form>
        <?php
            #skrypt2
        ?>
    </section>
    <section id="prawy">
        <img src="rys1.png" alt="ćwiczenia">
    </section>
    <footer>
        Autor: <a href="kwerendy.txt">Zobacz kwerendy</a>1937820138

    </footer>
</body>
</html>