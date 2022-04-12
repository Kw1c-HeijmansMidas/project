<?php
include "../../../././Includes/variabelen.php";
session_start();
if (isset($_SESSION['user1']) == false || ($_SESSION['user2']) == false ) {
    $_SESSION['user1'] = 0;
    $_SESSION['user2'] = 0;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4. thimo was hier';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/style.css" rel="stylesheet">
</head>
<body>
<?php
include "../../../././Includes/header.php"
?>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
    include "../../../././Includes/nav.php"
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->

        <form id="gameFrm" method="get" action="T3_REA_Oefening6.3.php">
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="steen"><img src="images/steen.png" width="50px" height="50px"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="papier"><img src="images/papier.png" width="50px" height="50px"></div>
            <div class="float"><input type="radio"
                                      onchange="document.getElementById('gameFrm').submit();" name="keuze"
                                      value="schaar"><img src="images/schaar.png" width="50px"
                                                          height="50px"></div>
        </form>


        <?php

        if (isset($_GET["keuze"])) {
            echo "Jij koos: <img src='images/{$_GET["keuze"]}.png' width='50px' height='50px'>";
            //keuze computer?

            //Wat kiest de computer
            //Random wordt er een getal tussen 0 en 2 gekozen
            $opties = array("steen", "papier", "schaar");
            $computerkeuzegetal = rand(0, 2);
            $computerkeuze = $opties[$computerkeuzegetal];
            echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.png' width='50px' height='50px'>";


            if ($_GET["keuze"] == "papier" && $computerkeuze == "steen" || $_GET["keuze"] == "steen" && $computerkeuze == "schaar" || $_GET["keuze"] == "schaar" && $computerkeuze == "papier") {
                $_SESSION['user1'] += 1;
            } elseif ($_GET["keuze"] == "steen" && $computerkeuze == "papier" || $_GET["keuze"] == "schaar" && $computerkeuze == "steen" || $_GET["keuze"] == "papier" && $computerkeuze == "schaar") {
                $_SESSION['user2'] += 1;
            }
            //De stand
            echo "<br>" . "Jou score is " . $_SESSION['user1'] . " de computers score is " . $_SESSION['user2'];
            if ($_SESSION['user1'] == 5)
            {

                echo "<br>" . "Jij hebt gewonnen";
                session_destroy();


            }
            elseif ($_SESSION['user2'] == 5)
            {
                echo "<br>" . "De computer heeft gewonnen";
                session_destroy();
            }
        }
        ?>

</main>
<?php
include "../Opdrachten/includes/footer.php"
?>
</body>
</html>

