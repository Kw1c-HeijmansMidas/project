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
<header>
    <h1>
        <?php
        echo 'Uitwerkingen van PHP-oefeningen';
        ?>
    </h1>
</header>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <nav>
        <h2>Thema 3</h2>
        <ul><li><h3 class="kop">Hoofdstuk 2</h3></li>
            <ul>
                <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.1.php">Oefening 1.1</a></li>
                <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk1/Oefening/T3_REA_Oefening1.2.php">Oefening 1.2</a></li>
            </ul>
        </ul>
        <ul><li><h3 class="kop">Hoofdstuk 3</h3></li>
            <ul>
                <li><a href="/REA_T3T4/Realiseren/Thema3/Hoofdstuk3/Opdrachten/T3_REA_Oefening3.1.php">Oefening 3.1</a></li>

            </ul>
        </ul>
    </nav>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
            $feestDag = " Carnaval ";
            $dag = 3;
            $weekDag = [" zondag, ", " maandag ", " dinsdag "];
            $dag2 = 40;
            $land = " Nederland ";
            $plaats = " Noord-Brabant ";
            $eten = " Worstenbrood ";
            $drinken = " koffie Schrobbeler ";

            echo $feestdag . "is van oorsprong een gekerstend heidens volksfeest. Het duurt
                    officieel" . $dag. "dagen," . $weekDag. "direct voorafgaand aan de
                    vastentijd van dagen" . $feestdag. "is bij uitstek het feest van zotheid, spot
                    en uitbundigheid. Inmiddels is het in verschillende plaatsen door heel" .
                    $land . "een gebruik om" . $feestdag . "op carnavalsvrijdag te openen. Op
                    Aswoensdag wordt" . $feestdag. "afgesloten, maar de tradities verschillen per
                    regio. In het overgrote deel van" . $plaats . "wordt er afgesloten met
                    " . $eten . "," . $drinken . "soms met een Brabantse koffietafel.";








            ?>
        </p>
    </section>
</main>
</body>
</html>

