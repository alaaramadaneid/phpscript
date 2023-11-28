<?php

$tableau = array();

while (true) {
    echo "Entrez une valeur numérique (ou 'q' pour quitter) : ";
    $input = trim(fgets(STDIN)); 
    
    if ($input === 'q') {
        break; 
    }

    if (is_numeric($input)) {
        $valeur = floatval($input); 
        $tableau[] = $valeur;
    } else {
        echo "Veuillez entrer une valeur numérique valide ou 'q' pour quitter.\n";
    }
}

echo "Nombre de valeurs dans le tableau : " . count($tableau) . "\n";

$somme = array_sum($tableau);
echo "Somme des valeurs du tableau : " . $somme . "\n";

echo "Valeurs du tableau :\n";
print_r($tableau);

sort($tableau);

echo "Valeurs du tableau triées dans l'ordre croissant :\n";
print_r($tableau);

?>
