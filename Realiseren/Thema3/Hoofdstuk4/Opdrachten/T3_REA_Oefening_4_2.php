<?php
    include "../Instructies/Includes/variabelen.php"
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
    include "../Instructies/Includes/header.php"
?>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
        include "../Instructies/Includes/nav.php"
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->
        <p>
            <?php
                require_once "../Instructies/Includes/functions.php";
                echo CheckTrafficLight($color, $ambulanceComing);

            ?>
        </p>
    </section>
</main>
<?php
    include "../Instructies/Includes/footer.php"
?>
</body>
</html>

