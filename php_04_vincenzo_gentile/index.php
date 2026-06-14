<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Giulia', 'surname' => 'Bianchi', 'gender' => 'F'],
];

foreach ($users as $user) {
    
    $nome = $user['name'];
    $cognome = $user['surname'];
    $genere = $user['gender'];

    if ($genere === 'M') {
        echo "Buongiorno Sig. $nome $cognome\n";
    } elseif ($genere === 'F') {
        echo "Buongiorno Sig.ra $nome $cognome\n";
    } else {
        echo "Buongiorno $nome $cognome\n";
    }
}

?>
