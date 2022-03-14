<?php
    include "../../.././Includes/variabelen.php"
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
    <link href="../Instructies/stylesheet/style.css" rel="stylesheet">
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
                require_once "../../.././Includes/functions.php";
                echo CheckTrafficLight(false, "groen");
            ?>
        </p>
    </section>
</main>
<?php
    include "../../.././Includes/footer.php"
?>
</body>
</html>

