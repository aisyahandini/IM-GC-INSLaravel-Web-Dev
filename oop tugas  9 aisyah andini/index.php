<?php
require_once"animal.php";
require_once"frog.php";
require_once"ape.php";

$sheep = new animal("shaun");
echo "name: ".$sheep->name."<br>"; // "shaun"
echo "legs: ".$sheep->legs."<br>";// 4
echo "cold blooded : ".$sheep->cold_blooded."<br><br>"; // "no"


$kodok = new frog("duduk") ; // "hop hop" output akhir
echo "name: ".$sheep->name."<br>"; // "shaun"
echo "legs: ".$sheep->legs."<br>";// 4
echo "cold blooded : ".$sheep->cold_blooded."<br>"; // "no"
echo "jump : ".$kodok->jump . "<br><br>";

$sungokong = new ape("kera sakti");
echo "name: ".$sheep->name."<br>"; // "shaun"
echo "legs: ".$sheep->legs."<br>";// 4
echo "cold blooded : ".$sheep->cold_blooded."<br>"; // "no"
echo "yell : ".$sungokong->yell . "<br><br>";
?>

