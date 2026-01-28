<?php

// Import les classes
// require_once 'mesClasses/Arme.php';
// require_once 'mesClasses/ArmeBlanche.php';

// require_once 'mesClasses/Arc.php';
// require_once 'mesClasses/Couteau.php';
// require_once 'mesClasses/Hache.php';

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class).'.php';
    if(file_exists($file)) require $file; /* require 'MonJeu/Materiel/Baguette.php' */
});

use Personnage\Magicien;
use Materiel\Baguette;

// Logique de notre code
$merlin = new Magicien();
$baguetteDeSureau = new Baguette();

echo $merlin->lancerSort();
echo "<br>";
echo $baguetteDeSureau->briller();