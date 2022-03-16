<?php
//$color = "groen";
//$ambulanceComing = false;
//function CheckTrafficLight($color, $ambulanceComing)
//{
//
//    if ($ambulanceComing == false) {
////        Checkt of de ambulance groen is
//        if ($color != "oranje" || $color != "rood"){
//            echo "U mag doorrijden!";
//        }
//
//        else {
//            echo "U moet stoppen!";
//        }
//    }
//
//    else
//    {
//        echo "U moet stoppen er komt een ambulance aan!";
//    }
//}
//?>
<!---->
<?php
//$date = date ("U");
//?>

<?php
            function CalculateInterest($saved, $savedUp)
            {
                $total = $saved - $savedUp;
                $counter = 0;
                while($saved - $savedUp)
                {

                    $total = $savedUp * $savedUp;

                    $counter = $counter + 1;
                }


            }
            CalculateInterest(2500, 1500);
            ?>