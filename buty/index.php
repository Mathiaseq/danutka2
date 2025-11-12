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
                $conn = mysqli_connect("localhost", "root", "", "buty");
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
        skrypt2
    </main>
    <footer>
        <p>Autor strony: 41897412978</p>
    </footer>
</body>
</html>