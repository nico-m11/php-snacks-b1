<h1>Esercizio 3</h1>

<?php
/*Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post.*/

$specialPost = [
  '15/02/2020'=>
  [
    'title' => 'Ho vinto il campionato di Scii',
    'author' => 'Gianni Fiorellino',
    'post' => 'Il mitico Antonio Esposito si è preso lui la coppa'
  ],
  '08/08/2020' =>
  [
    'title' => 'Muore divorata dagli squali',
    'author' => 'Nino Zacchi',
    'post' => 'Disattenzione dei genitori ed il figlio muore divorato'
  ],
  '29/12/2020' =>
  [
    'title' => 'Mareggiata a Napoli',
    'author' => 'Teleclub',
    'post' => 'Il mare irrompe anche nei ristoranti vicini'
  ],
  '27/12/2020' =>
  [
    'title' => 'Nitro e YoungMiles x RedBull',
    'author' => 'MacheteClub',
    'post' => 'Nitro e YoungMiles partecipano al 64 Barre di RedBull'
  ],
];
//var_dump($specialPost);
foreach ($specialPost as $key => $value) {  //prendo la chiave dell'array (data)
  echo $key . '<br>';
  //var_dump($key);
  foreach ($value as $val ) {  //prendo il valore 'post' nell'array
  }
  echo $val . '<br>';
  //var_dump($val);
}
 ?>
