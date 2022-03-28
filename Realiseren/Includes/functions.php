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

?>
<?php
$date = date ("U");



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
//echo $total;


    function createPiramid($height)
    {
        for ($i=0; $i < $height; $i++)
        {
            for($j=0; $j <$i; $j++)
            {
                echo $j;
            }
            echo "*<br>";
        }
    }
?>

<?php




?>