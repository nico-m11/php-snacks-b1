<h1>Esercizio 5</h1>
<?php
/*Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo.*/
// creo Paragrafo
  $paragrafo = "Nato il 16 febbraio 1979, il centauro pesarese Valentino Rossi ha dimostrato un certo feeling per i motori fin dall'età di undici anni quando ha debuttato nel campionato italiano 'Sport production' nella categoria 125. Nel 1994, dopo un anno, si è classificato primo in sella alla Cagiva, così come nel 1997, a diciotto anni, è diventato campione mondiale classe 125 con l'Aprilia. Nel 1999 ha vinto il motomondiale classe 250 ed ora domina incontrastato la classe maggiore delle motogp. Valentino Rossi è stato dunque il primo italiano a vincere il Mondiale in tre diverse categorie. Il leggendario Giacomo Agostini, ad esempio, vinse sì ben quindici Mondiali nella sua carriera, ma tutti nelle classi 250 e 500. Rossi invece è il terzo pilota nella storia del Mondiale a trionfare in tre classi diverse.
  Prima di lui, Phil Read (125, 250 e 500) e Mike 'the bike' Hailwood (250, 350 e 500): nomi leggendari della storia del motocliclismo. Figlio dell'ex pilota degli anni '70 Graziano Rossi e di Stefania Palma, Valentino è nato a Urbino, è cresciuto a Tavullia (PS), ma ormai risiede a Londra. Il padre Graziano si classificò terzo al campionato mondiale 250 nel 1979 su una Morbidelli.
Il piccolo Rossi ha quindi iniziato a seguire le gare del campionato del mondo ancora prima di camminare e di stare in equilibrio su due ruote. Le sue prime esperienze agonistiche sono a quattro ruote: il 25 aprile 1990 il giovanissimo Rossi vince la sua prima gara di go-kart.
I costi per intraprendere uno sport del genere erano però troppo elevati e così, di comune accordo con il padre, decide di passare alle minimoto. E' la scelta vincente. Il giovane pilota di Tavullia comincia a vincere le gare e campionati a ripetizione, e nel 1993, sulla pista di Magione, debutta in sella a una moto vera, una Cagiva 125.
Campione italiano della Sport Production nel 1994, l'anno successivo conquista il titolo nazionale della 125 (a sedici anni: il più giovane della storia) e si piazza terzo nel campionato europeo della stessa categoria. Il 1996 è l'anno dell'esordio mondiale: arriva alla prima vittoria (GP Repubblica Ceca a Brno), preceduta dalla prima pole position. Da qui in poi possiamo osservare un dato curioso: Valentino Rossi ha sempre vinto il Mondiale negli anni dispari e sempre nella seconda stagione in una classe. Se dovessimo quindi stilare una tabella sinottica, risulterebbero questi dati: vittorie sulla 125 nel 1997 e sulla 250 nel 1999, mentre nel 2001 abbiamo la vittoria nella classe 500.
A rigor di cronaca, comunque, bisogna dire che è nel 1997 che esplode definitivamente il fenomeno Rossi sul piano mediatico, grazie senz'altro ai suoi successi ma anche alla capacità innata di saper conquistare il pubblico, ad esempio con i suoi incredibili modi di festeggiare ogni successo. Travestimenti, prese in giro, scherzi che entrano nel mondo delle corse. In tutti i circuiti gli appassionati aspettano l'ennesima 'trovata' del pilota di Tavullia, che a seconda delle circostanze, si trasforma in Robin Hood, Superman, o gladiatore.Per non parlare poi della sua eterna rivalità con l'altro campionissimo Max Biaggi, stella inizialmente oscurata dall'astro Rossi. Una rivalità che ha dato origine a numerosi e spiacevoli dissapori.";
  $dividi = explode('.', $paragrafo); // con la funzione explode gli dico che quando trova un '.' deve ritornare un nuovo paragrafo
  //var_dump($dividi);
 ?>

 <?php
 foreach ($dividi as $key) { // effettuo un ciclo per permettermi di stampare a schermo i paragrafi generati
   echo '<p>'.$key.'</p>'; // stampo a schermo
 }
  ?>
