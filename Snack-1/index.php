
    <h1>Esercizio 1</h1>

    <?php
    /*Creiamo un array contenente le partite di basket di un’ipotetica tappa del
    calendario. Ogni array avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60*/

    $match = [
      'partita uno' => [
        'squadra casa' => 'Napoli',
        'squadra fuori' => 'Juventus',
        'punti casa' => 100,
        'punti fuori' => 0
      ],
      'partita due' => [
        'squadra casa' => 'Atalanta',
        'squadra fuori' => 'Fiorentina',
        'punti casa' => 50,
        'punti fuori' => 20
      ],
      'partita tre' => [
        'squadra casa' => 'Roma',
        'squadra fuori'=> 'Lazio',
        'punti casa' => 0,
        'punti fuori' => 0
      ],
      'partita quattro' => [
        'squadra casa' => 'Milan',
        'squadra fuori' => 'Inter',
        'punti casa' => 2,
        'punti fuori' => 2
      ],
    ];
    ?>
  <h3>
    <?php
    foreach ($match as $key) {
      echo $key['squadra casa'].' - '.$key['squadra fuori'].' | '.$key['punti casa'].' - '.$key['punti fuori'].'<br>';
    };
     ?>
  </h3>
