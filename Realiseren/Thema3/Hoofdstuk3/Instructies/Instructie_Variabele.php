<?php
/**
 * User: Mike Huijberts
 * Date: 21-2-2021
 * File: Instructie_Variabele.php
 */


echo "Mike Huijberts<br>";

$schoolNaam = "Koning Willem 1 College";

//echo $schoolNaam;

$schoolAdres = "Onderwijsboulevard 3<br>";

echo "Het adres van het " . $schoolNaam . " is " . $schoolAdres;
//echo "Het adres van het $schoolNaam is $schoolAdres";
$isWorking = true; //Boolean
$age = 34; //Integar
$lengthinM = 1.91;//Float
$favoroteColor =["Blue", "Red"]; //array methode1
$favoriteColor2 = array("Blue", "Red"); //array methode2
$price = null;

$number1 = 2;
$number2 = -69;
$number3 = 420;


echo $number1 * $number2. "<br>";
echo ($number1 + $number2) * $number3;

?>