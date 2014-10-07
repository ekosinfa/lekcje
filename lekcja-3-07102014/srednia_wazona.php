<?php
$oceny = array(
    "1" => array(
        'ocena' => 4,
        'waga' => 2
    ),
    "2" => array(
        'ocena' => 2,
        'waga' => 1
    ),
    "3" => array(
        'ocena' => 6,
        'waga' => 5
    ),
    "4" => array(
        'ocena' => 5,
        'waga' => 2
    ),
    "5" => array(
        'ocena' => 4.5,
        'waga' => 2
    ),
    "6" => array(
        'ocena' => 3.5,
        'waga' => 3
    )
);
$suma_ocen = '';
$suma_wag = '';
foreach ($oceny as $ocena) {
    $suma_ocen += $ocena['ocena'] * $ocena['waga'];
    $suma_wag += $ocena['waga'];
}
$wynik = $suma_ocen / $suma_wag;
$wynik = (string) round($wynik, 2);
echo $wynik . '<br>';
$przed = $wynik[0];
$po = $wynik[2] . $wynik[3];
if ($po < 61) {
    echo $przed;
} else {
    echo ++$przed;
}
?>
