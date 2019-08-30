<?php

$id_foglio = $_GET['id_foglio'];
$n_simu = $_GET['n_simu'];
$logica = $_GET['logica'];
$cultura = $_GET['cultura'];
$biologia = $_GET['biologia'];
$chimica = $_GET['chimica'];
$matfis = $_GET['matfis'];
$punteggio = $_GET['punteggio'];


echo $id_foglio.' ha totalizzato un punteggio di: '.$punteggio.' (logica: '.$logica.', cultura: '.$cultura.', biologia: '.$biologia.', chimica: '.$chimica.', matfis: '.$matfis.')';

?>