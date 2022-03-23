<?php
include "../../../Includes/variabelen.php"
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
    <link href="../../Template/styles/style.css" rel="stylesheet">
</head>
<body>
<?php
include "../../../Includes/header.php"
?>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
    include "../../../Includes/nav.php"
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <form method="post" action="instructie_forms2_result.php">
            <p>
                <label for="fullname">Naam</label>
                <input type="text" name="fullname" id="fullname" required>
            </p>
            <p>
                <label for="location">Locatie:</label>
                <select name="location" id="location">
                    <option value="AMS">Amsterdam</option>
                    <option value="ROT">Rotterdam</option>
                    <option value="EIN">Eindhoven</option>
                </select>
            </p>
            <p>
                <label for="aantalPersonen">Aantal personen:</label>
                <input type="number" name="aantalPersonen" id="aantalPersonen">
            </p>
            <p>
                <label for="nummer">Telefoonnummer:</label>
                <input type="tel" name="nummer" id="nummer">
            </p>
            <p>
                <label for="datum">Datum:</label>
                <input type="datetime-local" name="datum" id="datum">
            </p>
            <p>
                <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
                <input type="checkbox" name="voorwaarden" id="voorwaarden" value="voorwaarden">
            </p>

            <input type="submit" value="Reserveren">
        </form>
    </section>
</main>
<?php
include "../../../Includes/footer.php"
?>
</body>
</html>

