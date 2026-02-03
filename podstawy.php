<!DOCTYPE html>
<html lang="PL-pl">
<head>
<meta charset="utf-8">
<title>Podstawy Języka PHP</title>
</head>
<body>
<h1>Podstawy Języka PHP</h1>
<p>Rozpoczynanie i zakończenie poleceń PHP odbywa się za pomocą znaczników:</p>
<ul>
<li>Znacznik otwierający - znak miejszości&lt;?php</li>
<li>Znacznik zamykający - ?znak większości - ?></li>
</ul>
<h2>Przykład 1</h2>
<?php
echo "<h2>Mój pierwszy skrypt PHP</h2>";
?>
<h1>Komentarze</h1>
Występują trzy rodzaje komentarzy:
<ul>
<li>komentarz blokowy - zaczyna się od znaków /*, a kończy się */</li>
<li>komentarz jednowierszowy - zaczyna sie od znaków // i kończy w bieżącej linii</li>
<li>komentarz jednowierszowy uniksowy - zaczyna się od znaku # i ciagnie do końca linii.</li>
</ul>
<h1>Zmienne</h1>
<p>Przed nazwą zmiennej należy umieścić znak $. Warunki jakie muszą być spełnione przy nazwie:</p>
<ul>
<li>musi zaczynać się od litery lub znaku podkreślenia,</li>
<li>może składać się jedynie z liter, cyfr i znaku podkreślenia,</li>
<li>w nazwach rozróżniane są duże i małe litery,</li>
<li>w nazwach można stosować polskie litery</li>
</ul>
<h3>Przy odwoływaniu się do zmiennej zawsze należy uzyć znaku $.</h3>
<h2>Przykład 2</h2>
<?php
$zmienna1=374;
$nazwa_1="to mój tekst";
$liczba7=26;
$ilosc=$zmienna1+$liczba7;
echo "<h3>Wynik wynosi $zmienna1<br> to jest nazwa $nazwa_1<br>$liczba7<br>Bieżąca wartośc to:  $ilosc</h3>";
?>
<h3>W języku PHP napisz skrypt, który będzie obliczał sumę, różnicę , iloraz, iloczyn i resztę z dzielenia dwóch dowolnych liczb.</h3>
<?php
$a=89;
$b=56;
$suma=$a+$b;
$roznica=$a-$b;
$iloczyn=$a*$b;
$iloraz=$a/$b;
$reszta=$a%$b;
echo "<h3>Suma wynosi: $suma<br> różnica wynosi:  $roznica<br>Iloczyn wynosi: $iloczyn<br>Iloraz wynosi: $iloraz<br>Reszta z dzielenia wynosi: $reszta</h3>"; 
?>
<h1>Zmienne predefiniowane</h1>
<ul>
<li>$_GET[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody GET</li>
<li>$_POST[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą metody POST</li>
<li>$_COOKIE[] - jest to tablica zawierająca zmienne przesyłane do skryptu za pomocą cookies()</li>
<li>$_FILES[] - jest to tablica zawierająca zmienne przesyłane do skryptu podczas przesyłania plików na serwer</li>
<li>$_SERVER[] - jest to tablica zawierająca zmienne przesyłane do skryptu przez serwer WWW. Są to dane takie jak wersja serwera, ścieżka do pliku, adres skryptu, wysłane nagłówki.</li>
<li>$_ENV[] -  jest to tablica zawierająca wartości zmiennych środowiskowych serwera.</li>
<li>$_REQUEST[] -  jest to tablica zawierająca zmienne przesyłane do skryptu przez użytkownika. Obejmuje dane z $_GET, $_POST, oraz $_COOKIE.</li>
<li>$_SESSION[] - jest to tablica zawierająca zmienne zarejestrowane w bieżącej sesji.</li>
<li>$GLOBALS[] - jest to tablica zawierająca odniesienie do kazdej zmiennej utworzonej przez użytkownika, która ma zasięg globalny dla danego skryptu.</li>
</ul> 
<h1>Typy danych</h1>
<h3>Wystepujące w PHP typy danych można podzielić na trzy rodzaje:</h3>
<ol>
<li>Typy skalarne, czyli typy proste. Należą do nich:
<ul>
<li>typ boolean, Jest to typ logiczny. Przyjmujący jedną z dwóch wartości: prawda (true) lub fałsz (false)</li>
<li>typ integer, jest to typ liczb całkowitych. Może służyć do przedstawiania dodatnich lub ujemnych liczb całkowitych.<br> Przykłady zapisu liczb całkowitych w róznych formatach
<ol>
<li>537 - dodatnia liczba całkowita</li>
<li> -451 - ujemna liczba całkowita </li>
<li> 032 - dodatnia liczba całkowita zapisana w formacie ósemkowym</li>
<li> -021 - ujemna liczba całkowita zapisana w formacie ósemkowym</li>
<li>0XFF - dodatnia liczba całkowita zapisana w formacie szesnastkowym</li>
<li>-0x0C - ujemna liczba całkowita zapisana w formacie szesnastkowym</li>
</ol>
</li>
<li>typ float lub double, jest to liczba zmienno przecinkowa (rzeczywista) przykład 1,47; 0,17E2</li>
<li>typ string, jest to typ łańcucha znaków, ktory służy do przedstawiania ciągu znaków. pojedynczy znak ciagu jest zapamiętywany w jednym bajcie.Łańcuch znaków można utworzyć,  korzystając z jednego z czterech posobów:
<ul>
<li>używając znaków apostrofu,</li>
<li>używajac znaku cudzysłowu,</li>
<li>używają składni <i>heredoc</i>
<?PHP
$napis='Dziś poprawia się pogoda';
$tekst=<<<TX
Tutaj rozpozyna się $napis
TX;
echo $tekst;
?>
</li>
<li>używają składni <i>newdoc</i>
<?PHP
$napis="Dziś poprawia się pogoda";
$tekst=<<<'PC'
Tutaj rozpozyna się $napis
PC;
echo $tekst;
?>
</li>
</ul>
</ol>
<h1>Funkcje języka PHP do obsługi bazy MySQLi</h1>
<table border="2">
<tr><th>Funkcje bilioteki mysqli</th><th>Zwracana wartość</th></tr>
<tr><td>mysqli_connect(serwer, użytkownik, hasło, nazwa_bazy)</td><td>id połączenia lub FALSE, gdy niepowodzenie</td></tr>
<tr><td>mysqli_select_db(id_polaczenia,nazwa_bazy)</td><td>TRUE/FALSE w zależności od stanu operacji</td></tr>
<tr><td>mysqli_error(id_polaczenia)</td><td>Tekst komunikatu błędu</td></tr>
<tr><td>mysqli_close(id_polaczenia)</td><td>TRUE/FALSE w zależności od stanu operacji</td></tr>
<tr><td>mysqli_query(id_polaczenia, zapytanie)</td><td>Wynik zapytania</td></tr>
<tr><td>mysqli_fetch_row(wynik_zapytania)</td><td>Tablica numeryczna odpowiadająca wierszowi zapytania</td></tr>
<tr><td>mysqli_fetch_array(wynik_zapytania)</td><td>Tablica zawierająca kolejny wiersz z podanych w wyniku zapytania lub FALSE, jeżeli nie ma więcej wierszy w wyniku zapytania</td></tr>
<tr><td>mysqli_num_rows(wynik_zapytania)</td><td>Liczba wierszy w podanym zapytaniu</td></tr>
<tr><td>mysqli_num_fields(wynik_zapytania)</td><td>Liczba kolumn w podanym zapytaniu</td></tr>
<tr><td>isset($zmienna)</td><td>TRUE/FALSE w zależności od tego, czy $zmienna istnieje</td></tr>
</table>
<h1>Główne różnice między $_GET[] a $_POST[] </h1>
<h3>W PHP to sposób przesyłania danych (URL vs. ciało żądania), ich widoczność (jawne vs. ukryte), ograniczenia długości (GET jest ograniczony, POST nie) oraz przeznaczenie (GET do pobierania, POST do wysyłania lub operacji modyfikujących dane).</h3> 
<h2>$_GET[]</h2>
Sposób przesyłania danych:<br>
<ul>
<li>Dane są dołączane jako parametry do adresu URL (np. strona.php?klucz=wartosc).</li> 
<li>Widoczność: Dane są jawne i widoczne w pasku adresu przeglądarki, co zwiększa ryzyko ich wykradzenia. </li>
<li>Ograniczenie długości: Metoda GET ma ograniczenie długości przesyłanych danych (zazwyczaj do około 255 znaków). </li>
<li>Bezpieczeństwo: Nie nadaje się do przesyłania poufnych informacji, takich jak hasła, ponieważ są one widoczne w historii przeglądarki i logach serwera.</li> 
<li>Zastosowania: Używana do wysyłania danych, które są pobierane, np. w wyszukiwarkach, przy zmianie strony w paginacji czy do odnośników. </li></ul>
<h2>$_POST[]</h2>
Sposób przesyłania danych: <br>
<ul>
<li>Dane są przesyłane w treści żądania HTTP, poza adresem URL, co zapewnia większą poufność.</li> 
<li>Widoczność: Dane nie są widoczne w adresie URL ani w historii przeglądarki, co czyni je bardziej dyskretnymi.</li> 
<li>Ograniczenie długości: Brak ograniczenia długości przesyłanych danych, co pozwala na wysyłanie dużych ilości informacji, w tym plików. </li>
<li>Bezpieczeństwo: Lepiej nadaje się do przesyłania poufnych danych i operacji modyfikujących dane, takich jak logowanie, wysyłanie danych do bazy czy przesyłanie plików.</li> 
<li>Zastosowania: Używana do przesyłania danych w formularzach (np. podczas logowania), dłuższych tekstów, danych do bazy czy uploadu plików. </li></ul>
<h1>Funkcja header()</h1>
<h3> W PHP służy do wysyłania surowych nagłówków HTTP do przeglądarki klienta, co pozwala na kontrolę nad komunikacją między serwerem a przeglądarką, np. do przekierowania użytkownika pod inny adres URL, ustawienia typu zawartości strony czy zarządzania sesjami. Kluczowe jest, aby wywoływać tę funkcję przed wysłaniem jakiejkolwiek innej treści (HTML, znaki białej przestrzeni), ponieważ nagłówki muszą być wysłane przed ciałem odpowiedzi HTTP. </h3>
<h2>Jak działa funkcja header()</h2>
<ul>
<li>Wysyłanie nagłówków: Funkcja header() pozwala na wysłanie dowolnego, poprawnego nagłówka HTTP, który przeglądarka lub inny klient HTTP przetworzy.</li>  
<li>Przekierowania: Jest najczęściej używana do przekierowania użytkownika na inny adres URL, na przykład po udanym zalogowaniu lub zmianie struktury strony.</li> 
<li>Ustawianie typu zawartości: Pozwala na określenie typu zawartości przesyłanych danych (np. Content-Type: application/json), co jest kluczowe w komunikacji z innymi systemami lub aplikacjami.</li> 
<li>Zarządzanie sesjami i pamięcią podręczną: Służy do zarządzania plikami cookie i ustawieniami pamięci podręcznej, co wpływa na działanie strony w przeglądarce.<li> </ul>
<h2>Przekierowanie na inny adres URL:</h2>
 
	<h1> Stałe w PHP</h1>
<p> w Języku PHP występują stałe, czyli identyfikatory, ktorych wartości nie ulegają zmianie. Do definiowania stałych służy funkcja <em>define()</em>, która ma dwa argumenty: nazwę stałej oraz przypisaną do niej wartość. <br>
Definicja stałej ma wartość:<br>
<b>define(NAZWA_STALEJ, wartość);</b>
<h4>Przykład dla stałej</h4>
<?php
define("wiek", 21);
echo "<br>Nasz wiek to: ".wiek;
?>
</p>
<h2>Stałe predefiniowane</h2>
<ol>
<li>PHP_VERSION - stała reprezentująca aktualnie używaną wersję PHP</li>
<li>PHP_OS - stała zawierająca nazwę systemu operacyjnego, na ktorym uruchamiany jest PHP</li>
<li>_FILE_ - stała zawierająca nazwę pliku ze skryptem, ktory jest aktualnie przetwarzany</li>
</ol>
<h1>Operatory i wyrazenia</h1>
<h3>w PHP operatory możemy podzielić na: </h3>
<ol>
<li>arytmetyczne
<ul>
<li>dodawanie +</li>
<li>odejmowanie - </li>
<li>mnożenia *</li>
<li>dzielenie /</li>
<li>reszta z dzielenia (modulo) %</li>
<li>potęgowanie **</li>
</ul></li>
<li>porównania
<ul>
<li>argumenty sa sobie równe ==</li>
<li>argumenty sa różne != </li>
<li>argumenty są tego samego typu i są równe ===</li>
<li>argumenty sa różnego i typu i sa rózne !==</li>
<li>argument pierwszy jest większy od drugiego ></li>
<li>argument pierwszy jest mniejszy od drugiego &lt;,</li>
<li>argumnent pierwszy jest większy lub równy od drugiego >=</li>
<li>argument pierwszy jest mniejszy lub równy od drugiego "&lt;= "</li>
<li> argumenty są różne <> </li>
</ul>
</li>
<li>bitowe (umożliwiają wykonanie operacji na poszczególnych bitach liczb)
<ul>
<li>& iloczyn bitowy (AND)</li>
<li>| suma bitowa (OR)</li>
<li>~ negacja bitowa (NOT)</li>
<li>^ bitowa różnica symetryczna </li>
<li>>> przesunięcie bitowe w prawo</li>
<li> &lt;&lt; przesunięcie bitowe w lewo </li>
</ul>
</li>
<li>logiczne
<ul>
<li>iloczyn logiczny - and, &&</li>
<li>suma logiczna - or, ||</li>
<li>negacja logiczna - ! </li>
<li> róznica symetryczna - xor</li>
</ul>
</li>
<li>przypisania
<ul>
<li>= , $x=23;</li>
<li>+= , $x+=5;</li>
<li>-= , $x-=5;</li>
<li>*=, $x*=5;</li>
<li>/=, $x/=5; </li>
<li>%=, $x%=5;</li>
</ul>
</li>
<li>łańcuchowe (znak konkatenacji)
<ul>
<li>łączenie łańcuchów znakowych <b>. </b> $x="moje "." miasto";</li>
<li>dołączanie łańcucha znakowego <b>.= </b>$x="moje  "; $x.=" miasto ";</li>
</ul>
<?php
$osoba["nazwisko"]="Kowalski";
$osoba["imie"]="Jan";
$osoba["wiek"]=27;
echo $osoba["nazwisko"]. " ".$osoba["imie"]." ma ".$osoba["wiek"]. " lat. ";
?>
</li>
<li>inkrementacji i dekrementacji
<ul>
<li>zwiększania licznika o 1 $x++</li>
<li>zmiejszania licznika o 1 $x--</li>
</ul>
</li>
</ol>
<h1>Funkcje daty i czasu</h1>
 <p>Język PHP dysponuje dużą grupą funkcji, ktorych zadaniem jest wykonywanie operacji na dacie i czasie</p>
 <h2>Funkcja time()</h2>
 <p>Zwraca informację na temat bieżącej daty i czasu. Nie ma żadnych argumentów. Informacje na temat daty i czasu są zwracane w postaci liczby. Odpowiada ona liczbie sekund, ktore upłynęły od godziny 00:00:00 1 stycznia 1970 roku do bieżącej daty. Jest to tzw. <i>znacznik_czasu (timestamp)</i> </p>
 <?php
 echo time();
 ?>
 <br>
 <h2>Funkcja getdate()</h2>
 <h1>Funkcja date()</h1>
 <h3>date() zwraca datę sformatowaną zgodnie z szablonem przedstawionym w poniższej tabeli.</h3>
 <table border="2">
 <tr><th>Znacznik</th><th>Znaczenie</th><th>Przykład</th></tr>
 <tr><td>d</td><td>Dzień miesiąca w formacie z zerem na początku</td><td>01 - 31</td></tr>
 <tr><td>D</td><td>Tekstowy opis angielskiej nazwy dnia, trzy litery</td><td>Mon, Tue</td></tr>
 <tr><td>F</td><td>Pełen angielski opis, dnia miesiąca, taki jak January czy March</td><td>January</td></tr>
 <tr><td>g</td><td>Godzina, w formacie 12-godzinnym, bez zer wiodących</td><td>od 1 do 12</td></tr>
 <tr><td>G</td><td>Godzina, w formacie 24-godzinnym, bez zer wiodących</td><td>od 1 - do 24</td></tr>
 <tr><td>H</td><td>Godzina, w formacie 24-godzinnym, z zerami wiodącymi</td><td>od 01 do 24</td></tr>
 <tr><td>i</td><td>Minuty z zerami wiodącymi</td><td>od 01 - do 59</td></tr>
 <tr><td>l</td><td>Nazwa dnia tygodnia</td><td>Monday</td></tr>
 <tr><td>m</td><td>Miesiąc w postaci liczby dwucyfrowej z zerem na początku</td><td>od 01 do 12</td></tr>
 <tr><td>s</td><td>liczba sekund z zerem na poczatku</td><td>od 01 do 59</td></tr>
 <tr><td>Y</td><td>Rok w postaci czterech znaków</td><td>2023</td></tr>
 <tr><td>w</td><td>	Liczbowa forma dnia tygodnia</td><td>0 (dla Niedzieli) aż do 6 (dla Soboty)</td></tr>
 <tr><td>W</td><td>	Numer tygodnia w roku, zgodny z normą ISO-8601, Tygodnie rozpoczynają Poniedziałki (dostępne od PHP 4.1.0)</td><td>	Przykład: 42 (42. tydzień roku)</td></tr>
 </table>
  <br>
<h1>PHP operacje na plikach</h1>
<h2>Funkcja fopen()</h2>
<p>Funkcja otwierania pliku, ogólna składnia: fopen('nazwa_pliku', 'tryb_otwarcia') </p>
<h3>Zestawienie trybów otwarcia</h3>
<table border="1">
<tr><td>’r’	</td><td>Otwiera tylko do odczytu; umieszcza wskaźnik pliku na jego początku.</td></tr>
<tr><td>’r+’</td><td>	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego początku.</td></tr>
<tr><td>’w’</td><td>	Otwiera tylko do zapisu; umieszcza wskaźnik pliku na jego początku i obcina plik do zerowej długości. Jeśli plik nie istnieje to próbuje go utworzyć.</td></tr>
<tr><td>’w+’</td><td>	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego początku i obcina plik do zerowej długości. Jeśli plik nie istnieje to próbuje go utworzyć.</td></tr>
<tr><td>’a’</td><td>	Otwiera tylko do zapisu; umieszcza wskaźnik pliku na jego końcu. Jeśli plik nie istnieje to próbuje go utworzyć.</td></tr>
<tr><td>’a+’</td><td>	Otwiera do odczytu i zapisu; umieszcza wskaźnik pliku na jego końcu. Jeśli plik nie istnieje to próbuje go utworzyć.</td></tr>
<tr><td>’x’	</td><td>Tworzy i otwiera plik tylko do zapisu; umieszcza wskaźnik pliku na jego początku. Jeśli plik juz istnieje, wywołanie fopen() nie powiedzie się, zwróci FALSE i wygeneruje błąd na poziomie E_WARNING. Jeśli plik nie istnieje, spróbuje go utworzyć. To jest równoważne z określeniem flag O_EXCL|O_CREAT stosowanym w wywołaniu systemowym open(2).</td></tr>
<tr><td>’x+’</td><td>	Tworzy i otwiera plik odczytu i zapisu; umieszcza wskaźnik pliku na jego początku. Jeśli plik juz istnieje, wywołanie fopen() nie powiedzie się, zwróci FALSE i wygeneruje błąd na poziomie E_WARNING. Jeśli plik nie istnieje, spróbuje go utworzyć. To jest równoważne z okresleniem flag O_EXCL|O_CREAT stosowanym w wywołaniu systemowym open(2).</td></tr></table>
<h1>W fputs() zapisuje do otwartego pliku.(lub funkcja fwrite())</h1>

<h3>Funkcja zatrzyma się na końcu pliku lub po osiągnięciu określonej długości, w zależności od tego co nastąpi wcześniej.<br>

Ta funkcja zwraca liczbę bajtów zapisanych w przypadku powodzenia, FALSE w przypadku porażki.<br>

fputs() funkcji jest alias fwrite() funkcji.<br>

Składnia:<br>
fputs(file,string,length)</h3>
<table border="1">
<tr><td>Parametr</td><td>	Opis</td></tr>
<tr><td>file</td><td>	Wymagany. Określa otworzenie pliku do zapisu</td></tr>
<tr><td>string</td><td>	Wymagany. Określa ciąg zapisu otwartego pliku</td></tr>
<tr><td>length</td><td>	Opcjonalny. Określa maksymalną liczbę bajtów do zapisania</td></tr></table>
<h3>Do zamykania pliku służy funkcja <strong>fclose()</strong> zapisywana w postaci:<br>
fclose(deskryptor)<br>
Deskryptor to wartość zwrócona przez funkcję <em>fopen()</em>
</h3>
<h2>Odczyt danych to funkcja fgets()<br>
fgets(deskryptor, ile_znaków)
</h2>
<h1>Dołączanie plików</h1>
<h3>Duży plik można podzielić i dołączać poszczególne pliki służy do tego polecenie <em>include lub require</em></h3>

<h1>Szyfrowanie haseł w języku PHP</h1>
<h3>Proces haszowania (w przeciwieństwie do szyfrowania) wytwarza z wejścia wyjście, z którego nie można już wyprowadzić oryginalnego ciągu.

Dlatego dobrze nadaje się do ochrony wrażliwych ciągów znaków, haseł i sum kontrolnych.</h3>

<h4>Inną cechą funkcji haszujących jest to, że zawsze generują wyjścia o tej samej długości, a mała zmiana na wejściu zawsze całkowicie zmienia całe wyjście.</h4>

<h2>Funkcje haszowania</h2>
<ol>
W PHP istnieje wiele funkcji hashowych, ważne z nich to:

<li>Bcrypt: password_hash() - Najbardziej bezpieczne haszowanie haseł, wolne obliczeniowo, używa wewnętrznej soli i haszuje iteracyjnie.</li>
<li>md5() - Bardzo szybka funkcja nadająca się do haszowania plików. Wyjście ma zawsze 32 znaki.</li>
<li>sha1() - Szybka funkcja haszująca do haszowania plików, używana wewnętrznie przez Git do haszowania commitów. Dane wyjściowe mają zawsze 40 znaków.</li>
<li>Funkcja hash() służy do hashowania ciągów znaków. Przyjmuje ona trzy parametry - dwa obowiązkowe i trzecie opcjonalny:
<ul>
<li>$algo - string - oznacza algorytm, którym chcemy użyć do zahashowania ciągu. Aby poznać listę obsługiwanych algorytmów, możemy skorzystać z bezparametrowej funkcji hash_algos;</li>
<li>$data - string - jest to ciąg znaków, które chcemy zhashować;</li>
<li>$raw_output - bool, domyślnie false - określa czy chcemy otrzymać wynik w postaci czystego stringu, czy w postaci binarnej.</li></ul></li>
</ol>
<h1>Pliki cookies w PHP</h1>
<h3>Pliki cookies</h3>
<h4>To niewielkie pliki tekstowe wysyłane przez serwer lub skrypt do przeglądarki i umieszczane przez nią na dysku użytkownika. Pliki te są częścią specyfikacji protokołu HTTP i są wysyłane do przeglądarki w postaci nagłówka o nazwie <em>Set-Cookie</em>. Służa do identyfikacji użytkownika, zawierają  między innymi nazwę serwera, datę wygaśnięcia pliku oraz informację na temat domeny i ścieżki dostępu do pliku.</h4>
<h3>Zasady działania plików cookies:</h3>
<ul>
<li>Po nawiazaniu połączenia serwer wysyła do przeglądarki nagłówek <em>Set-Cookie</em> , który zawiera plik cookie.</li>
<li>Przeglądarka zapisuje plik na dysku użytkownika</li>
<li>przy kolejnym połączeniu z serwerem przeglądarka wysyła na serwer przechowywany na dysku plik cookie</li>
</ul>
<h2>Tworzenie pliku cookie</h2>
<h3>W skryptach PHP pliki cookies tworzone są za pomocą funkcji <strong>setcookie()</strong>, ktora ma postać:</h3>
<h4>setcookie(nazwa, wartość, czas_trwania, ścieżka_dostępu, domena, bezpieczeństwo, tylko_http)</h4>
<h3>Argumenty funkcji to:</h3>
<ol>
<li>nazwa - nazwa pliku</li>
<li>wartość - wartość, która będzie przechowywana w pliku cookie</li>
<li>czas trwania- czas po jakim plik zostanie usunięty przez przeglądarkę. Jest on podawany jako liczba sekund , które upłynęły od 1 stycznia 1970r</li>
<li>ścieżka dostępu - ścieżka dostępu na serwerze dla pliku cookie</li>
<li>domena - domena w której plik cookie będzie dostępny</li>
<li>bezpieczeństwo - przyjmuje wartośći true lub false. Ustawienie na true spowoduje, że plik będzie mógł być przesłany tylko przez bezpieczne połączenie HTTPS</li>
<li>tylko_http - nie będzie dostępne z poziomu skryptów.</li>
</ol>
<h2>Usuwanie plików cookie</h3>
<h3>Aby samodzielnie usunąć plik cookie, można ustawić dla niego czas ważności, który już upłynął</h3>
<h4>setcookie("pismo", "Na skróty", time()-100, "/", "localhost", 0)</h4>
<h2>Data ostatnich odwiedzin na stronie</h2>
----------------------------------------------------
$mies=2592000+time();
setcookie("wizyta", date(F jS - g:ia), $mies);
--------------------------------------------------
if(isset($_COOKIE['wizyta'])){
	$ostatnia=$_COOKIE['wizyta'];
	echo "Witamy ponownie!<br> Ostatni raz odwiedziłeś nas: ".$ostatnia;
}else{
	echo "Witamy na naszej stronie";
}
--------------------------------------------------
   
</body>
</html>