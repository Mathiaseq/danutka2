<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Mieszalnia farb</title>
        <link rel="shortcut icon" href="fav.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <img src="baner.png" alt="Mieszalnia farb">
        </header>

        <form action="index.php" method="post">
            <label for="dataod">Data odbioru od: </label>
            <input type="date" name="dataod" id="dataod">
            <label for="datado">Data odbioru do: </label>
            <input type="date" name="datado" id="datado">
            <button type="submit" name="wyszukaj" id="wyszukaj">Wyszukaj</button>
        </form>

        <main>
            <table>
                <tr>
                    <th>Nr zamówienia</th>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Kolor</th>
                    <th>Pojemność [ml]</th>
                    <th>Data odbioru</th>
                </tr>
                <?php
                //    $conn = mysqli_connect("localhost", "root", "", "mieszalnia");

                //     if(isset($_POST['wyszukaj'])) {
                //         $dataod = $_POST['dataod']??null;
                //         $datado = $_POST['datado']??null;
                //         $sql = "SELECT nazwisko, imie, zamowienia.id, kod_koloru, pojemnosc, data_odbioru FROM klienci JOIN zamowienia ON klienci.id = id_klienta WHERE data_odbioru >= '$dataod' AND data_odbioru <= '$datado' ORDER BY data_odbioru;";
                //         $result = mysqli_query($conn, $sql);
                //         while ($row = mysqli_fetch_assoc($result)) {
                //             echo "<tr>";
                //             echo "<td>" . $row["id"] . "</td>";
                //             echo "<td>" . $row["nazwisko"] . "</td>";
                //             echo "<td>" . $row["imie"] . "</td>";
                //             echo "<td style='background-color: #".$row["kod_koloru"].";'>" . $row["kod_koloru"] . "</td>";
                //             echo "<td>" . $row["pojemnosc"] . "</td>";
                //             echo "<td>" . $row["data_odbioru"] . "</td>";
                //             echo "</tr>";
                //         }
                //     }
                //     else {
                //         $sql = "SELECT nazwisko, imie, zamowienia.id, kod_koloru, pojemnosc, data_odbioru FROM klienci JOIN zamowienia ON klienci.id = id_klienta ORDER BY data_odbioru;";
                //         $result = mysqli_query($conn, $sql);
                //         while ($row = mysqli_fetch_assoc($result)) {
                //             echo "<tr>";
                //             echo "<td>" . $row["id"] . "</td>";
                //             echo "<td>" . $row["nazwisko"] . "</td>";
                //             echo "<td>" . $row["imie"] . "</td>";
                //             echo "<td style='background-color: #".$row["kod_koloru"].";'>" . $row["kod_koloru"] . "</td>";
                //             echo "<td>" . $row["pojemnosc"] . "</td>";
                //             echo "<td>" . $row["data_odbioru"] . "</td>";
                //             echo "</tr>";
                //         }
                //     }

                
                    $link=mysqli_connect("localhost", "root", "", "mieszalnia");
                    $dataod = $_POST['dataod']??null;
                    $datado = $_POST['datado']??null;
                    if(isset($_POST['submit']));
                    if($dataod!=NULL && $datado!=NULL){
                        $zap3="SELECT k.nazwisko, k.imie, z.id, z.kod_koloru, z.pojemnosc, z.data_odbioru FROM klienci k, zamowienia z WHERE z.id_klienta = k.Id ORDER BY z.data_dbioru ASC;";
                        $wynik=mysqli_query($link, $zap3);
                    }
                    while(($wiersz=mysqli_fetch_array($wynik))!= NULL){
                        echo "<tr><td>$wiersz[2]</td><td>$wiersz[0]</td><td>$wiersz[1]</td><td style='background-color:#".$wiersz[3]."'>$wiersz[3]</td>
                        <td>$wiersz[4]</td><td>$wiersz[5]</td></tr>";
                    }

                    

                    mysqli_close($link);
                    ?>
            </table>
        </main>

        <footer>
            <h3>Egzamin INF.03</h3>
            <p>Autor: <p>29198328936781</p>
        </footer>
    </body>
</html>