<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php

$string= "Li vuoi quei kiwi? E se non vuoi quei kiwi che kiwi vuoi?";

echo $string;

$badword = $_GET["badword"];

echo "<br>";

echo strlen ($string) ;

echo "<br>";

$newString = str_replace($badword, "***", $string);

echo $newString;

$explodedText = explode(",", $string);

var_dump($explodedText);

?>