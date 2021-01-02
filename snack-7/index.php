<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack - 7</title>
  </head>
  <body>
    <h1> Esercizio n°7</h1>
    <?php
      /*Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
      alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
      Stampare Nome, Cognome e la media dei voti di ogni alunno.*/
      $classe = [
        'Alunno_1' => [
          'nome' => 'Nicola',
          'cognome' => 'Melito',
          'voti' => [
            10, 10, 10
          ],
        ],
        'Alunno_2' => [
          'nome' => 'Angelo',
          'cognome' => 'Custode',
          'voti' => [
            5, 8, 3
          ],
        ],
        'Alunno_3' => [
          'nome' => 'Gennaro',
          'cognome' => 'Durante',
          'voti' => [
            2, 2, 2
          ],
        ],'Alunno_4' => [
          'nome' => 'MariaTeresa',
          'cognome' => 'Mallardo',
          'voti' => [
            3, 5, 3
          ],
        ],
    ];
      //var_dump($classe);
      foreach ($classe as $key => $value) {
        //var_dump($value['voti']);
        $contatore = 0;
        for ($i=0; $i < count($value['voti']); $i++) {
          //var_dump($value['voti'][$i++]);
          //ciclo tante volte quanti sono i imageconvolution
          //imposto il contatore uguale al valore del ciclo for
          $contatore += $value['voti'][$i++];
          $somma = $contatore / count($value['voti'][$i++]);
      }
      echo '<h3>' . "L'alunno/a " . $value['nome'] . ' ' . $value['cognome'] . ', la media dei voti è: ' . floor($somma) . '</h3>' . '<br>';
      }


     ?>
  </body>
</html>
