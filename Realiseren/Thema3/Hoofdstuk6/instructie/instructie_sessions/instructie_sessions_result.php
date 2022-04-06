
<?php
session_start();
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
        <link href="../../Styles/style.css" rel="stylesheet">
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

            <?php
            //Opstarten van een sessie


            $username = "Mike";
            $password = "Kw1c";

            if ($username == $_POST["username"] && $password == $_POST["password"])
            {
                echo "Succesvol ingelogd";
            //    Toevoegen van een waarde aan mijn sessie
                $_SESSION["loggedIn"] = true;
            }

            else
            {
                echo "Niet ingelogd";
            }
            ?>

    </main>
    <?php
    include "../../../.././Includes/footer.php"
    ?>
    </body>
    </html>

