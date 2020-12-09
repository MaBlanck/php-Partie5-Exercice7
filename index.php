<?php $departments = array(
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme'
);
$departments += [51 => 'Marne'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 7 Partie 5</title>
</head>

<body>
    <h1>Exercice 7 Partie 5</h1>
    <p><?= $departments[51] ?></p>
</body>

</html>