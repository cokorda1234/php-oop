<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';


$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo  "<br>";
echo $sheep->cold_blooded ;// false
echo  "<br>";
$sungokong = new ape("kera sakti");
echo $sungokong->name;
echo  "<br>";
$sungokong->yell();
echo  "<br>";
$kodok = new frog("buduk");

echo $kodok->legs;
echo  "<br>";
echo $kodok->jump();

?>