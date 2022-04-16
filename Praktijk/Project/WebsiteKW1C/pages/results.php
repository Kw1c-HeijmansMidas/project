<?php
/**
 * User: Midas Heijmans
 * Date: 14-03-22
 * File: Project thema 3
 */
?>
<!DOCTYPE html>
<html lang="nl">
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
    <link href="../styles/menu2.css" rel="stylesheet">
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
        if (isset($_POST["name"]) == true)
        {
            echo "beste " . $_POST["name"];
        }
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
            if (isset($_POST[$vragen[$i]]) == true)
            {
                if ($_POST[$vragen[$i]] == "ja")
                {
                    $points = $points+1;
                }
            }
            else
            {
                $fout = true;
            }
        }

        if ($fout == false)
        {
            echo ", je hebt " . $points . " van de 12 punten. <br>";
            if ($points >= 8)
            {
                echo "zo hey, je hebt wel veel punten! mischien is deze opleiding wel wat voor jouw :) <br>";
                echo "<a href='https://www.kw1c.nl/afdeling/811/ict-academie'>inschrijven</a>";
            }
            else
            {
                echo "hmmmm, mischien is deze opleiding niet iets voor jouw :/ <br>";
                echo "<a href='https://www.kw1c.nl/opleidingen'>andere opledingen</a>";
            }
        }
        else
        {
            echo "er is iets fout gegaan";
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