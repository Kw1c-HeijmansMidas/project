<?php
$color = "groen";
$ambulanceComing = false;
function CheckTrafficLight($color, $ambulanceComing)
{

    if ($ambulanceComing == false) {
//        Checkt of de ambulance groen is
        if ($color != "oranje" || $color != "rood"){
            echo "U mag doorrijden!";
        }

        else {
            echo "U moet stoppen!";
        }
    }

    else
    {
        echo "U moet stoppen er komt een ambulance aan!";
    }
}
?>

<?php
$date = date ("U");
?>

<?php
function CalculateInterest();


//Statement 1: Beginsituatie, Statement 2: voorwaarde(true), Statement 3: aan het einde van de loop
for($counter = 0; $counter; $counter = $counter + 1)
{
    echo $i . "<br>";
}
?>