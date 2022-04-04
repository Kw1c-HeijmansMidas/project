<?php
include "../../../.././Includes/variabelen.php"
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
    <link href="../../Styles/style.css"
</head>
<body>
<?php
include "../../../.././Includes/header.php"
?>
<?php
//Hier gaan we in het volgende hoofdstuk het menu toevoegen.
?>
<main id="wrapper">
    <?php
    include "../../../.././Includes/nav.php"
    ?>
    <section>
        <h2>
            Uitwerking
        </h2>

        <!-- Plaats je code / uitwerking hieronder -->

        <form action="instructie_sessions_result.php" method="post">
            <p>
                Username:
            </p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>



            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>


            <br>
            <br>
            <input type="submit" value="Versturen">

        </form>

</main>
<?php
include "../../../.././Includes/footer.php"
?>
</body>
</html>

