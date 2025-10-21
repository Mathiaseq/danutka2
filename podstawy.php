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
    <li>$_GET[OUT] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody GET</li>
    <li>$_POST[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody POST</li>
    <li>$_COOKIE[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą cookies()</li>
    <li>$_FILES[] - jest to tablica zawierająca zmienne przesyłane do skryptu podczas przesyłania plików na serwer</li>
    <li>$_SERVER[] - jest to tablica zawierająca zmienne przesyłane do skryptu przez serwer WWW. Są to dane takie jak wersja serwera, ścieżka do pliku, adres skryptu, qysłane nagłówki.</li>
    <li>$_ENV[] - jest to tablica zawierająca wartość zmennych środowiskowych serwera</li>
    <li>$_REQUEST[] - jest to tablica zawierająca zmienne przesyłane do skryptu przez użytkownika. Obejmuje dane z $_GET, $_POST, oraz $_COOKIE</li>
    <li>$_SESSION[] - jest to tablica zawierająca zmienne zarejestrowane w bieżącej sesji.</li>
    <li>$_GLOBAL[] - jest to tablica zawierająca odniesienie do kazdej zmiennej utworzonej przez użytkownika, który ma zasięg globalny dla danego skryptu.</li>
</ul>

<h1>Typy danych</h1>
<h3>Wystepujące w PHP typy danych można podzielić na trzy rodzaje:</h3>
<ol>
    <li>Typy skalarne, czyli typy proste. Należą do nich:
        <ul>
            <li>typ boolean, Jest to typ logiczny. Przyjmujący jedną z dwóch wartośći: prawda fałsz</li>
            <li>typ integer, Jest to typ całkowitych. Może służyć do przestawiania dodatnich lub ujemnych liczb całkowitych.<br> Przykłady zapisu liczb całkowitych w różnych formach:</li>
            <ol>
                <li>537 - dodatnia liczba całkowita</li>
                <li>-451 - ujemna liczba całkowita</li>
                <li> 032 - dodatnia liczba całkowita zapisana w formacie ósemkowym</li>
                <li>-021 - ujemna liczba całkowita zapisana w formacie ósemkowym</li>
                <li>0XFF - dodatnia liczba całkowita zapisana w formacie szesnastkowym</li>
                <li>0x0C - ujemna liczba całkowita zapisana w formacie szesnastkowym</li>
            </ol>
            <li>typ float lub, double jest to liczba zmenno przeciknowa (rzeczywista) przykład 1,47; 0,17E2</li>
            <li>typ string, jest to typ łańcucha znaków, który służy do przedstawiania ciągu znaków. pojedynczy znak ciągu jest zapamiętywany w jendym bajcie. Łańcuch znaków można utworzyć, korzystając z jednego z czterach sposobów:</li>
            <ul>
                <li>zapisanie ciągu znaków w apostrofach</li>
                <li>zapisanie ciągu znaków w cudzysłońach</li>
                <li>używają składni <i>heredoc</i>
                <?php
                $napis = 'Dziś poprawia się pogoda';
                $tekst =<<<TX
                Tutaj rozpoczyna się $napis
                TX;
                echo $tekst;
                ?>
                </li>
        </ul>
    </li>
</ol>
<h1>Funkcje języka PFP do obsługi bazy danych MySQLi</h1>
<table border="1">
    <tr><th>Funckje biblioteki mysqli</th><th>Zwracana wartość</th></tr>
    <tr><td>mysqli_connect(server, użytkownik, hasło, nazwa_bazy)</td><td>id połączenia lub FALSE, gdy niepowodzenie</td></tr>
    <tr><td>mysqli_select_db(id_polaczenia, nazwa_bazy)</td><td>True/False w zależności od stanu operacji</td></tr>
    <tr><td>mysqli_error(id_polaczenia)</td><td>Tekst komunikatu błędu</td></tr>
    <tr><td>mysqli_close(id_polaczenia)</td><td>TRUE/FALSE w zależności od stanu operacji</td></tr>
    <tr><td>mysqli_query(id_polaczenia, zapytanie)</td><td>wynik zapytania</td></tr>
    <tr><td>mysqli_fetch_row(wynik zapytania)</td><td>tablica numeryczna odpowiadająca wierszowi zapytania</td></tr>
    <tr><td>mysqli_fetch_array(wynik_zapytania)</td><td>tablica zawierająca kolejny wierssz z podanych w wyniku zapytania lub FALSE, jeżeli nie ma więcej wierszy w wyniku zapytania</td></tr>
    <tr><td>mysqli_num_rows(wynik_zapytania)</td><td> liczba wierszy w podanym zapytaniu</td></tr>
    <tr><td>mysqli_num_fields(wynik_zapytania)</td><td> liczba kolumn w podanym zapytaniu</td></tr>
    <tr><td>isset($zmienna)</td><td>TRUE/FALSE w zależności od tego, czy $zmienna istnieje</td></tr>
</table>
<footer>Design strony: Norbert Sz.</footer>
<h1>Funkcja header()</h1>
<h3>W PHP służy do wysyłania surowych nagłówków HTTP do przeglądarki klienta, co pozwala na kontrolę nad komunikacją między 
    serwerem a przeglądarką, np. do przekierowania użytkownika pod inny adres URL, ustawienia typu zawartości strony czy 
    zarządzania sesjami. kluczowe jest, aby wywoływać tę funkcję przed wysłaniem jakiejkolwiek innej treści
    (HTML, znaki białej przestrzeni), ponieważ nagłówki muszą być wysłanie przed ciałem odpowiedzi HTTP.</h3>
    <h2>Jak działa funkcja header()</h2>
    <ul>
        <li>Wysyłanie nagłówków: Funkcja header() pozwala na wysłanie dowolnego, poprawnego nagłówka HTTP, który 
            przeglądarka lub inny klient HTTP przetworzy.</li>
        <li>Przekierowania: Jest najczęściej używana do przekierowania użytkownika na inny adres URL na przykład po udanym 
            zalogowaniu lub zmianie struktury strony.</li>
        <li>Ustawienia typu zawartości: Pozwala na określenie typu zawartości przesyłanych danych 
            (np. Content-Type: application/json), co jest kluczowe w komunikacji z innymi systemami lub aplikacjami.</li>
        <li>Zarządzanie sesjami i pamięcią podręczną: Służy do zarządzania plikami cookie i ustawieniami pamięci podręcznej
            co wpływa na działanie strony w przeglądarce</li>
    </ul>
    <h2>Przekierowanie na inny adres URL:</h2>
    <?php
    //header: "Location: http://www.example.com/nowa-strona.php";
    //exit();  ważne, aby przerwać dalsze działanie skryptu po przekierowaniu
    ?> 
    <h1>Stałe w PHP</h1>
    <p>W języku PHP wysepują stałe, czyli identyfikatory, których wartość nie ulegają zmianie.
        Do definiowania stałych służy funkcja <em>define()</em>, która ma dwa argumenty: nazwę
        stałej oraz przypisaną do niej wartości.<br> Definicja stałej ma wartość: <br>
        <b>define(NAZWA_STALEJ, wartość);</b>
        <h4>Przykład dla stałej</h4>
        <?php
        define("wiek", 21);
        echo "<br>Nasz wiek to: ".wiek;
        ?>
    </p>
    <h2>Stałe predefiniowane</h2>
    <ol>
        <li>PHP_VERSION - stała reprezentująca aktualnie używaną werjsje PHP</li>
        <li>PHP_OS - stała zawierająca nazwę systemu operacyjnego, na którym uruchamiany jest
            PHP</li>
        <li>_FILE_ - stała zawierająca nazwe pliku ze skryptem, który jest aktualnie przetwarzany</li>
    </ol>
</body>
</html>