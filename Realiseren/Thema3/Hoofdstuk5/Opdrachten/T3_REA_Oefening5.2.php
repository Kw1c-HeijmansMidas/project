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
        <form method="post" action="T3_REA_Oefening5.2_result.php">
            <table>
                <tr>
                    <td colspan="2">
                        <h1>Inloggen</h1>
                        <p>
                            Welkom op onze website. <br>
                            Na correct in te loggen, krijgt u toegang tot onze schatkist. Deze is dan voor u, om te gebruiken!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="username">Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" id="username" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="password">Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" required><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Verzenden">
                    </td>
                </tr>
            </table>
        </form>


    </section>
</main>
<?php
include "../../.././Includes/footer.php"
?>
</body>
</html>
