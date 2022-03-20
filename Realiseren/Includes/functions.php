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
//            function CalculateInterest($saved, $savedUp, $procent)
//            {
//                $total = $savedUp * $procent;
//                $counter = 0;
//                while($saved < $savedUp)
//                {
//
//                    $total = $total * $procent;
//
//                    $counter = $counter + 1;
//                }
//
//
//            }
//            CalculateInterest(2500, 1500, 1.06);
//
//echo "Een leuk tweedehands autootje kost 2500 euro. Ik heb 1500 euro gespaard. Ik zet het geld op de bank en krijg daarop een waanzinnige rente van 6% per maand! Ik ga met een while-loop uitrekenen hoeveel maanden ik moet wachten om de 2500 euro te betalen.
//                maanden moet ik nog betalen. <br>";
//
//echo $total;

?>