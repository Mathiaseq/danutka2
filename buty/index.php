<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="Stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1>Obuwie męskie</h1>
    </header>
    <main>
        <form action="zamow.php" method="POST">
            <label>Model:<select name="model" class="kontrolki">
                <?php 
                $conn = mysqli_connect("localhost", "root", "", "obuwie");
                $zap1="SELECT model FROM produkt;";
                $wynik1=mysqli_query($conn, $zap1);
                while($opcja=mysqli_fetch_array($wynik1)){
                    echo "<option>$opcja[0]</option>";
                }
                ?>
            </select></label>
            <label>Rozmiar:<select>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
            </select></label>
            <label>Liczba par:<input type="number" name="pary" class="kontrolki"></label>
            <button type="submit" name="submit">Zamów</button>
        </form>
        <?php 
        $zap2="SELECT b.model, b.nazwa, b.cena, p.nazwa_pliku FROM buty b, produkt p WHERE b.model = p.model;";
        $wynik2=mysqli_query($conn, $zap2);
        while($blok=mysqli_fetch_array($wynik2)){
            echo"<div class='buty'>";
            echo "<img src='$blok[3]' alt='but męski'>";
            echo "<h2>$blok[1]</h2>";
            echo "<h5>Model: $blok[0]</h5>";
            echo "<h4>Cena: $blok[2]</h4>";       
        }
        mysqli_close($conn);
        
        ?>
    </main>
    <footer>
        <p>Autor strony: 41897412978</p>
    </footer>
</body>
</html>