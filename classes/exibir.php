<?php
include "Animal.php";

$umAnimal = new Animal (4, 1, 'Esquilo', 'Selvagem', 2);
echo $umAnimal->getNome();
echo "<br>";
echo $umAnimal->comunicar();

