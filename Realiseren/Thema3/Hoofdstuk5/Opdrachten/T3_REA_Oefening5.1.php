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
    <link href="../Instructie/Styles/style.css" rel="stylesheet">
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
        <form method="get" action="T3_REA_Oefening5.1_result.php">
            <label for="name">Voor en achternaam:</label>
            <input type="text" name="name" id="name"><br>
            <label for="studentNumber">Studentennummer:</label>
            <input type="text" name="studentNumber" id="studentNumber"><br>
            <label for="date">Datum van uitschrijving:</label>
            <input type="text" name="date" id="date "><br>
            <p>Leerjaar <br>
                <label><input type="radio" name="jaar" value="leerjaar 1">1e leerjaar</label>
                <label><input type="radio" name="jaar" value="leerjaar 2">2e leerjaar</label>
                <label><input type="radio" name="jaar" value="leerjaar 3">3e leerjaar</label>
            </p>
            <label><input type="radio" name="jaar" value="leerjaar 2">Ik wil me aanmelden bij de succesklas</label>
            <label><input type="radio" name="jaar" value="leerjaar 3">Verwijder mijn gegevens uit het systeem</label>
            <input type="submit">
        </form>
    </section>
</main>
<?php
include "../../.././Includes/footer.php"
?>
</body>
</html>

