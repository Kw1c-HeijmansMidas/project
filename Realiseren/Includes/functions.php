<?php
$color = "groen";
$ambulanceComing = false;
function CheckTrafficLight($color, $ambulanceComing)
{

    if ($ambulanceComing == false) {
        if ($color = "oranje" && $color = "rood") {
            echo "U moet stoppen";
        }

        else {
            echo "U mag doorrijden";
        }
    }

    else
    {
        echo "U moet stoppen";
    }
}
?>