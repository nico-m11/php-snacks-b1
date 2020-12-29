<h1>Esercizio 4</h1>
<?php
/* Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta*/
$arrRandomNumb = []; //creo array vuoto
//var_dump($arrRandomNumb);
for ($i=0; $i < 16; $i++) { // lo faccio ciclare x15 volte per ricevere 15 num casuali
  $numRand = rand(1, 100); // funzione per creare num casuali da 1 a 100
  //var_dump($numRand);
if (!in_array($numRand, $arrRandomNumb)) { // se i numeri sono diversi all'interno degli array allora li da!
  $arrRandomNumb[] = $numRand;
  //var_dump($numRand);
  echo '<h3>' . '<li>' .  $numRand . '</li>' . '</h3>'; // stampo a schermo in lista i numeri ramdom 
}
}
?>
