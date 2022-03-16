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
            include "../../.././Includes/functions.php";
            echo "Het is nu " . $date . " seconden na 1 januari 1970 middernacht";
            ?>
        </p>
        <p>
            <?php
            echo "Een leuk tweedehands autootje kost 2500 euro. Ik heb 1500 euro gespaard. Ik zet het geld op de bank en krijg daarop een waanzinnige rente van 6% per maand! Ik ga met een while-loop uitrekenen hoeveel maanden ik moet wachten om de 2500 euro te betalen.
             maanden moet ik nog betalen. <br>";
            echo "Op maand nr." . " heb ik gespaard";
            ?>
        </p>
    </section>
</main>
<?php
include "../../.././Includes/footer.php"
?>
</body>
</html>

