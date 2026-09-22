<?php

/* Zadanie 1 */
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

/* Zadanie 2 */
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

/* Zadanie 3 */
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo "Suma: " . $suma;

/* Zadanie 4 */
for ($i = 1; $i <= 10; $i++) {
    echo ($i * 2) . " ";
}

/* Zadanie 5 */
$x = 12;
$y = 500;
$oszczednosci = 0;

for ($m = 1; $m <= $x; $m++) {
    $oszczednosci += $y;
    $oszczednosci += $oszczednosci * 0.08;
}
echo "Zgromadzona kwota: " . round($oszczednosci, 2);

/* Zadanie 6 */
$element = 5;
$roznica = 10;
$suma = 0;

for ($i = 0; $i < 100; $i++) {
    $suma += $element;
    $element += $roznica;
}
echo "Suma ciągu: " . $suma;

/* Zadanie 7 */
$cegle = 0;
for ($i = 10; $i >= 1; $i--) {
    $cegle += $i * $i;
}
echo "Liczba cegieł w piramidzie: " . $cegle;

/* Zadanie 8 */
$x = 10;
$y = 5;
$z = 1;
$suma_cegiel = 0;

for ($i = 0; $i < $y; $i++) {
    $rzad = $x - ($i * $z);
    if ($rzad > 0) {
        $suma_cegiel += $rzad;
    }
}
echo "Liczba cegieł w ścianie: " . $suma_cegiel;

/* Zadanie 9 */
$k = 2.5;
$waga = $suma_cegiel * $k;
echo "Waga ściany: " . $waga . " kg";

/* Zadanie 10 */
$a = 10;
$b = 5;
$dzialanie = '+';

switch ($dzialanie) {
    case '+':
        $wynik = $a + $b;
        break;
    case '-':
        $wynik = $a - $b;
        break;
    case '*':
        $wynik = $a * $b;
        break;
    case '/':
        $wynik = ($b != 0) ? ($a / $b) : "Błąd: dzielenie przez zero";
        break;
    default:
        $wynik = "Nieznane działanie";
}
echo "Wynik kalkulatora: " . $wynik;

/* Zadanie 11 */
$n = 8;
$x = 3;
$y = 4;

for ($i = 0; $i < $n; $i++) {
    echo ($x + $i * $y) . " ";
}

/* Zadanie 12 */
do {
    $a = rand(-5, 5);
    $b = rand(-5, 5);
    $suma = $a + $b;
    echo "Liczby: $a i $b, Suma: $suma<br>";
} while ($suma != 0);




