<?php
$salaire = 0;

while ($salaire < 1500 || $salaire > 3000) {
    echo "Veuillez entrer un salaire entre 1500€ et 3000€ : ";
    $salaire = (float) fgets(STDIN);
}

$lesJourDeMoi =  31;

for ($jour = 1; $jour <= $lesJourDeMoi; $jour++) {
    $sommeEnlevee = rand(30, 50);
    $salaire -= $sommeEnlevee;

    echo "Jour n° $jour, il me reste $salaire €" . PHP_EOL;

    if ($salaire <= 0) {
        echo "Mon compte est vide et on est le $jour ieme jour du mois" . PHP_EOL;
        exit;
    }
}

if ($salaire > 0) {
    $argentEconomise = $salaire;
    echo "Vous économisez $argentEconomise €, Félicitations !" . PHP_EOL;
}
