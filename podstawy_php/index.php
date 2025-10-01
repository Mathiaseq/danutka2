<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <title>Podstawy Języka PHP</title>
</head>
<body>
    <h1>Podstawy PHP</h1>
    <p>Rozpoczynanie i zakończenie poleceń PHP odbywa się za pomocą znaczników: </p>
    <ul>
        <li>Znak otwierajacy - znak mniejszości&lt;?php</li>
        <li>Znak zamykający - ?znak wiekszości - ?></li>
    </ul>
    <h1>Komentarze</h1>
    Występujące trzy rodaje komentarzy:
    <ul>
        <li>Komentarze blokowe - zaczyna sie od znaku /* i kończy sie */</li>
        <li>Komentarze jednowierszowe - zaczyna się od znaków // i kończy w bieżącej linii</li>
        <li>Lp,emtarze jednowierszowe uniksowy - zaczyna sie od znaku # i ciagnie sie do końca linii</li>
    </ul>
    <h1>Zmienne</h1>
    <p>Przed nazwą zmiennej należy umieścić znak $. Warunki jakie muszą być spełnione przy nazwie:</p>
    <ul>
        <li>musi zaczynać się od litery lub znaku podrkeślenia</li>
        <li>może składać sie jedynie z liter, cyfr i znaków podrkęslenia</li>
        <li>w nazwach rozróżnianie sa duże i małe litery</li>
        <li>w nazwach można stosować polskie litery</li>
    </ul>
    <h3>Przy odwołaniu się do zmiennej zawsze należy użyć znaku $</h3>
    <h1>Zmienne predefiniowane</h1>
    <ul>
        <li>$_GET[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody GET</li>
        <li>$_POST[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody POST</li>
        <li>$_COOKIE[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody cookies()</li>
    </ul>
</body>
</html>

<?php
echo "<h2>Mój pierwszy skrypt PHP</h2>";
$x = 60;
$y = 7;
echo $x + $y;
$zmienna1=374;
$zmienna7=26;
$ilosc=$zmienna1+$zmienna7;
echo "<h3>Wynik wartości $zmienna1 i $zmienna7 to $ilosc</h3>";
echo "<h3>W języku PHP napisz skrypt, który będzie obliczał sumę, różnicę, iloraz, iloczyn i resztę dzielenia dwóch dowolnych liczb.</h3>";
$a = 89;
$b = 56;
$suma = $a+ $b;
$roznica = $a - $b;
$iloczyn = $a*$b;
$iloraz = $a/$b;
$reszta = $a%$b;
echo "<h3>Suma wynosi: $suma<br> różnica wynosi: $roznica<br> iloczyn wynosi: $iloczyn<br> iloraz wynosi: $iloraz<br> reszta z dzielenia wynosi: $reszta</h3>";

?>
<h1>Zmienne predefiniowane</h1>
<ul>
    <li>$_GET[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody GET</li>
    <li>$_POST[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody POST</li>
    <li>$_COOKIE[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą cookies()</li>
    <li>$_FILES[] - jest to tablica zawierająca zmienne przesyłane do skryptu podczas przesyłania plików na serwer</li>
    <li>$_SERVER[] - jest to tablica zawierająca zmienne przesyłane do skryptu przez serwer WWW. Są to dane takie jak wersja serwera, ścieżka do pliku, adres skryptu, qysłane nagłówki.</li>
    <li>$_ENV[] - jest to tablica zawierająca wartość zmennych środowiskowych serwera</li>
    <li>$_REQUEST[] - jest to tablica zawierająca zmienne przesyłane do skryptu przez użytkownika. Obejmuje dane z $_GET, $_POST, oraz $_COOKIE</li>
    <li>$_SESSION[] - jest to tablica zawierająca zmienne zarejestrowane w bieżącej sesji.</li>
    <li>$_GLOBAL[] - jest to tablica zawierająca odniesienie do kazdej zmiennej utworzonej przez użytkownika, który ma zasięg globalny dla danego skryptu.</li>
</ul>