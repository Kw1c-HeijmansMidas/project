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