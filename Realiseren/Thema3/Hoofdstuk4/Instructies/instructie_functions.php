<?php
date_default_timezone_set("Europe/Amsterdam");
$date = date("d-m-Y H:i");

//echo $date;

echo time();

function showName($name, $age)
{

//    $name = "Mike";
    echo " Mijn naam is " . $name . " en mijn leeftijd is " . $age;
    if($age < 18)
    {
        echo " You have computer virus *indian music*";
    }
    else {
        echo " You still have computer virus *more indian music*";
    }
}

$age = 16;
showName("Piet", 18);


?>