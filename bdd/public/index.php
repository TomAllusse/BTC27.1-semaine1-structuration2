<?php

require_once '../config/db.php';
require_once '../src/Entities/Tache.php';
require_once '../src/Managers/TacheManager.php';

$manager = new TacheManager($db);

$tacheAll = $manager->getAll();

/* $_POST */

if(!empty($_POST["content"])){
    /* Récupère la donnée du formulaire */
    $content = $_POST['content'];

    /* Créer l'objet */
    $newTache = new Tache();
    $newTache->setContent($content);

    /* Ajouter à la db */
    $manager->add($newTache);
    
    /* Forcer le reload */
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="content" placeeholder="Ma tache" required>
        <button type="submit">Envoyer</button>
    </form>
    <div>
        <?php
            foreach ($tacheAll as $tacheOne) {
        ?>
        <li style="margin:10px">
            <span>
                <?= htmlspecialchars($tacheOne->getContent()); ?>
            </span>
        </li>
        <?php
            }
        ?>
    </div>
</body>
</html>