<?php
    if(isset($_POST['submit'])){
        echo "Dodano rezerwację do bazy";
        $link = mysqli_connect("localhost", "root", "", "rezerwacja");
        $data = $_POST['data']??NULL;
        $ilosc = $_POST['osoby']??NULL;
        $telefon = $_POST['telefon']??NULL;
        $zap = "INSERT INTO `rezerwacje` ( `data_rez`, `liczba_osob`, `telefon`) VALUES ('$data', '$ilosc', '$telefon');";
        $wynik1 = mysqli_query($link, $zap);
    }
    mysqli_close($link);
?>