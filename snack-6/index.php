<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - Snack 6</title>
    <style type="text/css">
      *{
        box-sizing: border-box;
        padding: 0px;
        margin: 0;
      }
      .container-gray {
        width: 150px;
        height: 100px;
        border: solid 1px purple;
        background-color: lightgray;
        text-align: center;
        margin: 25px;
      }
      .container-green{
        width: 150px;
        height: 100px;
        border: solid 1px purple;
        background-color: lightgreen;
        text-align: center;
        margin: 25px;
      }
      li {
        margin-top: 15%;
        color: white;
        list-style: none;
      }
      .container-di-tutto {
        display: flex;
        justify-content: center;
        height: 500px;
      }
    </style>
  </head>
  <body>
    <?php
      /*Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
      e i PM in un rettangolo verde. 'utilizzando l'array fornito con il link*/
      $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    //var_dump($db);
    foreach ($db as $key => $value) { // prendo il valore
      //var_dump($key);
      if ($key == 'teachers') { //vedo se è uguale a teachers
        foreach ($value as $ecc) { //ri-ciclo per avere anche i nomi
          //var_dump($ecc);
          ?>
        <div class="container-di-tutto">
          <div class="container-gray">
            <ul><b>
              <?php echo $key; //stampo ?>
            </b><li>
               <?php
                  echo $ecc['name'] . ' ' . $ecc['lastname']; // stampo nome
               ?>
              </li>
             </ul>
          </div>
  <?php
        }
      }
    }
  ?>
<?php // stessa operazione effetuata sotto 
  foreach ($db as $key => $value) {
    //var_dump($key);
    if ($key == 'pm') {
      foreach ($value as $ecc) {
        //var_dump($ecc);
        ?>

        <div class="container-green">
          <ul><b>
            <?php echo $key; ?>
          </b><li>
             <?php
                echo $ecc['name'] . ' ' . $ecc['lastname'];
             ?>
            </li>
           </ul>
        </div>
<?php
      }
    }
  }
?>
</div>
  </body>
</html>
