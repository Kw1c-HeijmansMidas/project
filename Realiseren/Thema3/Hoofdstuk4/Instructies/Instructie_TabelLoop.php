<?php

////For loop om een tabel aan te maken
//echo "<table>";
////Beginsituatie voorwaarde                           row++ == row = row + 1;
//for($row = 0; $row < 10; $row++)
////True/false
//{
//    echo "<tr>";
//            for ($cel = 0; $cel < 5; $cel++)
//            {
//                echo "<td>";
//                echo "col =" . $cel . " en rij is " . $row;
//                echo "</td>";
//            }
//    echo "</tr>";
//}
//
//echo "</table>";

//Functie om per maand te laten zien hoeveel je nog moet afbetalen

function priceMonth($price, $monthly, $deposit)
{
    $cost = $price - $deposit;
    $counter = 0;
    while($cost - $monthly)
    {
//        Elke keer 30 euro van de kosten af
        $cost = $cost - $monthly;
//        Tellen we de kosten + 1
        $counter = $counter + 1;
        echo "Na " . $counter . " maanden moet ik nog " . $cost . " betalen. <br>";
    }


}

priceMonth(1200, 30, 150);













?>

