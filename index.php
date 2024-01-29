<?php
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$auteur1 = new Auteur("King", "Stephen");


$livre1 = new Livre("Ca", "1986-01-01", 1138, 20, $auteur1);
$livre2 = new Livre("Simetierre", "1983", 374, 15, $auteur1);
$livre3 = new Livre("Le Fléau", "1978", 823, 14, $auteur1);
$livre4 = new Livre("Shining", "1977", 447, 16, $auteur1);
$livre5 = new Livre("Test", "2000", 447, 16, $auteur1);



echo $auteur1->afficherBibliographie();