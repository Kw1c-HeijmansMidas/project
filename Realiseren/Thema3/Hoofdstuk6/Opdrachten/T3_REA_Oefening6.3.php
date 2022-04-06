<?php
include "../../../././Includes/variabelen.php"
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
                                          value="schaar"><img src="images/Scissor-PNG-HD-Images.png" width="50px" height="50px"></div>
            </form>
            <?php
            if (isset($_GET['keuze']))
            {
            echo "Jij koos: <img src='images/{$_GET['keuze']}.png' width='50px' height='50px'>";
            //keuze computer?
            }
            //Wat kiest de computer
            //Random wordt er een getal tussen 0 en 2 gekozen
             $opties = array("steen","papier","schaar");
             $computerkeuzegetal = rand(0,2);
             $computerkeuze = $opties[$computerkeuzegetal];
            echo "&nbsp;&nbsp;De computer koos: <img src='images/{$computerkeuze}.png' width='50px' height='50px'>";
            ?>
            <?php
            $count1 = 0;
            $count2 = 0;

            if ($_GET['keuze'] == "papier" && $computerkeuze == "steen" || gebruiker steen && computer schaar || gebruiker schaar && computer papier)

            ?>
            <br>
            <br>
            <input type="submit" value="Versturen">

        </form>

</main>
<?php
include "../Opdrachten/includes/footer.php"
?>
</body>
</html>

