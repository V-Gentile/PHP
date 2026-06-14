<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
  [
    'oscura',
    'era',
    89,
    [
      'mezzo',
       'E'
    ],
    'ritrovai',
    'per'
  ],
  'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$results = "Nel " . $words1[6][3][0] . " di cammin di nostra vita " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " una selva " . $words1[6][0] . ", che' la " . $words1[7] . " via " . $words1[6][1] . " smarrita.";

echo $results . "\n";

?>
