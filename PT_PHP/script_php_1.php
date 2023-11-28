<?php
echo "Entrez un mot : ";
$mot = trim(fgets(STDIN));
$mot_length = strlen($mot);

for ($i = 0; $i < $mot_length; $i++) {
    echo ($i + 1) . ": " . $mot[$i] . " x " . ($i + 1) . "\n";
}
