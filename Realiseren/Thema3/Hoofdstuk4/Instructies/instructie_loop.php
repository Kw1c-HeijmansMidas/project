<?php

//Statement 1: Beginsituatie, Statement 2: voorwaarde(true), Statement 3: aan het einde van de loop
for($i = 0; $i < 1000; $i = $i + 1)
{
    echo $i . "<br>";
}
//While
$beers = 24;
$beersADay = 3;
$day = 0;

while($beers > $beersADay)
{
    $beers = $beers - $beersADay;
    $day = $day + 1;
    echo "Op dag " . $day. " heb ik nog " .$beers. " biertjes <br>";
}

?>