<?php

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sommaPari = 0;
$conteggioPari = 0;

foreach ($numeri as $numero) {
    if ($numero % 2 === 0) {
        $sommaPari += $numero;
        $conteggioPari++;
    }
}

echo $sommaPari / $conteggioPari;
