<?php
/**
 * User: Midas Heijmans
 * Date: 14-03-22
 * File: Project thema 3
 */
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
    <link href="../styles/homekw1c.css" rel="stylesheet">
    <link href="../styles/forms.css" rel="stylesheet">
    <link href="../styles/menu2.css" rel="stylesheet">
</head>
<body>
<!--include voor nav-->
<nav>
    <?php
    include "../includes/header.php"
    ?>
</nav>
<!--start header-->
<header>
    <!-- title-->
    <h1 id="title">
        Score:
    </h1>
    <!--rode streep -->
    <img src="../images/Screenshot%202022-04-13%20120735.jpg" alt="redline" id="redline">
</header>
<!--start main-->
<main>
    <?php
        date_default_timezone_set("Europe/Amsterdam");
        echo date("d-M-y") .  "<br>" . date("H:i") . "<br>";
        echo $_POST["name"]
    ?>
</main>
<!--start footer-->
<footer>
    <?php
    include "../includes/footer.php"
    ?>
</footer>
</body>
</html>