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
                $zap1="SELECT informacja, wart_min, wart_max FROM bmi";
                $wynik1=mysqli_query($conn, $zap1);
                while($wiersz=mysqli_fetch_array($wynik1)){
                    echo "<tr><td>$wiersz[0]</td><td>$wiersz[1]</td><td>$wiersz[2]</td></tr>";
                }
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
               if(!empty($_POST["waga"]) && !empty($_POST["wzrost"])) {
	                    $waga = $_POST["waga"]??NULL;
	                    $wzrost = $_POST["wzrost"]??NULL;
	
	                    echo "Twoja waga: $waga; Twój wzrost: $wzrost<br>";
	                    $bmi = 10000 * ($waga / ($wzrost * $wzrost));
	                    echo "Bmi wynosi: $bmi";
	
	                    if ($bmi < 18) {
	                        $bmi_id = 1;
	                    }
                        elseif ($bmi >= 19 && $bmi <= 25) {
	                        $bmi_id = 2;
	                    }
	                    elseif ($bmi >= 26 && $bmi <= 30) {
	                        $bmi_id = 3;
	                    }
	                    elseif ($bmi > 30) {
	                        $bmi_id = 4;
	                    }
	
	                    $data_pomiaru = date("Y-m-d");
	
	                    $zap2 = "INSERT INTO wynik (bmi_id, data_pomiaru, wynik) VALUES ($bmi_id, '$data_pomiaru', $bmi);";
	                    $$wynik2 = mysqli_query($conn, $zap2);
               }
               mysqli_close($conn);

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