<?php
$noms = ["François", "Michel", "Nicole", "Véronique", "Benoît"];
$newnom = 'Leeloo';    

$noms[5] = $newnom;

foreach ($noms as $nom) {
    print_r($noms);
}
?>