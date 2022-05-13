<?php

require_once ('./manager.php');
require_once ('./directeur.php');


$al = new Manager('Capone', 'Al', 32); //un objet
$sylvie = new Secretaire('Durant', 'Sylvie', 30);


$al->direBonjour();
$sylvie -> direBonjour();

