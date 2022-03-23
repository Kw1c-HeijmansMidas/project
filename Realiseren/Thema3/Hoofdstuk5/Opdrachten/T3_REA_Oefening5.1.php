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
    <link href="../../Template/styles/style.css" rel="stylesheet">
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
            <input type="datetime-local" name="date" id="date "><br>
                <label for="wrong">Reden van uitschrijving:</label>
                <select name="wrong" id="wrong">
                    <option>verkeerde keuze</option><br>
                </select>

            <p>Leerjaar<br>
                <label><input type="radio" name="jaar" value="leerjaar 1">1e leerjaar</label><br>
                <label><input type="radio" name="jaar" value="leerjaar 2">2e leerjaar</label><br>
                <label><input type="radio" name="jaar" value="leerjaar 3">3e leerjaar</label><br>
            </p>
            <label><input type="checkbox" name="box" value="aanmelden">Ik wil me aanmelden bij de succesklas</label><br>
            <label><input type="checkbox" name="box" value="verwijderen">Verwijder mijn gegevens uit het systeem</label><br>

            <label for="reason">Geef hieronder de reden van je uitschrijving op</label><br>
            <textarea name="reason" id="reason" rows="9" cols="45"></textarea><br>

            <input type="submit">
        </form>
    </section>
</main>
<?php
include "../../.././Includes/footer.php"
?>
</body>
</html>

