<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

$string= "Li vuoi quei kiwi? E se non vuoi quei kiwi che kiwi vuoi?";

echo $string;

echo "<br>";

echo "<br>";

echo strlen ($string) ;

echo "<br>";

echo "<br>";

echo $newName = str_replace("kiwi", "***", $string);

$explodedText = explode(",", $string);

var_dump($explodedText);

?>