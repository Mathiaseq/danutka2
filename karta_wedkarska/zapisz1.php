<?php
    $link = mysqli_connect("localhost", "root", "", "wedkowanie");
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $zap1 = "INSERT INTO karty_wedkarskie (imie, nazwisko, adres) VALUES ('$imie', '$nazwisko', '$adres')";
    $wynik1=mysqli_query($link, $zap1);

    mysqli_close($link);
?>