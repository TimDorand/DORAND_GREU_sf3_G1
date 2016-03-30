<?php

include './Player.php';
include './Vehicule.php';
include './Voiture.php';

$player = new Player();

$player
    ->setLife(10)
    ->setName('Meligreu')
    ->setStamina(5000)
;



echo '<html style="background:rgba(8, 16, 22, 0.6); width:90%; margin:auto;">';
echo '<h1 style="font-size:5em;font-family:Lato;font-weight:100;color:rgb(255, 255, 255);"><span style="font-size:5em">Player</span><br/><b>Vie: </b>' .$player->getLife().'<br/>';
echo '<b>Nom: </b>'.$player->getName().'<br/>';
echo '<b>Stamina: </b>'.$player->getStamina(). '<br/>

    <a href="../td_symfony">LE TD</a><br/>';


$voiture = new Voiture();

$voiture
    ->setColor('Gris')
    ->setMarque('Audi')
    ->setRoue(4)
    ->setSeat(5)
;

echo '<span style="font-size:5em">Auto</span><br/><b>Marque: </b>'.$voiture->getMarque().'<br/>';
echo '<b>Couleur : </b>'.$voiture->getColor().'<br/>';
echo '<b>Nombre de roues : </b>'.$voiture->getRoue().'<br/>';
echo '<b>Nombre de sieges : </b>'.$voiture->getSeat().'<br/>';

echo '</html>';

