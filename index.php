<?php

require_once ('./manager.php');
require_once ('./idirecteur.php');
require_once ('./secretaire.php');


$al = new Manager('Capone', 'Al', 32); //un objet
$sylvie = new Secretaire('Durant', 'Sylvie', 30);
$sylvie->prendRDV($al,"Eliott Ness demain à 3h du mat. sur les docks...");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test coloboratif</title>
</head>
<body>

<?php 
    $al->direBonjour();
    echo "<br>";
    $sylvie->direBonjour();
    echo "<br>";
    $al->afficherRDV();




?>    
</body>
</html>
