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
    <link href="../../../../Realiseren/Thema3/Hoofdstuk4/Instructies/stylesheet/style.css" rel="stylesheet">
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
        <form method="get" action="instructie_forms_result.php">
            <label for="name">Naam:</label>
        <input type="text" name="name" id="name">
            <label for="lastName">Achternaam:</label>
            <input type="text" name="lastName" id="lastName">
            <p>Wil je naar huis? <br>
            <label><input type="radio" name="huis" value="Ja naar huis">Ja, naar huis.</label>
            <label><input type="radio" name="huis" value="Nee we gaan niet naar huis">We gaan nog niet naar huis.</label>
            </p>
            <input type="submit">
        </form>
    </section>
</main>
<?php
include "../../../Includes/footer.php"
?>
</body>
</html>

