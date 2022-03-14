<?php
/**
 * User: Mike Huijberts
 * Date: 21-2-2021
 * File: T3_REA_Oefening3.1.php
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
    <link href="./stylesheet/style.css" rel="stylesheet">
</head>
<body>
<?php
    include "../../.././Includes/header.php"
?>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
        include "../../.././Includes/nav.php"
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
            $feestDag = " Carnaval ";
            $dag = " 3 ";
            $weekDag = [" zondag ", " maandag ", " dinsdag "];
            $dag2 = " 40 ";
            $land = " Nederland ";
            $plaats = " Noord-Brabant ";
            $eten = " Worstenbrood ";
            $drinken = " koffie Schrobbeler ";

            echo    $feestDag . "is van oorsprong een gekerstend heidens volksfeest. Het duurt
                    officieel" . $dag . "dagen" . $weekDag[0] . "," . $weekDag[1] . "," . $weekDag[2] . "direct voorafgaand aan de
                    vastentijd van dagen" . $feestDag. "is bij uitstek het feest van zotheid, spot
                    en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel" .
                    $land . "een gebruik om" . $feestDag . "op carnavalsvrijdag te openen. Op
                    Aswoensdag wordt" . $feestDag. "afgesloten, maar de tradities verschillen per
                    regio. In het overgrote deel van" . $plaats . "wordt er afgesloten met
                    " . $eten . "," . $drinken . "soms met een Brabantse koffietafel.";








            ?>
        </p>
    </section>
</main>
<?php
    include "../../.././Includes/footer.php"
?>
</body>
</html>

