<?php
/**
 * User: Midas Heijmans
 * Date: 14-03-22
 * File: Project thema 3
 */
?>
<!DOCTYPE html>
<html lang="nl">
<!--start head-->
<head>
    <title>
        <?php
        echo 'Realiseren instructies thema 3 en 4.';
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/homekw1c.css" rel="stylesheet">
    <link href="../styles/forms.css" rel="stylesheet">
    <link href="../styles/menu.css" rel="stylesheet">
</head>
<body>
<!--include voor nav-->
<nav>
    <?php
    include "../includes/header.php"
    ?>
</nav>
<!--start header-->
<header>
    <!-- title-->
    <h1 id="title">
        Score:
    </h1>
    <!--rode streep -->
    <img src="../images/Screenshot%202022-04-13%20120735.jpg" alt="redline" id="redline">
</header>
<!--start main-->
<main>
    <?php
        $fout = false;
        date_default_timezone_set("Europe/Amsterdam");
        echo date("d-M-y") .  "<br>" . date("H:i") . "<br>";
        // kijkt of de variable bestaat
        if (isset($_POST["name"]) == true)
        {
            echo "beste " . $_POST["name"];
        }
        // als die niet bestaat word er aangegeven dat er een fout is.
        else
        {
            $fout = true;
        }


        // naam van alle vragen in een array
        $vragen = ["ervaring","leuk","uren","teams","stress","creatief","box","deadline","leren","concentratie","efficient","compact"];
        $points = 0;
        // loopt via alle vragen en kijkt of het antwoord ja is
        for ($i=0; $i<12 ;$i++)
        {
            // kijkt of de variable bestaat
            if (isset($_POST[$vragen[$i]]) == true)
            {
                // kijkt of het antwoord ja is, in dat geval word er een punt gegeven
                if ($_POST[$vragen[$i]] == "ja")
                {
                    $points = $points+1;
                }
            }
            else
                // als de variable niet bestaat word er een foutmelding gegeven
            {
                $fout = true;
            }
        }

        // als er niets fout is gegaan word dit weergeven
        if ($fout == false)
        {
            echo ", je hebt " . $points . " van de 12 punten. <br>";
            // je moet 8 of meer punten hebben om door te kunnen gaan
            if ($points >= 8)
            {
                echo "zo hey, je hebt wel veel punten! mischien is deze opleiding wel wat voor jouw :) <br>";
                echo "<a href='https://www.kw1c.nl/afdeling/811/ict-academie'>inschrijven</a>";
            }
            else
                // bij minder dan 8 punten word er een link gegeven naar andere opleidingen
            {
                echo "hmmmm, mischien is deze opleiding niet iets voor jouw :/ <br>";
                echo "<a href='https://www.kw1c.nl/opleidingen'>andere opledingen</a>";
            }
        }
        else
            // als er iets fout is gegaan word dit aangegeven en krijg je een lijk naar de vragenlijst
        {
            echo "er is iets fout gegaan <br>";
            echo "<a href='forms.php'>vragenlijst</a>";
        }

    ?>
</main>
<!--start footer-->
<footer>
    <?php
    include "../includes/footer.php"
    ?>
</footer>
</body>
</html>