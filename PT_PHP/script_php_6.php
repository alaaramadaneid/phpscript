<?php
$tableau = array();
echo "entrerz votre numbre :";
$input = trim(fgets(STDIN)); 

for ($i = 0; $i < 30; $i++) {
    $nombre_aleatoire = rand(20, 100);
    $tableau[] = $nombre_aleatoire;
}

echo "Valeurs du tableau avant le tri :\n ";
echo "\n";
print_r($tableau);
echo "\n";

sort($tableau);

echo "Valeurs du tableau après le tri croissant :\n";

print_r($tableau);
echo "\n";

rsort($tableau);

echo "Valeurs du tableau après le tri décroissant :\n";
echo "\n";
print_r($tableau);

?>